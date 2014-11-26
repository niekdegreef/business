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
            
            <nav id="site-utility-navigation" class="utility" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
            </nav><!-- #site-navigation -->

            <div class="site-branding"> <!-- span of 3 -->
               
               <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Logo"><!-- fallback -->

                  <!--   <object class="logo" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
                    </object>  -->

                </a></h1>

            </div>
                                       <!-- span of 3 -->
            <nav id="site-navigation" class="main-navigation group" role="navigation">
                <button class="menu-toggle"><?php _e( 'Menu', 'business' ); ?>
                    <span class="genericon genericon-menu"></span>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- #site-navigation -->
                                        <!-- span of 3 -->
            <a class="button contact_border" href="/contact"> <!-- alternative is class .contact for 3d effect -->
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
                </p>
            </div>
        </div>
    
    <?php } 

    else { 

        $header = get_field('header_image');

        if($header){ ?>

        <div class="header_image group" style="background-image:url(

        <?php echo $header['sizes']['large'] ?>)"> <!-- use background images -->
        
            <header class="entry-header header_title">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
        
         </div>

        <?php } 

        else { ?>

            <header class="entry-header header_title_no_bg">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->

        <?php }

    }
    ?>

    <div id="content" class="site-content">
