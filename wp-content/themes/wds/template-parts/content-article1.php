<?php
/**
 * Template part for displaying page content in page-exemple.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

?>
	<a href="<?php echo get_permalink(); ?>">
	<article style="color:white; margin:0;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
		<img id="article_gros" class="object-fit_cover" src="<?php echo get_template_directory_uri()?>/dev/images/actu_paddle.png" alt="">

		<div id="resume_article_gros" class="entry-content resume_article">
		
			<?php
				the_excerpt()
			?>
		
		</div><!-- .entry-content -->

		<header class="entry-header titre_article">
			<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
		</header><!-- .entry-header -->

	</article><!-- #post-## -->
	</a>