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
	.menu-menu-1-container{
		width:60%;
		float:right;
	}
	.menu-menu-1-container > ul > li{
		text-align:center;
		color: black;
		height:100px;
	}
	.menu-menu-1-container > ul > li > a:hover{
		background-color: #000;
		color:#fff;
	}
	.mmenu-menu-1-container > ul > li:nth-last-child(3){

	}
	.menu-menu-1-container > ul > li:nth-last-child(2) > a >span{

	}
	.menu-menu-1-container > ul > li:nth-last-child(2){
		
	}
	.menu-menu-1-container > ul > li > a{
		color: black;
		height:inherit;
		padding-top:11%;
	}
	.menu-line{
		
	}
	.nav{
		background-color: #ffffff;
		height:100px;
	}
	.logo{
		width:12%;
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
		$('#menu-menu-1').append('<li class="menu-line"></li>')
		$('#menu-menu-1 > li:nth-child(1)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(0%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(0%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
		})
		$('#menu-menu-1 > li:nth-child(2)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(440%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(440%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
		})
		$('#menu-menu-1 > li:nth-child(3)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(880%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(880%, 0, 0)');
		}, function(){
			$(".menu-line").css('visibility','hidden')
		})
		$('#menu-menu-1 > li:nth-child(4)').hover(function(){
			$(".menu-line").css('visibility','visible')
			$(".menu-line").css('-webkit-transform', 'translate3d(1320%, 0, 0)');
			$(".menu-line").css('transform', 'translate3d(1320%, 0, 0)');
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
