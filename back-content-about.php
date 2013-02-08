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

		<h1>YOU ROCK</h1>
   
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'joesnellpdx' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'joesnellpdx' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
