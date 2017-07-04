<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WDS
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="icon" type="image/png" href="/iconx/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/iconx/favicon-32x32.png" sizes="32x32">
<link rel="apple-touch-icon" href="/iconx/apple-touch-icon-180x180.png" sizes="180x180">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header-custom">
    <div id="page home">
        <header role="banner" >
            <div class="navbar-fixed">
                <nav class="nav">
                    <div class="nav-wrapper">
                        <a class="a-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri()?>/dev/images/logo-wds-noir.png"/></a>
                        <a href="#" data-activates="mobile-demo" style="float:right;" class="button-collapse"><img id="burger" src="<?php echo get_template_directory_uri()?>/dev/images/icon_burger.png"/></a>
                        <?php wp_nav_menu( array('menu_class' => 'hide-on-med-and-down' ) ); ?>
                        <?php wp_nav_menu( array('menu_class' => 'side-nav', 'menu_id' => 'mobile-demo' ) ); ?>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>
<div id="content" class="site-content">
<script>

$( document ).ready(function(){
         $(".button-collapse").sideNav();
});
</script>
