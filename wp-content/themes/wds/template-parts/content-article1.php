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
		
		<?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'object-fit_cover', 'id' => 'article_gros') );?>
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