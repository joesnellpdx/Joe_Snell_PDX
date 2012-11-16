<?php
/**
 * The template for displaying Archive pages. 
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */

get_header(); ?>

		<section id="primary" class="site-content row-fluid">
			<div id="content-loop" role="main" class="span9 offset3">

			<?php if ( have_posts() ) : ?>

				<?php rewind_posts(); ?>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'portfolio' );
					?>

				<?php endwhile; ?>


			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</div><!-- #content -->
			
			<div id="sidebar" class="span3 visible-desktop">
            	<?php get_sidebar(); ?>
         	</div>
		</section><!-- #primary .site-content -->

<?php get_footer(); ?>