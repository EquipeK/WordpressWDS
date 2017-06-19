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
		width:65%;
		float:right;
	}
    .menu-menu_nav-container > ul{
        height:100px;
    }
	.menu-menu_nav-container > ul > li{
		text-align:center;
        width:20%;
		color: black;
        height:inherit;
        line-height:100px;
	}
	.menu-menu_nav-container > ul > li > a:hover{
		background-color:rgba(0,0,0,0);
		font-weight:900;
		-webkit-transition: color 0.5s;
		transition: color 0.5s;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(2) > a >span{
		display:none;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(2){
		text-align:center;
		width:auto;
		background-color: #07b57a;
		border-radius: 47px;
        height:50%;
        line-height:0px;
        margin-top:2.5%;
		margin-left:5%;

	}
	.menu-menu_nav-container > ul > li:nth-last-child(2) > a > img{
		margin:0;
		width:100%;
	}
    .menu-menu_nav-container > ul > li:nth-last-child(2) > a{
		padding-top:23%;
	}
   
	.menu-menu_nav-container > ul > li:nth-last-child(3) > a {
        color: white;
	}
	.menu-menu_nav-container > ul > li:nth-last-child(3){
		background-color:black;
	}
	.menu-menu_nav-container > ul > li > a{
		color: black;
		height:inherit;
	}
	.menu-line{
		position: absolute;
		visibility:hidden;
		top: 75%;
		width: 3% !important;
		height: 2px !important;
		margin-left: 5%;
		pointer-events: none;
		background: #000;
		-webkit-transition: -webkit-transform 0.5s;
		transition: transform 0.5s;
		-webkit-transition-timing-function: cubic-bezier(1, 0.01, 0, 1);
		-webkit-transition-timing-function: cubic-bezier(1, 0.01, 0, 1.22);
		transition-timing-function: cubic-bezier(1, 0.01, 0, 1.22);
	}
	.nav{
		background-color: #ffffff;
		height:100px;
	}
	.logo{
		width:10%;
		margin-left:8%;
		margin-top:0.7%
	}
	

</style>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header role="banner" >
		<div class="navbar-fixed">
			<nav class="nav">
				<div class="nav-wrapper">
					
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri()?>/dev/images/logo-wds-noir.png"/></a>
					<?php wp_nav_menu(array('menu_class' => 'hide-on-med-and-down' )); ?>
				</div>
			</nav>
		</div>
		<?php  ?>
	</header>
</div>
<div id="content" class="site-content">
<script>
	//animation hover nav
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
	})(window);
	(function(){
		$(window).scroll(function(){
			$(".nav-wrapper").css('visibility', 'hidden');
			if($(window).scrollTop() === 0)	$(".nav-wrapper").css('visibility', 'visible')
		})

	})(window)
</script>