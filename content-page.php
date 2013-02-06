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
							<div data-picture data-alt="Joe Snell">
								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotsmall.png"></div>
								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotsmall_x2.png" data-media="(min-device-pixel-ratio: 2.0)"></div>

								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotmedium.png" data-media="(min-width: 41.26em)"></div>
								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotmedium_x2.png" data-media="(min-width: 41.26em) and (min-device-pixel-ratio: 2.0)"></div>

								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotlarge.png" data-media="(min-width: 62em)"></div>
								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotextralarge.png" data-media="(min-width: 62em) and (min-device-pixel-ratio: 2.0)"></div>

								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotextralarge.png" data-media="(min-width: 75em)"></div>
								<div data-src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotextralarge.png" data-media="(min-width: 75em	) and (min-device-pixel-ratio: 2.0)"></div>

								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
								<noscript><img src="http://www.joesnellpdx.com/wp-content/uploads/2013/02/joeheadshotsmall.png" alt="Joe Snell"></noscript>
							</div>
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
