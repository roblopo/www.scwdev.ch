<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage SCWipkingen
 * @since SC Wipkingen 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
<!-- AddThis Button BEGIN -->
        <div style="width:68px;float:right;"> 
            <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_facebook" addthis:url="<?php the_permalink(); ?>"></a>
                <a class="addthis_button_twitter" addthis:url="<?php the_permalink(); ?>"></a>
                <a class="addthis_button_email" addthis:url="<?php the_permalink(); ?>"></a>
            </div>
        </div>
		<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=scwipkingen"></script>
        <!-- AddThis Button END -->
					<div class="entry-meta">
						<?php twentyten_posted_on(); ?>
                        <hr/>
					</div><!-- .entry-meta -->
                    
                    <!-- Beginn Bildli -->
        <?php
			$bild_url = get_post_meta($post->ID, 'Beitragsbild', true);
			if ($bild_url == "") :
			/*do nothing*/
			else :
			$bild_groesse = getimagesize($bild_url);
			/*$breite = $bild_groesse[0];*/
			$hoehe = $bild_groesse[1];
			?>				
        	<div class="beitragsbildli" style="height:<?php echo $hoehe ?>px;">
                <img alt="" title="" src="<?php echo $bild_url; ?>" />
        	</div>
            <?php endif; ?>
        
        <!-- Ende Bildl -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->


					<div class="entry-utility">
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
