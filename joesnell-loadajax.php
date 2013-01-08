<?php
/*
Template Name: joesnell-load-ajax: template utilized for ajax loading
*/

get_header(); ?>


		<section id="primary" class="site-content">
			<div id="content" role="main" class="content">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

            
		</section><!-- #primary .site-content -->


<?php get_footer('ajax'); ?>