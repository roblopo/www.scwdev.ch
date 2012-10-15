<?php
/*
Plugin Name: runPHP
Plugin URI: http://www.nosq.com/blog/runphp/
Description: Allows you to put PHP code into a post and have it eval()'d.
Version: 2.2.2
Author: James Van Lommel
Author URI: http://www.nosq.com
*/ 

/*
runPHP - Insert and run PHP code in your WordPress posts.
Tags: PHP, code
Contributors: jamesvl, Owen W., Philippe Corbes

Copyright (c) 2004-2007  James Van Lommel  (email: jamesvl at gmail)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/*
INSTRUCTIONS:

No edits to the WordPress source are required.

Just drop this into your WordPress plugins directory, and then 
Activate it on the Plugins tab of the WordPress admin console.

In Options > Writing
  * Deactive fixing invalidly nexted XHTML
  * Do NOT use this with the visual rich editor (tinyMCE)

Be sure to visit the Options page as an Administrator to adjust
which user groups have access to this plugin.
*/

//if (get_option('runPHP_use_i10n'))
if (defined('WPLANG') && '' != constant('WPLANG'))
   load_plugin_textdomain('runPHP', 'wp-content/plugins/runPHP');

// initialization
add_filter('activate_runPHP/runPHP.php',   array('runPHP', 'initialize'));
add_filter('deactivate_runPHP/runPHP.php', array('runPHP', 'uninstall'));
add_action('profile_personal_options', array('runPHP', 'profile_options_ui'));
add_action('personal_options_update',  array('runPHP', 'update_user_options'));

// UI
add_filter('edit_form_advanced', array('runPHP', 'InsertPostUI'));
add_filter('edit_page_form',     array('runPHP', 'InsertPostUI'));
add_filter('admin_head',         array('runPHP', 'InjectJSToMoveUI'));
add_action('admin_menu',         array('runPHP', 'AddOptionsSubmenu'));

// Saving changes
add_filter('edit_post',    array('runPHP', 'UpdateEvaldState'));
add_filter('publish_post', array('runPHP', 'UpdateEvaldState'));
add_filter('save_post',    array('runPHP', 'UpdateEvaldState'));
//add_filter('save_post',    array('runPHP', 'AdjustPHPCodeVisibility'));

// Functionality
add_filter('wp_head',         array('runPHP', 'DetermineAllEvaldPosts'));
add_action('rss_head',        array('runPHP', 'DetermineAllEvaldPosts'));
add_action('rss2_head',       array('runPHP', 'DetermineAllEvaldPosts'));
add_action('atom_head',       array('runPHP', 'DetermineAllEvaldPosts'));
add_action('rdf_header',      array('runPHP', 'DetermineAllEvaldPosts'));

add_filter('the_content',     array('runPHP', 'EvalContent'), 1);
add_filter('the_content_rss', array('runPHP', 'EvalContent'), 1);
add_filter('the_excerpt_rss', array('runPHP', 'EvalContent'), 1);

//add_filter('format_to_edit', array('runPHP', 'StripPHPCode'));

$runphp_metakey = 'runphp';
$all_evald_posts = array();

/*
   runPHP Plugin Filter Class

   All functions are static.
   Only instance data used are the two items above.
*/

class runPHP {

   // set up default settings for this plugin
   function initialize() {
       global $wp_roles;

       $curRoles = $wp_roles->get_names();

       foreach ($curRoles as $role => $roleName) {
          // Bug fix: Can't chain $wp_roles->get_role()->add_cap()
          //          because that only works in PHP5, not 4
          $roleObj = $wp_roles->get_role($role);

          if ('administrator' == $role)
             $roleObj->add_cap('can_runPHP', true);
          else
             $roleObj->add_cap('can_runPHP', false);
       }
   }

   function uninstall() {
       global $wp_roles;

       $curRoles = $wp_roles->get_names();

       foreach ($curRoles as $role => $roleName) {
          $roleObj = $wp_roles->get_role($role);
          $roleObj->remove_cap('can_runPHP');
       }
   }

   /*
      DetermineAllEvaldPosts()
      Mark which posts should be eval()'d for the current page.

      Instead of running runphp_eval_html() on the contents of *every* post
      we do it only on those posts marked for it. This avoids the cost of
      the preg_replace_callback() function.

      The contents of this function could be placed in any filter that is
      run *once* per page. (In this case, the wp_head() filter for posts.)
   */
   function DetermineAllEvaldPosts() {
      global $wpdb, $all_evald_posts, $runphp_metakey;

      $qry = "SELECT {$wpdb->posts}.ID
              FROM {$wpdb->posts}, {$wpdb->postmeta}
              WHERE {$wpdb->posts}.ID = {$wpdb->postmeta}.Post_ID
               AND meta_key = '{$runphp_metakey}'
               AND meta_value = '1'";

      $all_evald_posts = $wpdb->get_col($qry);

      return;
   }

