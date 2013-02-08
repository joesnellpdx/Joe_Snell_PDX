<?php 
/*
YARPP Template: JoeSnellPDX
Author: Joe Snell
Description: Double Post Thumbnail Template
*/
?>

<h3>Related Posts</h3>
<?php if (have_posts()):?>
<ul class="yarpp-ul">
	<?php while (have_posts()) : the_post(); ?>
	<li class="yarpp-li"><?php the_post_thumbnail('full', array('class' => 'thumbnail')); ?>
		<a href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a><!-- (<?php the_score(); ?>)-->
	<?php the_excerpt(); ?>
	</li>
</ul>
	<?php endwhile; ?>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
