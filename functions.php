<?php
/**
 * Joe_Snell_PDX functions and definitions
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Joe_Snell_PDX 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'Joe_Snell_PDX_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Joe_Snell_PDX 1.0
 */
function Joe_Snell_PDX_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Joe_Snell_PDX, use a find and replace
	 * to change 'Joe_Snell_PDX' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'Joe_Snell_PDX', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'Joe_Snell_PDX' ),
			'secondary' => __( 'Secondary Menu', 'Joe_Snell_PDX' ),
			'landing' => __( 'Landing Menu', 'Joe_Snell_PDX' ),
		) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // Joe_Snell_PDX_setup
add_action( 'after_setup_theme', 'Joe_Snell_PDX_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Joe_Snell_PDX 1.0
 */
function Joe_Snell_PDX_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'Joe_Snell_PDX' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'Joe_Snell_PDX_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function Joe_Snell_PDX_scripts() {
	global $post;

	// wp_enqueue_style( 'style', get_stylesheet_uri() );

	// wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	
	// ADD ENQUEUE PER BOOTSTRAP
	
		wp_enqueue_style( 'main', get_template_directory_uri() . '/_css/main.css', '20120822' );
	
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/_css/responsive.css', '20120822' );
		
		wp_enqueue_style( 'prettify', get_template_directory_uri() . '/_js/google-code-prettify/prettify.css', '20120822' );
	
		// wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
		
		
		//wp_enqueue_script( 'bootstrap-transition', get_template_directory_uri() . '/_js/bootstrap-transition.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-alert', get_template_directory_uri() . '/_js/bootstrap-alert.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-modal', get_template_directory_uri() . '/_js/bootstrap-modal.js', array( 'jquery' ), '20120822', true  );
		
		wp_enqueue_script( 'bootstrap-dropdown', get_template_directory_uri() . '/_js/bootstrap-dropdown.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-scrollspy', get_template_directory_uri() . '/_js/bootstrap-scrollspy.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-tab', get_template_directory_uri() . '/_js/bootstrap-tab.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-tooltip', get_template_directory_uri() . '/_js/bootstrap-tooltip.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-popover', get_template_directory_uri() . '/_js/bootstrap-popover.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-button', get_template_directory_uri() . '/_js/bootstrap-button.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-collapse', get_template_directory_uri() . '/_js/bootstrap-collapse.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-carousel', get_template_directory_uri() . '/_js/bootstrap-carousel.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-typeahead', get_template_directory_uri() . '/_js/bootstrap-typeahead.js', array( 'jquery' ), '20120822', true  );
		
		//wp_enqueue_script( 'bootstrap-affix', get_template_directory_uri() . '/_js/bootstrap-affix.js', array( 'jquery' ), '20120822', true  );
		
		wp_enqueue_script( 'application-js', get_template_directory_uri() . '/_js/application-ck.js', array( 'jquery' ), '20120823', true  );
		
		wp_enqueue_script( 'chirp', get_template_directory_uri() . '/_js/chirp-ck.js', array( 'jquery' ), '20120823'  );
		
		wp_enqueue_script( 'orientation-change', get_template_directory_uri() . '/_js/ios-orientationchange-fix.js', array( 'jquery' ), '20120823'  );
		
		
		
	// END ADD

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'Joe_Snell_PDX_scripts' );

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Implement additional Excerpt Functions
 */

function new_excerpt_more($more) {
       global $post;
	return '<br /><span class="read-more"> <a href="'. get_permalink($post->ID) . '">[read more]</a></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');
