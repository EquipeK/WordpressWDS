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
	<div class="row" style="margin:0;">
	<a href="<?php echo get_permalink(); ?>">
	<div id="article-2" class="col s12" style="max-height:250px;background-color:#efd502; padding:0;">
		<article style="color:white;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'object-fit_cover article_petit') );?>
			<div class="entry-content resume_article">
				<?php
					the_excerpt()
				?>
			</div><!-- .entry-content -->

			<header id="titre_article_top" class="entry-header titre_article">
				<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
			</header><!-- .entry-header -->

		</article><!-- #post-## -->
	</div>
	</a>
	</div>
	
	<?php 	
}elseif($i == 2)
{?>
	<div class="row" style="margin:0;">
	<a href="<?php echo get_permalink(); ?>">
	<div id="article-3" class="col s12" style="max-height:250px; background-color:#07b57a; padding:0;">
		<article style="color:white;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'object-fit_cover article_petit') );?>
			<div id="resume_article_bot" class="entry-content resume_article">
				<?php
					the_excerpt()
				?>
			</div><!-- .entry-content -->

			<header class="entry-header titre_article">
				<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
			</header><!-- .entry-header -->

		</article><!-- #post-## -->
	</div>
	</a>	
	</div>	
<?php     
}?>
