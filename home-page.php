

<?php
/**
 * Template Name: Home Page
 *
 * Default template page with the menu to the right.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Nursing
 * @since Nursing 1.0
 */

$show_wide_header=true;

get_header(); ?>

		<div id="container" class="has_right_bar">
			<div id="content" role="main"  class="homepage">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!--		<h1 class="entry-title"><?php the_title(); ?></h1> -->
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
        
<?php endwhile; ?>

			</div><!-- #content -->
			<div id="right_container" class="column_menu">
				<ul class="right_sidebar">
				<?php  dynamic_sidebar( 'non-blog-side-bar-widget-area' )  ?> 
				</ul>
			</div>
			<div style="clear:both;"></div>
				
		</div><!-- #container -->
	

<?php get_footer(); ?>
