<?php
/**
 * Template part for displaying page content in page-exemple.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

?>


<article id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