   /**
    * InsertPostUI()
    *
    * Writes the little checkbox to the browser which allows a user to select
    * whether PHP code is run for this post or page.
    *
    * When called: when an Advanced Post Edit or New Page Form is being
    *    displayed in the admin menu.
    * Only written if the user has permission to modify runPHP status.
   */
   function InsertPostUI() {
      global $wpdb, $runphp_metakey;

      if (!runPHP::hasPermission())
         return;
      else {
         if (isset($_REQUEST['post'])) {
            $isEvald = runPHP::IsPostEvald($_REQUEST['post']);
            $checked = ('1' == $isEvald) ? ' checked="checked" ' : '';
         }
   ?>
      <fieldset id="runphpdiv" class="dbx-box">
      <h3 class="dbx-handle">runPHP</h3>
      <div id="runphpUI" class="dbx-content">
         <label class="selectit">
         <input type="checkbox" name="runphp_eval"
          value="true" <?php echo $checked; ?> > <?php _e('run PHP code?', 'runPHP'); ?></label>
         <input type="hidden" name="runphp-verify-key" id="runphp-verify-key"
          value="<?php echo wp_create_nonce('runphp') ?>" />
      </div>
      </fieldset>
   <?php
      }
   }

   /*
      InjectJSToMoveUI()
      Add JavaScript to move the post's PHP UI.

      If JavaScript is disabled then the checkbox appears at the bottom of
      the edit form.

      When called: when the footer is being written on every admin page.
      Only used if the user has permission to modify runPHP status.

      In the future, this bit of JavaScript could (should?) be moved to a
      separate JS file completely.

      Thanks to Owen Winkler and his Adhesive plugin for the idea behind
      this bit of JavaScript: http://www.asymptomatic.net/wp-hacks
   */
   function InjectJSToMoveUI() {
      if (!runPHP::hasPermission())
         return;

      // Are we on the right page?
      if (preg_match('/(post|page)(-new)?.php/i', $_SERVER['SCRIPT_NAME'])) {
         echo '
         <script type="text/javascript">
         //<![CDATA[
         function moveRunPHPCheckbox() {
            var placement = document.getElementById("grabit");

            if (!placement)
               return;

            var substitution = document.getElementById("runphpdiv");
            var mozilla = document.getElementById && !document.all;

            if (mozilla)
               placement.appendChild(substitution);
               //placement.parentNode.parentNode.appendChild(substitution);
            else
               //placement.parentElement.parentElement.appendChild(substitution);
               placement.appendChild(substitution);'; ?>


	var meta = new dbxGroup(
		'grabit', 		// container ID [/-_a-zA-Z0-9/]
		'vertical', 	// orientation ['vertical'|'horizontal']
		'10', 			// drag threshold ['n' pixels]
		'no',			// restrict drag movement to container axis ['yes'|'no']
		'10', 			// animate re-ordering [frames per transition, or '0' for no effect]
		'yes', 			// include open/close toggle buttons ['yes'|'no']
		'closed', 		// default state ['open'|'closed']
		'<?php echo js_escape(__('open')); ?>', 		// word for "open", as in "open this box"
		'<?php echo js_escape(__('close')); ?>', 		// word for "close", as in "close this box"
		'<?php echo js_escape(__('click-down and drag to move this box')); ?>', // sentence for "move this box" by mouse
		'<?php echo js_escape(__('click to %toggle% this box')); ?>', // pattern-match sentence for "(open|close) this box" by mouse
		'<?php echo js_escape(__('use the arrow keys to move this box')); ?>', // sentence for "move this box" by keyboard
		'<?php echo js_escape(__(', or press the enter key to %toggle% it')); ?>',  // pattern-match sentence-fragment for "(open|close) this box" by keyboard
		'%mytitle%  [%dbxtitle%]' // pattern-match syntax for title-attribute conflicts
		);<?php echo '
         }

         addLoadEvent(moveRunPHPCheckbox);

         //]]>
         </script>
         ';

      }

   }

