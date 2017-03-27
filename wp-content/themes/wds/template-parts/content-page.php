<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			$the_slug = 'developpement-webmobile';
			$args = array(
			'name'           => $the_slug,
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 1
			);
			$my_posts = get_posts( $args );
		?>
		<h2><?= $my_posts[0]->post_title ?></h2>
		<p>
			<?= $my_posts[0]->post_content ?>
		</p>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'wds' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
