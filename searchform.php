<?php
/**
 * The template for displaying search forms in Joe_Snell_PDX
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'Joe_Snell_PDX' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'Joe_Snell_PDX' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'Joe_Snell_PDX' ); ?>" />
	</form>
