<?php
/*
Template Name: joesnell-landing
*/


  get_header('landing');
?>

	<!-- <hr class="soften"> -->

		<div id="primary" class="site-content">
			<div id="content" role="main">
            	<div id="insertContent">
                </div>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->
        
       <?php get_footer(landing); ?>