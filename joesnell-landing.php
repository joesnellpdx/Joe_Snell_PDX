<?php
/*
Template Name: joesnell-landing
*/


  get_header('landing');

?>

		<section id="primary" class="site-content row-fluid">
			<div id="content" role="main" class="span9 offset3 hidden-small">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>


				<?php endwhile; // end of the loop. ?>
				
            </div>
			
		</div><!-- #primary .site-content -->

		<div id="sidebar" class="span3 visible-desktop">
        	<?php get_sidebar(); ?>
     	</div>

		<?php get_footer('landing'); ?>
        