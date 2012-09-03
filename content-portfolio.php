<?php
/**
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>


            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'joesnellpdx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                <li id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="li-portfolio">
  
                            <div class="portfolioimg">
								<?php the_post_thumbnail('full', array('class' => 'thumbnail')); ?>
                                <h2 class="caption"><?php the_title(); ?></h2>
                          	</div>
                          
                </li>
            </a>
   
 


