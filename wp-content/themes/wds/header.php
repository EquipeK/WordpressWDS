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
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<?php wp_head(); ?>
</head>
<style>
	.home{
	}
	.img_header{
		z-index:0;
	}
	.logo{
		width: 15%;
		height: 100%;
	}
	.menu_custom{
		position: absolute;
		top: 0;
		margin-top: 1%;
		width:100%
	}
	.menu_item{
		width:100%;
		list-style:none;
		display:inline;
	}
	.menu_navigation{

	}
</style>
<body <?php body_class(); ?>>
<div id="page home" class="site home">
	<img class="img_header" src="<?php echo get_template_directory_uri()?>/dev/images/header_img.png"/>
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wds' ); ?></a>-->
	<header role="banner">
		<div class='menu_custom'>
			<img class="logo" src="<?php echo get_template_directory_uri()?>/dev/images/logo-hd-blanc.png"/>
			<div class='menu_navigation'>
				<span><?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'menu_item' ) ); ?></span>
				<div class='login'>Login</div>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
