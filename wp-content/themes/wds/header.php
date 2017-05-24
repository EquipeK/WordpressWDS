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
	.menu-menu_nav-container{
		float:right;
		width:65%;
		margin-top:1.5%;
	}
	.menu-menu_nav-container > ul > li{
		text-align:center;
		width:20%;
	}
	.menu-menu_nav-container > ul > li > a:hover{
		color:#fff;
		background-color:rgba(0,0,0,0);
		font-weight:bold;
		color: #d94f5c;
		-webkit-transition: color 0.5s;
		transition: color 0.5s;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(2){
		border-left: solid 1px white;
	}
	.menu-menu_nav-container > ul > li:last-child > a >span{
		display:none;
	}
	.menu-menu_nav-container > ul > li:last-child{
		text-align:center;
		width:auto;
		background-color: green;
		border-radius: 47px;
		height: 52px;
		margin-top: 9px;
	}
	
	.nav{
		background-color:rgba(0,0,0,0);
		box-shadow:none;
	}
	.logo{
		width:15%;
	}
	.site-title{
		text-transform:uppercase;
		font-weight:bold;
		margin:0;
	}
	.site-branding{
		color:white;
		display:flex;
		flex-direction:column;
		justify-content:center;
		align-items:center;
		margin-top:20%;
	}
	.site-description{
		margin: 0;
	}
	.site-intro{
		font-weight:bold;
		margin-top:5%;
		font-size: x-large;
	}
	
</style>
<body <?php body_class(); ?>>
<div id="page home" class="site home">
	<header role="banner" >
		<div class="navbar-fixed">
			<nav class="nav">
				<div class="nav-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri()?>/dev/images/logo-hd-blanc.png"/></a>
					<?php wp_nav_menu( array('menu_class' => 'hide-on-med-and-down' ) ); ?>
				</div>
			</nav>
		</div>
		<div class="site-branding">
			<?php dynamic_sidebar( 'sidebar-head' );  ?>
		</div>
	</header>
</div>
<div id="content" class="site-content">
