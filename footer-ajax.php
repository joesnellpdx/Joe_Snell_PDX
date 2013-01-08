<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */
?>

			<footer id="colophon" class="site-footer footer" role="contentinfo">
				<div class="footer-widget-wrap-one">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>
				</div>
				<div class="footer-widget-wrap-two">
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>
				</div>
				<div class="site-info">
					<div class="site-info">
						Copyright &copy; <?php echo the_date('Y'); ?> Joe Snell
					</div><!-- .site-info -->
				</div><!-- .site-info -->

				
				
			</footer><!-- #colophon .site-footer -->

			

	       	<div id="sidebar-ajax" class="sidebar visible-desktop">
	        	<?php get_sidebar(); ?>
	     	</div>
		</div> <!-- #wrap -->
        <nav id="menu" role="navigation" class="basemenu"> 
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => 'nav-page' ) ); ?> <!-- id = menu-item-491 is the 'back' list item -->
        </nav>

	</div> <!-- #main .container -->
</div>
<?php wp_footer(); ?>
</body>
</html>