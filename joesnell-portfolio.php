<?php
/*
Template Name: joesnell-portfolio
*/

get_header(); ?> 


		<section id="primary" class="site-content-loop">
			<div id="content-loop" role="main" class="content-loop">
					
							<?php query_posts('category_name=Portfolio'); ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'portfolio' ); ?>
            				<?php comments_template( '', true ); ?>
            				<?php endwhile; // end of the loop. ?> 

			</div><!-- #content -->

		</section><!-- #primary .site-content -->
       


<?php get_footer(); ?> 