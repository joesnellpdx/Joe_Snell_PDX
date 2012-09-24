<?php
/**
 * The Landing Page Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="Joe_Snell_PDX Wordpress Theme: Fusion of _s and Twitter Bootstrap">
    <meta name="author" content="Joe Snell">
    <title>

        <?php
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
    
        ?>

    </title>
        
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
   	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/wp-content/themes/Joe_Snell_PDX/_ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/wp-content/themes/Joe_Snell_PDX/_ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/wp-content/themes/Joe_Snell_PDX/_ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/wp-content/themes/Joe_Snell_PDX/_ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/wp-content/themes/Joe_Snell_PDX/_ico/apple-touch-icon-57-precomposed.png">
    
    <?php wp_head(); ?>
    
	<script type="text/javascript" src="http://use.typekit.com/jrw3qjl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class('landingbody'); ?>  >
<div id="main" class="container">
	<header>

		<!-- Navbar
    ================================================== -->
    
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
       
        <hgroup>
			<div class="logo-head">
                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.joesnellpdx.com/wp-content/uploads/2012/07/Joe-Snell-Logowhite.png" alt="Joe Snell PDX Logo" width="100%" /></a>
         	</div> <!-- .logo-head -->
            <div class="brand-text span10 offset2">
          		<h1 class="brand"><?php bloginfo( 'name' ); ?></br>
          	<span class="sub-head"><?php bloginfo( 'description' ); ?></span></h1>
            </div>
       	</hgroup>   
    		
            <div class="landingmenu">
					<?php wp_nav_menu( array( 'theme_location' => 'landing' ) ); ?>
            </div>
            
		
       
        </div>  <!-- .inner -->
        </div>  <!-- navbar -->

	</header><!-- #masthead .site-header  -->

	