<?php
/**
 * Template part for displaying page content in page-exemple.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */
global $i;

if($i == 1)
{?>
	<div class="row" style="margin-bottom:0;">
	<div id="article-2" class="col s12" style="max-height:250px;background-color:#efd502; padding:0;">
		<article style="color:white;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
			<img class="object-fit_cover article_petit" src="<?php echo get_template_directory_uri()?>/dev/images/actu_paddle.png" alt="" height="250px">

			<div class="entry-content resume_article">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

			<header id="titre_article_top" class="entry-header titre_article">
				<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
			</header><!-- .entry-header -->

		</article><!-- #post-## -->
	</div>
	</div>
	
	<?php 	
}elseif($i == 2)
{?>
	<div class="row" style="margin-bottom:0;">
	<div id="article-3" class="col s12" style="max-height:250px; background-color:#07b57a; padding:0;">
		<article style="color:white;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
			<img class="object-fit_cover article_petit" src="<?php echo get_template_directory_uri()?>/dev/images/actu_paddle.png" alt="" height="250px">

			<div id="resume_article_bot" class="entry-content resume_article">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

			<header class="entry-header titre_article">
				<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
			</header><!-- .entry-header -->

		</article><!-- #post-## -->
	</div>	
	</div>	
<?php     
}?>
