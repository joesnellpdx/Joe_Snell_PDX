<?php
/**
 * The Template for displaying all single posts not including 'portfolio'.
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */

get_header('childportfolio'); ?>

		<div id="primary" class="site-content row-fluid">
			<div id="content" role="main" class="span8">

			<?php while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'content', 'portfolio' ); ?>

				

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
             <div id="sidebar" class="span3">
            	<?php get_sidebar(); ?>
         	</div>
		</div><!-- #primary .site-content -->


<?php get_footer(); ?>