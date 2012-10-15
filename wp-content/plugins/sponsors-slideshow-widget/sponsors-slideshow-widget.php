<?php
/*
Plugin Name: Sponsors Slideshow Widget
Plugin URI: http://www.wordpress.org/extend/plugins/sponsors-slideshow-widget
Description: Display certain link category as slideshow in sidebar
Version: 1.9.3
Author: Kolja Schleich

Copyright 2007-2010  Kolja Schleich  (email : kolja.schleich@googlemail.com)

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
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class SponsorsSlideshowWidget extends WP_Widget
{
	/**
	 * Plugin Version
	 *
	 * @var string
	 */
	var $version = '1.9.2';
	
	/**
	 * path to the plugin
	 *
	 * @var string
	 */
	var $plugin_url;

	
	/**
	 * Class Constructor
	 *
	 * @param none
	 * @return void
	 */
	function __construct()
	{
		if ( !defined( 'WP_CONTENT_URL' ) )
			define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
		if ( !defined( 'WP_PLUGIN_URL' ) )
			define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
			
		register_activation_hook(__FILE__, array(&$this, 'install'));
		register_uninstall_hook(__FILE__, array(&$this, 'uninstall'));

		// Load Textdomain
		load_plugin_textdomain( 'sponsors-slideshow', false, basename(__FILE__, '.php').'/languages' );

		$this->plugin_url = WP_PLUGIN_URL.'/'.basename(__FILE__, '.php');

		add_action( 'admin_head', array(&$this, 'addHeaderCode') );
		add_action( 'wp_head', array(&$this, 'addHeaderCode') );
		add_filter( 'widget_links_args', array($this, 'widget_links_args') );

		$widget_ops = array('classname' => 'sponsors_slideshow_widget', 'description' => __('Display specific link category as image slide show', 'sponsors-slideshow') );
		parent::__construct('sponsors-slideshow', __('Sponsors Slideshow', 'sponsors-slideshow'), $widget_ops);
	}
	function SponsorsSlideshowWidget()
	{
		$this->__construct();
	}
	
	
	/**
	 * displays Sponsors Slideshow Widget
	 *
	 * Usually this function is invoked by the Wordpress widget system.
	 * However it can also be called manually via sponsors_slideshow_widget_display().
	 *
	 * @param array $args display arguments
	 * @param array $instance Settings for particular instance
	 * @return void
	 */
	function widget( $args, $instance )
	{
		$defaults = array(
			'before_widget' => '<li id="sponsors-slideshow-widget-'.$this->number.'" class="widget '.get_class($this).'_'.__FUNCTION__.'">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
			'number' => $this->number,
		);
		
		$args = array_merge( $defaults, $args );
		extract( $args, EXTR_SKIP );
			
		if ( $instance['source'] == 'links' )
			$links = get_bookmarks( array('category' => $instance['link_category']) );
		elseif ( $instance['source'] == 'posts' )
			$links = query_posts("cat=".$instance['post_category']."&orderby=date&order=DESC");
		else
			$links = false;

		if ( $links ) {
			?>
			<div>
			<script type='text/javascript'>
			//<![CDATA[
			//jQuery(document).ready(function() {
				jQuery('#links_slideshow_<?php echo $number ?>').cycle({
					fx: '<?php echo $instance['fade']; ?>',
					timeout: <?php echo $instance['timeout']*1000; ?>,
					speed: <?php echo $instance['speed']*1000; ?>,
					random: <?php echo $instance['order']; ?>,
					pause: 1
				});
			//});
			//]]>
			</script>
			<style type="text/css">
				div#links_slideshow_<?php echo $number ?> div {
					width: <?php echo $instance['width']; ?>px;
					height: <?php echo $instance['height']; ?>px;
				}
			</style>
			</div>
			<?php
			echo $before_widget;

			if ( !empty($instance['title']) )
				echo $before_title . $instance['title'] . $after_title;
			elseif ( $instance['title'] == 'N/A' )
				echo "<br style='clear: both;' />"; // Fix for IE

			echo '<div id="links_slideshow_'.$this->number.'" class="links_slideshow">';
			foreach ( $links AS $link ) {
				if ( $instance['source'] == 'posts' ) {
					$link->link_name = $link->post_title;
					$link->link_image = get_post_meta($link->ID, $instance['post_img_meta'], true);
					$link->link_url = get_post_meta($link->ID, $instance['post_url_meta'], true);
					$link->link_target = ( substr($link->link_url,7,strlen($_SERVER['HTTP_HOST'])) == $_SERVER['HTTP_HOST'] ) ? '' : '_blank';
				}

				if ( !empty($link->link_url) ) {
					$target = !empty($link->link_target) ? 'target="'.$link->link_target.'"' : '';
					echo '<div><a href="'.$link->link_url.'" '.$target.' title="'.$link->link_name.'">';
					if ( !empty($link->link_image) )
						echo '<img src="'.$link->link_image.'" alt="'.$link->link_name.'" />';
					else
						echo $link->link_name;
					echo '</a></div>';
				}
			}
			echo '</div>';
			echo $after_widget;
		}
	}


	/**
	 * save instance settings
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	function update( $new_instance, $old_instance )
	{
		return $new_instance;
	}


	/**
	 * displays control panel for the widget
	 *
	 * @param array $args
	 * @return void
	*/
	function form( $instance )
	{
		$link_category_display = $post_category_display = 'none';
		if ( !isset($instance['source']) || empty($instance['source']) ) {
			$instance['source'] == 'links';
			$link_category_display = 'block';
		} elseif ( $instance['source'] == 'links' ) {
			$link_category_display = 'block';
		} elseif ( $instance['source'] == 'posts' ) {
			$post_category_display = 'block';
		}

		echo '<div class="links_slideshow_control">';

		echo '<p><label for="'.$this->get_field_id('source').'">'.__( 'Source', 'sponsors-slideshow' ).'</label>'.$this->sources($instance['source']).'</p>';

		echo '<div id="box_'.$this->get_field_id('link_category').'" style="display: '.$link_category_display.';">';
		echo '<p><label for="'.$this->get_field_id('link_category').'">'.__( 'Category', 'sponsors-slideshow' ).'</label> '.$this->categories('link_category', 'link_category', $instance['link_category']).'</p>';
		echo '</div>';
		echo '<div id="box_'.$this->get_field_id('post_category').'" style="display: '.$post_category_display.';">';
		echo '<p><label for="'.$this->get_field_id('post_category').'">'.__( 'Category', 'sponsors-slideshow' ).'</label> '.$this->categories('category', 'post_category', $instance['post_category']).'</p>';
		echo '<p><label for="'.$this->get_field_id('post_url_meta').'">'.__( 'URL Field', 'sponsors-slideshow' ).'</label><input type="text" name="'.$this->get_field_name('post_url_meta').'" id="'.$this->get_field_id('post_url_meta').'" value="'.$instance['post_url_meta'].'" size="10" /></p>';
		echo '<p><label for="'.$this->get_field_id('post_img_meta').'">'.__( 'Image Field', 'sponsors-slideshow' ).'</label><input type="text" name="'.$this->get_field_name('post_img_meta').'" id="'.$this->get_field_id('post_img_meta').'" value="'.$instance['post_img_meta'].'" size="10" /></p>';
		echo '</div>';

		echo '<p><label for="'.$this->get_field_id('title').'">'.__('Title', 'sponsors-slideshow').'</label><input type="text" size="15" name="'.$this->get_field_name('title').'" id="'.$this->get_field_id('title').'" value="'.$instance['title'].'" /></p>';
		echo '<p><label for="'.$this->get_field_id('width').'">'.__( 'Width', 'sponsors-slideshow' ).'</label><input type="text" size="3" name="'.$this->get_field_name('width').'" id="'.$this->get_field_id('width').'" value="'.$instance['width'].'" /> px</p>';
		echo '<p><label for="'.$this->get_field_id('height').'">'.__( 'Height', 'sponsors-slideshow' ).'</label><input type="text" size="3" name="'.$this->get_field_name('height').'" id="'.$this->get_field_id('height').'" value="'.$instance['height'].'" /> px</p>';
		echo '<p><label for="'.$this->get_field_id('timeout').'">'.__( 'Timeout', 'sponsors-slideshow' ).'</label><input type="text" name="'.$this->get_field_name('timeout').'" id="'.$this->get_field_id('timeout').'" size="1" value="'.$instance['timeout'].'" /> '.__( 'seconds','sponsors-slideshow').'</p>';
		echo '<p><label for="'.$this->get_field_id('speed').'">'.__( 'Speed', 'sponsors-slideshow' ).'</label><input type="text" name="'.$this->get_field_name('speed').'" id="'.$this->get_field_id('speed').'" size="3" value="'.$instance['speed'].'" /> '.__( 'seconds', 'sponsors-slideshow').'</p>';
		echo '<p><label for="'.$this->get_field_id('fade').'">'.__( 'Fade Effect', 'sponsors-slideshow' ).'</label>'.$this->fadeEffects($instance['fade']).'</p>';
		echo '<p><label for="'.$this->get_field_id('order').'">'.__('Order','sponsors-slideshow').'</label>'.$this->order($instance['order']).'</p>';
		echo '</div>';
		
		return;
	}

	
	/**
	 * dropdown list of Source possibilites
	 *
	 * @param string $selected current order
	 * @return order selection
	 */
	function sources( $selected )
	{
		$sources = array( 'links' => __('Links', 'sponsors-slideshow'), 'posts' => __('Posts', 'sponsors-slideshow') );
		$out = "<select size='1' name='".$this->get_field_name('source')."' id='".$this->get_field_id('source')."' onChange='SponsorsSlideshowWidget.checkSource(this.value, \"box_".$this->get_field_id('link_category')."\", \"box_".$this->get_field_id('post_category')."\")'>";
		foreach ( $sources AS $source => $name ) {
			$checked =  ( $selected == $source ) ? " selected='selected'" : '';
			$out .= '<option value="'.$source.'"'.$checked.'>'.$name.'</option>';
		}
		$out .= '</select>';
		return $out;
	}


	/**
	 * display categories as dropdown list
	 *
	 * @param string $term name of term
	 * @param string $name field name
	 * @param int $selected ID of selected category
	 * @return select element of categories
	 */
	function categories( $term, $name, $selected )
	{
		$categories = get_terms($term, 'orderby=name&hide_empty=0');
	
		if ( empty($categories) )
			return;
	
		$out = '<select size="1" name="'.$this->get_field_name($name).'" id="'.$this->get_field_id($name).'">';
		foreach ( $categories as $category ) {
			$cat_id = $category->term_id;
			$name = wp_specialchars( apply_filters('the_category', $category->name));
			$checked = ( $selected == $cat_id ) ? ' selected="selected"' : '';
			$out .= '<option value="'.$cat_id.'"'.$checked.'> '. $name. '</option>';
		}
		$out .= '</select>';
	
		return $out;
	}
	

	/**
	* dropdown list of available fade effects
	*
	* @param string $selected current effect
	* @return select element of fade effects
	*/
	function fadeEffects( $selected )
	{
		$effects = array(__('Blind X','sponsors-slideshow') => 'blindX', __('Blind Y','sponsors-slideshow') => 'blindY', __('Blind Z','sponsors-slideshow') => 'blindZ', __('Cover','sponsors-slideshow') => 'cover', __('Curtain X','sponsors-slideshow') => 'curtainX', __('Curtain Y','sponsors-slideshow') => 'curtain>', __('Fade','sponsors-slideshow') => 'fade', __('Fade Zoom','sponsors-slideshow') => 'fadeZoom', __('Scroll Up','sponsors-slideshow') => 'scrollUp', __('Scroll Left','sponsors-slideshow') => 'scrollLeft', __('Scroll Right','sponsors-slideshow') => 'scrollRight', __('Scroll Down','sponsors-slideshow') => 'scrollDown', __('Scroll Horizontal', 'sponsors-slideshow') => 'scrollHorz', __('Scroll Vertical', 'sponsors-slideshow') => 'scrotllVert', __('Shuffle','sponsors-slideshow') => 'shuffle', __('Slide X','sponsors-slideshow') => 'slideX', __('Slide Y','sponsors-slideshow') => 'slideY', __('Toss','sponsors-slideshow') => 'toss', __('Turn Up','sponsors-slideshow') => 'turnUp', __('Turn Down','sponsors-slideshow') => 'turnDown', __('Turn Left','sponsors-slideshow') => 'turnLeft', __('Turn Right','sponsors-slideshow') => 'turnRight', __('Uncover','sponsors-slideshow') => 'uncover', __('Wipe','sponsors-slideshow') => 'wipe', __( 'Zoom','sponsors-slideshow') => 'zoom', __('Grow X','sponsors-slideshow') => 'growX', __('Grow Y','sponsors-slideshow') => 'growY', __('Random','sponsors-slideshow') => 'all');
		
		$out = '<select size="1" name="'.$this->get_field_name('fade').'" id="'.$this->get_field_id('fade').'">';
		foreach ( $effects AS $name => $effect ) {
			$checked =  ( $selected == $effect ) ? " selected='selected'" : '';
			$out .= '<option value="'.$effect.'"'.$checked.'>'.$name.'</option>';
		}
		$out .= '</select>';
		return $out;
	}
	
	
	/**
	 * dropdown list of Order possibilites
	 *
	 * @param string $selected current order
	 * @return order selection
	 */
	function order( $selected )
	{
		$order = array(__('Ordered','sponsors-slideshow') => '0', __('Random','sponsors-slideshow') => '1');
		$out = '<select size="1" name="'.$this->get_field_name('order').'" id="'.$this->get_field_id('order').'">';
		foreach ( $order AS $name => $value ) {
			$checked =  ( $selected == $value ) ? " selected='selected'" : '';
			$out .= '<option value="'.$value.'"'.$checked.'>'.$name.'</option>';
		}
		$out .= '</select>';
		return $out;
	}

	
	/**
	 * install plugin
	 *
	 * @param none
	 * @return void
	 */
	function install()
	{		
		$options = array();
		$options['version'] = $this->version;
		
		add_option( 'sponsors_slideshow_widget', $options, 'Sponsors Slideshow Widget Options', 'yes' );
		
		return;
	}


	/**
	 * uninstall Sponsors Slideshow Widget
	 *
	 * @param none
	 * @return void
	 */
	function uninstall()
	{
		delete_option( 'sponsors_slideshow_widget' );
	}


	/**
	 * adds code to Wordpress head
	 *
	 * @param none
	 * @return void
	 */
	function addHeaderCode()
	{
		wp_register_style( 'sponsors-slideshow', $this->plugin_url.'/style.css', array(), $this->version );
		wp_register_script( 'sponsors-slideshow', $this->plugin_url.'/sponsors-slideshow-widget.js', array(), $ths->version );
		wp_register_script( 'jquery_slideshow', $this->plugin_url.'/js/jquery.cycle.all.js', array('jquery'), '2.65' );
		wp_print_scripts( 'jquery_slideshow' );
		wp_print_scripts( 'sponsors-slideshow' );
		wp_print_styles( 'sponsors-slideshow' );
	}
	
	
	/**
	 * redefine Links Widget Arguments to exclude chosen link category
	 *
	 * @param $args
	 * @return array
	 */
	 function widget_links_args( $args )
	 {
		$options = get_option('widget_sponsors-slideshow');
		unset($options['version']);
		$excludes = array();
		foreach ( (array)$options AS $option )
			$excludes[] = $option['category'];

		$exclude = implode(',', $excludes);
		$args['exclude_category'] = $exclude;
		return $args;
	 }
}
// Run SponsorsSlideshowWidget
function sponsors_slideshow_widget_init() {
	register_widget("SponsorsSlideshowWidget");
}
add_action('widgets_init', 'sponsors_slideshow_widget_init');


/**
 * Wrapper function to display Sponsors Slideshow Widget statically
 *
 * @param array $args basic arguments including before_widget, after_widget, before_title, after_title and number
 * @param array $instance settings for this instance. See list below for parameters
 *
 * This function can be used to display Sponsors Slideshow Widget in a Non-widgetized Theme.
 * Below is a list of needed arguments passed as an assoziative Array in $instance
 *
 * - category: ID of Link category to display
 * - widget_title: Widget title, if left empty no title will be displayed
 * - fade: Fade effect, see http://malsup.com/jquery/cycle/begin.html for a list of available effects
 * - time: Time in seconds between images
 * - width: width in px of the Slideshow
 * - height: height in px  of the Slideshow
 * - order: 0 for sequential, 1 for random ordering of images
 */
function sponsors_slideshow_widget_display( $args = array(), $instance = array() ) {
	SponsorsSlideshowWidget::widget( $args, $instance );
}

?>
