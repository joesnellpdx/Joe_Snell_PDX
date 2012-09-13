<?php
/*
Template Name: joesnell-child
*/

get_header('child'); ?>

	<hr class="soften">

		<div id="primary" class="site-content">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
            <div id="sidebar" class="span3">
            	<?php get_sidebar(); ?>
         	</div>
		</div><!-- #primary .site-content -->


<?php get_footer(); ?>