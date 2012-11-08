<?php
/** 
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>

<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'joesnellpdx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail('full', array('class' => 'thumbnail')); ?>
        <header class="entry-header">
            <h2 class="entry-title"><?php the_title(); ?></h2>
        </header>
        <div class="excerpt">
        	<?php the_excerpt(); ?>
        </div>
          
    </article>
</a> 