<?php
/*
Template Name: joesnell-landing
*/


  get_header('landing');

?>

		<section id="primary" class="site-content">
			<div id="content" role="main" class="content hidden-small">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>


				<?php endwhile; // end of the loop. ?>
				
            </div>
			
		</div><!-- #primary .site-content -->

		<div id="sidebar" class="sidebar visible-desktop">
        	<?php get_sidebar(); ?>
     	</div>

		<?php get_footer('landing'); ?>
        