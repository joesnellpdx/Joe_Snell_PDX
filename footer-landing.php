<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>

				<footer id="colophon" class="footer-landing site-footer footer" role="contentinfo">
					<div class="site-info">
						<?php do_action( 'Joe_Snell_PDX_credits' ); ?>

						<?php printf( __( 'Theme: %1$s by %2$s.', 'Joe_Snell_PDX' ), '<a href="https://github.com/joesnellpdx/Joe_Snell_PDX" rel="generator">Joe_Snell_PDX</a>', '<a href="http://www.joesnellpdx.com/" rel="designer">Joe Snell</a>' ); ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon .site-footer -->

				


			</div> <!-- #wrap -->
			<nav id="menu" role="navigation" class="landingmenu"> 
				<?php wp_nav_menu( array( 'theme_location' => 'landing', 'container' => '', 'menu_id' => 'nav-home' ) ); ?> <!-- id = menu-item-491 is the 'back' list item -->
	    	</nav>
	    	<div id="sidebar" class="sidebar visible-desktop">
	        	<?php get_sidebar(); ?>
	     	</div>

		</div> <!-- #main .container -->
	</div>
<?php wp_footer(); ?>
</body>
</html>