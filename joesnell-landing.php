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
        
       <?php get_footer(landing); ?>