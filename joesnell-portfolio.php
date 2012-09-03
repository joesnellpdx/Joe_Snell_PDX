<?php
/*
Template Name: joesnell-portfolio
*/

get_header('portfolio'); ?>


		<div id="primary" class="site-content">
			<div id="content" role="main">
            	<div id="portfolio" class="content-wrap">
                		<ul class="thumbnails">
					
							<?php query_posts('category_name=Portfolio'); ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'portfolio' ); ?>
            				<?php comments_template( '', true ); ?>
            				<?php endwhile; // end of the loop. ?> 
                
                 		</ul>
        		</div>


			</div><!-- #content -->
		</div><!-- #primary .site-content -->


<?php get_footer(landing); ?>