<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */

get_header(); ?>


		<div id="primary" class="site-content row-fluid">
			<div id="content-loop" role="main" class="span9 offset3">

				<?php if ( have_posts() ) : ?>
                
				<?php if ( is_home() ) {
					query_posts( 'cat=-5,-10');
					}
					?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'blog' );
					?>

				<?php endwhile; ?>

			

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
			</div><!-- #content -->
            <div id="sidebar" class="span3 visible-desktop">
            	<?php get_sidebar(); ?>
         	</div>
            
		</div><!-- #primary .site-content -->


<?php get_footer(); ?>