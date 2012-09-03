<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */

get_header('child'); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'content', 'single' ); ?>

				

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->


<?php get_footer(); ?>