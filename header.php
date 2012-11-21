<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Joe_Snell_PDX
 * @since Joe_Snell_PDX 1.0
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
    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    
        wp_title( '|', true, 'right' );

        // Add to assist SEO titles - delete if not using an SEO plugin
        echo(' | ');
    
        // Add the blog name.
        bloginfo( 'name' );
    
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
    
    <script type="text/javascript" src="//use.typekit.net/jrw3qjl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body data-spy="scroll" <?php body_class('body-base'); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

    <div id="main" class="container-fluid">
        <div id="wrap" class="wrap">
           
                <header id="header" class="topbar-base">
                    <a href="#menu" class="btn btn-inverse menu-link icon-reorder navbtn hidden-large">
                    <a href="#menu" class="btn menu-link-left icon-arrow-left navbtn hidden-medium">
                    <a href="#menu-right" class="btn icon-arrow-right menu-link-right visible-desktop"></a>

                    <hgroup>
                        <div class="logo-head-base">
                            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.joesnellpdx.com/wp-content/uploads/2012/07/Joe-Snell-Logowhite.png" alt="Joe Snell PDX Logo" width="100%" /></a>
                        </div> <!-- .logo-head -->
                        <div class="brand-text">
                            <h2 class="brand hidden-medium"><?php bloginfo( 'name' ); ?></br><span class="sub-head"><?php bloginfo( 'description' ); ?></span></h2>
                            <h1 class="brand-base"><?php wp_title( " " ); ?></h1>
                        </div>
                    </hgroup>
                </header>
                <nav id="menu" role="navigation" class="basemenu"> 
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav>
       