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
		color: #07b57a;
		-webkit-transition: color 0.5s;
		transition: color 0.5s;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(3){
		border-left: solid 1px white;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(2) > a >span{
		display:none;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(2){
		text-align:center;
		width:auto;
		background-color: #07b57a;
		border-radius: 47px;
		height: 52px;
		margin-top: 9px;
	}
	.menu-menu_nav-container > ul > li > a{
		margin-top: -9px;
    	padding-left: 16px
	}
	.menu-line{
		position: absolute;
		top: 100%;
		width: 3% !important;
		height: 2px;
		margin-left: 5%;
		margin-top:1%;
		pointer-events: none;
		background: #07b57a;
		-webkit-transition: -webkit-transform 0.5s;
		transition: transform 0.5s;
		-webkit-transition-timing-function: cubic-bezier(1, 0.01, 0, 1);
		-webkit-transition-timing-function: cubic-bezier(1, 0.01, 0, 1.22);
		transition-timing-function: cubic-bezier(1, 0.01, 0, 1.22);
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
<script>
	(function() {
		$(".menu-line").css('visibility','hidden')
		$('#menu-menu_nav').append('<li class="menu-line"></li>')
		$('#menu-menu_nav > li:nth-child(1)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(0%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(0%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
		})
		$('#menu-menu_nav > li:nth-child(2)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(440%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(440%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
		})
		$('#menu-menu_nav > li:nth-child(3)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(880%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(880%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
		})
		$('#menu-menu_nav > li:nth-child(4)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(1320%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(1320%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
			})
	})(window);
</script>