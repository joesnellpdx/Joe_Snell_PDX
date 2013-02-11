<?php
/**
 * The Landing Page Header for our theme.
 *
 * Displays all of the <head> section and everything up till 
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
<!--[if lte IE 9]>    <html class="lte-ie9" lang="en"> <![endif]-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <title>

        <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    
        wp_title( '|', true, 'right' );
    
        
    
        ?>

    </title>
        
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Le fav and touch icons --> 
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/_ico/apple-touch-icon-57-precomposed.png">
    
    <?php wp_head(); ?>
    
	<script type="text/javascript" src="//use.typekit.net/jrw3qjl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!--[if lt IE 9]>
        <script src="http://www.joesnellpdx.com/wp-content/themes/Joe_Snell_PDX/_dist/html5shiv.js"></script>
    <![endif]-->

</head> 

<body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class('landingbody'); ?>  >

<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    <div id="main" class="main">
        <nav id="menu" role="navigation" class="landingmenu"> 
            <?php wp_nav_menu( array( 'theme_location' => 'landing', 'container' => '', 'menu_id' => 'nav-home' ) ); ?> <!-- id = menu-item-491 is the 'back' list item -->
        </nav>
        <div id="wrap" class="wrap">
            
            	<header id="header" class="header-main header-main-home">
                        <a id="jump-top" href="#nav-page" class="menu-link icon-reorder hidden-large"></a>
                        <a id="jump-left" href="#main" class="menu-link-left icon-reorder hidden-medium">Menu</a>
                        <a id="jump-right" href="#wrap" class="menu-link-right icon-twitter visible-desktop">Social</a>
                        <a id="jump-back" href="#header" class="back-large-screen visible-desktop">JUMP BACK</a>
                        <hgroup class="header-content">
                			<div class="logo-container logo-head">
                                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Joe Snell PDX" /></a>
                         	</div> <!-- .logo-head -->
                            <div class="brand-text">
                          		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 class="title"><?php bloginfo( 'name' ); ?></br><span class="title-sub"><?php bloginfo( 'description' ); ?></span></h1></a>
                                <h2 class="title-secondary hidden-medium"><?php if (!(is_page('home'))): ?>
                                    <?php the_title(); ?>
                                    <?php endif; ?></h2>
                            </div>
                       	</hgroup>   

            	</header>