   /**
    * UpdateEvaldState($id)
    *
    * Update the post's meta information to reflect it's current eval()'d state.
    * When called: every time a post or a page is saved or published.
    *
    * Only takes action if the user hasPermission() to modify runPHP status.
   */
   function UpdateEvaldState($id) {
      global $wpdb, $runphp_metakey;

      if (!runPHP::hasPermission())
         return;

      if (!wp_verify_nonce($_POST['runphp-verify-key'], 'runphp'))
         return;

      if (!isset($id))
         $id = $_REQUEST['post_ID'];

      if (isset($_REQUEST['runphp_eval'])) {
         $qry = "DELETE FROM {$wpdb->postmeta}
                 WHERE Post_ID = {$id}
                  AND meta_key = '{$runphp_metakey}';";

         $wpdb->query($qry);

         $qry = "INSERT INTO {$wpdb->postmeta} (Post_ID, meta_key, meta_value)
                 VALUES ({$id}, '{$runphp_metakey}', '1');";
         $wpdb->query($qry);
      }
      else {
         $qry = "DELETE FROM {$wpdb->postmeta}
                 WHERE Post_ID = {$id} AND meta_key = '{$runphp_metakey}';";
         $wpdb->query($qry);
      }
   }

   /**
    * Not implemented yet.
    * Idea in future is to help adjust whether an editor "sees" PHP code when
    * editing a post.
    */
   function AdjustPHPCodeVisibility($id) {
   }

   function StripPHPCode($content) {
      global $post;
      global $all_evald_posts;

      if (runPHP::hasPermission())
         return $content;

      if (runPHP::IsPostEvald($_REQUEST['post'])) {
         //$content = "\n<h3>eval'ing post {$post->ID}</h3>\n" . $content;
         $content = $content;
         return runPHP::StripPHP($content);
      }
      else
         return $content;
   }

   // eval() the code in this post if it is marked in our $all_evald_posts array
   function EvalContent($content) {
      global $post;
      global $all_evald_posts;

      if (is_array($all_evald_posts) && in_array($post->ID, $all_evald_posts)) {
         //$content = "\n<h3>eval'ing post {$post->ID}</h3>\n" . $content;
         return runPHP::EvalHtml($content);
      }
      else
         return $content;
   }


   function AddOptionsSubmenu() {
      if (!current_user_can('manage_options'))
         return;

      $minUserLevel = 1; // doesn't look like the function actually uses this
                         // see code in admin-functions.php

      if (function_exists('add_options_page')) {
         add_options_page('runPHP', 'runPHP', $minUserLevel,
          basename(__FILE__), array('runphp', 'options_ui'));
      }
   }

   function options_ui() {
      include_once('runPHP_options_ui.inc.php');
   }

   // echo the UI necessary for personal profile options
   function profile_options_ui() {
      if (!current_user_can('manage_options') &&
          !current_user_can('can_runPHP'))
         return;

      if (current_user_can('can_runPHP'))
         $checked = ' checked="checked"';
      else
         $checked = '';

      echo '<p><label for="can_runPHP">' .
       '<input name="can_runPHP" type="checkbox" id="can_runPHP"' .
       ' value="true"' . $checked . '/> ';

       _e('I can activate or deactivate runPHP on a post.', 'runPHP');
       
       echo '</label></p>';
   }

   // Saved changes when 'Update Profile' is pressed.
   function update_user_options() {
      global $current_user;

      if (!isset($_POST['can_runPHP']))
         $_POST['can_runPHP'] = false;

      $current_user->add_cap('can_runPHP', $_POST['can_runPHP']);
   }

   function IsPostEvald($postID) {
      global $wpdb, $runphp_metakey;

      return $wpdb->get_var("SELECT meta_value
                             FROM {$wpdb->postmeta}
                             WHERE Post_ID = {$postID}
                              AND meta_key = '{$runphp_metakey}';");
   }

   // Returns true if the current user has the requested capability
   function hasPermission($perm = 'can_runPHP') {
      return current_user_can($perm);
   }

   /* Functions to evaluate the PHP in a bunch of HTML
      These come from the PHP manual: http://www.php.net/eval
   */
   function EvalHtml($string) {
      return preg_replace_callback("/(<\?php|<\?|< \?php)(.*?)\?>/si",
       array('runPHP', 'EvalBuffer'), $string);
   } 

   // Runs (evals()) a '$string' of PHP code.
   function EvalBuffer($string) {
      ob_start();
      eval("$string[2];");
      $ret = ob_get_contents();
      ob_end_clean();
      return $ret;
   }

   /*
      Not used yet.

      Plan for future version to block out PHP code from editors who don't
      have the minimum user level to use runPHP.
   */
   function StripPHP($string) {
      return preg_replace("/(<\?php|<\?|< \?php)(.*?)\?>/si", '<!-- PHP Code -->', $string);
   }

}
?>
