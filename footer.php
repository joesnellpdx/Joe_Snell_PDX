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

	

	<footer id="colophon" class="site-footer footer" role="contentinfo" class="row">
		<div class="site-info container span12">
			<?php do_action( 'Joe_Snell_PDX_credits' ); ?>
			<a href="https://github.com/joesnellpdx/Joe_Snell_PDX" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'Joe_Snell_PDX' ); ?>" rel="generator"><?php printf( __( 'Joe_Snell_PDX' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'Joe_Snell_PDX' ), 'Joe_Snell_PDX', '<a href="http://www.joesnellpdx.com/" rel="designer">Joe Snell</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

	</div> <!-- /container -->

</body>
</html>