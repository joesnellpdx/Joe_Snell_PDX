<?php
/**
 * The Portfolio Page Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <meta name="description" content="Joe_Snell_PDX Wordpress Theme: Fusion of _s and Twitter Bootstrap">
    <meta name="author" content="Joe Snell">
    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    
        wp_title( '|', true, 'right' );
    
        // Add the blog name.
        bloginfo( 'name' );
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'Joe_Snell_PDX' ), max( $paged, $page ) );
    
        ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

    <!-- Le fav and touch icons --> 
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-57-precomposed.png">
    
        
    <?php wp_head(); ?>
    
    <script type="text/javascript" src="http://use.typekit.com/jrw3qjl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class(); ?>>


<div id="main" class="container">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
    
<header>

	<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top base">
      <div class="navbar-inner">
        
          <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            
            <i class="icon-reorder navbtn"></i> 
            
          </button>
          <hgroup>
			<div class="logo-head-base">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.joesnellpdx.com/wp-content/uploads/2012/07/Joe-Snell-Logowhite.png" alt="Joe Snell PDX Logo" width="100%" /></a>
            </div> <!-- .logo-head -->
            <div class="brand-text span10 offset2">
            	<h1 class="brand-base"><?php wp_title( " " ); ?></h1>
            </div>
		</hgroup>
        <div class="nav-collapse collapse">
            <div class="basemenu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div>
        </div>
        
      </div> <!-- END inner -->
    </div> <!-- END NAVBAR -->



	</header><!-- #masthead .site-header -->
