<?php
/*
Template Name: joesnell-landing
*/


  get_header('landing');

?>

		<div id="primary" class="site-content">
			
        	<div id="insertContent">
            </div>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; // end of the loop. ?>

			
		</div><!-- #primary .site-content -->

		<div id="sidebar" class="span3 visible-desktop">
        	<?php get_sidebar(); ?>
     	</div>

		<?php get_footer('landing'); ?>
        