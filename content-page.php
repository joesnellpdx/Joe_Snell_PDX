<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">

		<!-- add shit -->

		<?php if ( is_page( 39, 'about') ) { ?>

		    <?php if ( is_active_sidebar( 'hire-me' ) ) : ?>
					<div class="widget-area home-call-out" role="complementary">
						<figure class="home-call-out-bg">
						</figure>
						<a title="contact" href="http://www.joesnellpdx.com/contact/">
							<button class="home-call-out-btn" name="home-call-out-btn" type="button">
								<span class="icon-thumbs-up"></span>
								<span class="icon-star"></span>
								<p>HIRE</br>ME</p>
							</button>
						</a>

						<?php dynamic_sidebar( 'hire-me' ); ?>
					</div><!-- #secondary -->
					<?php the_content(); ?>
				<?php endif; ?>


			<?php } else { ?> 

		    	<?php the_content(); ?>

			<?php } ?>



		<!-- end add shit -->


		
   
		
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'joesnellpdx' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'joesnellpdx' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
