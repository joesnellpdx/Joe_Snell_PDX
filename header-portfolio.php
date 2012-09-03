<?php
/**
 * The Portfolio Page Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?><!DOCTYPE html>
<!-- From HTML5 Boilerplate: Consider adding a manifest.appcache: h5bp.com/d/Offline -->

<html <?php language_attributes(); ?>>
<!-- ADD FROM HTM5 BOILERPLATE -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <!-- END ADD -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/_ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/_ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/_ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/_ico/apple-touch-icon-57-precomposed.png">
    
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<script type="text/javascript" src="http://use.typekit.com/jrw3qjl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class(); ?>>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->	


<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
    
<header>

	<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top base">
      <div class="navbar-inner">
        <div class="container">
          <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            
            <i class="icon-hand-up navbtn"></i> 
            
          </button>
          <hgroup>
			<div class="logo-head-base">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.joesnellpdx.com/wp-content/uploads/2012/07/Joe-Snell-Logowhite.png" alt="Joe Snell PDX Logo" width="100%" /></a>
            </div> <!-- .logo-head -->
            <h1 class="brand-base"><?php wp_title( " " ); ?></h1>
		</hgroup>
        <div class="nav-collapse collapse">
            <div class="basemenu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div>
        </div>
        </div> <!-- END container -->
      </div> <!-- END inner -->
    </div> <!-- END NAVBAR -->



	</header><!-- #masthead .site-header -->

	<div id="main" class="container">