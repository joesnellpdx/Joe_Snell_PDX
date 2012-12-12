
<?php
/**
 * The Template for displaying all single posts not including 'portfolio'.
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */
 
 
$post = $wp_query->post;
if ( in_category(portfolio) ) {
get_header('childportfolio'); // use header-videos.php

} else {
get_header('child'); // use default header.php
}
 ?>

		<div id="primary" class="site-content">
			<div id="content" role="main" class="content">

			<?php while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'content', 'single' ); ?>

				<?php Joe_Snell_PDX_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
             <div id="sidebar" class="sidebar visible-desktop">
            	<?php get_sidebar(); ?>
         	</div>
		</div><!-- #primary .site-content -->


<?php get_footer(); ?>