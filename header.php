<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

    <!-- ******************* The Navbar Area ******************* -->
    <nav class="navbar navbar-light navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Your site title as branding in the menu -->
                <?php if (!has_custom_logo()) { ?>
                    <a class="navbar-brand site-title hidden-xs-down" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                <?php } else { ?> <div class="hidden-xs-down"><?php the_custom_logo(); } ?></div><!-- end custom logo -->
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                    &#9776;
                </button>
                <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-toggleable-xs pull-right',
                    'container_id' => 'exCollapsingNavbar2',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new wp_bootstrap_navwalker()
                )
            ); ?>
            </div>
            
            
        </div>
        
    </nav>


    <?php if ( get_header_image() ) : ?>
        <div class="image-pade text-xs-center">
            <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-not-responsive">
            <div class="caption">
                Lorem Ipsum
            </div>
        </div>
    <?php endif; ?>

    






