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
						Copyright &copy; <?php echo the_date('Y'); ?> Joe Snell
					</div><!-- .site-info -->
				</footer><!-- #colophon .site-footer -->

				

		    	<div id="sidebar" class="sidebar visible-desktop">
		    	
		        	<div class="loading-div">
							<a href="load #secondary"><i class="icon-refresh icon-spin"></i>Synchronizing Content...</a>
					</div>
		     	</div>
		     	<div id="testing-div">
	    		</div>
			</div> <!-- #wrap -->
			<nav id="menu" role="navigation" class="landingmenu"> 
				<?php wp_nav_menu( array( 'theme_location' => 'landing', 'container' => '', 'menu_id' => 'nav-home' ) ); ?> <!-- id = menu-item-491 is the 'back' list item -->
	    	</nav>


		</div> <!-- #main .container -->
	</div>

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($) {
	if (matchMedia('only screen and (min-width: 41.26em)').matches) {

		  $('#content article').load('about #content article', function () {
		  		$( this ).hide().fadeIn('slow');
		  });

	}

	$(window).resize(function(){
		if ($('#content .loading-div').length) 

			{

				if (matchMedia('only screen and (min-width: 41.26em)').matches) 
					{

					$('#content article').load('about #content article',
						function () {
							$( this ).hide().fadeIn('slow');
						});

				}
		}
	});

});
</script>


</body>
</html>