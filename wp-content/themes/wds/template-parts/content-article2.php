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
	<div id="article-2" style="max-height:250px; width:100%;">
		<article style="color:white;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->
	</div>
	<?php 	
}elseif($i == 2)
{?>
    <div id="article-3"  style="max-height:250px; background-color:#07b57a; width:100%;">
		<article style="color:white;" id="actu-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->
	</div>	
<?php     
}?>
