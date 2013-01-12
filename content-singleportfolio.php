<?php
/**
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php Joe_Snell_PDX_posted_on(); ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'Joe_Snell_PDX' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '<ul class="tools list-bubble"><li>','</li><li>','</li></ul>' );

				if ( ! Joe_Snell_PDX_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
					if ( '' != $tag_list ) {
						$meta_text = __( '<p>%2$s</p>' );
					} else {
						$meta_text = __( '' );
					}

				} else {
					// But this blog has loads of categories so we should probably display them here
					if ( '' != $tag_list ) {
						$meta_text = __( '<p>Categories: %1$s. %2$s</p>' );
					} else {
						$meta_text = __( '<p>Categories: %1$s.</p>' );
					}

				} // end check for categories on this blog

				printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink(),
					the_title_attribute( 'echo=0' )
				);
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Joe_Snell_PDX' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		

		<?php edit_post_link( __( 'Edit', 'Joe_Snell_PDX' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
