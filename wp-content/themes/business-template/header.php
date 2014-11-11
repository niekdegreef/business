<?php
/** * The header for our theme. */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link rel="stylesheet" href="style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/navigation.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,300italic' rel='stylesheet' type='text/css'>
    
    <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div id="page" class="hfeed site">

    <!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'business' ); ?></a> -->

    <header id="masthead" class="site-header group" role="banner">
        <div class="centre-wrapper group">
            
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
        </div>
    
        <nav id="site-utility-navigation" class="utility" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
        </nav><!-- #site-navigation -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h1 class="menu-toggle"><?php _e( 'Menu', 'business' ); ?>
                <span class="genericon genericon-menu"></span>
            </h1>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #site-navigation -->

        <a class="contact" href="/contact">
            <p>This is a sample site!</p>
            <span class="genericon genericon-mail"></span>
        </a>

        </div>
    </header><!-- #masthead -->


    <?php
    if ( is_home() ) {
    ?>

        <div class="banner group" style="background-image:url(<?php echo header_image() ?>)"> <!-- use background images -->
            <div class="banner_caption bounce">
                <p>
                    <?php bloginfo('description'); ?> 
<!-- 
                    BDG business is a website template by <a href="http://beyerdegreef.com">Beyer de Greef</a> featuring clean typography: Roboto, (or, with Typekit, Nimbus-sans &amp; Calluna )</p>
 -->

            </div>
        </div>
    
    <?php }
    ?>

    <div id="content" class="site-content">
