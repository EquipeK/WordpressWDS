<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class='photo-grid-container'>
            <div class='photo-grid'>
                <?php
                if ( have_posts() ) :
                    
                    while ( have_posts() ) : the_post();?>
                        <div class='photo-grid-item'>
                        <?php get_template_part( 'template-parts/content', 'front' );?>
                        </div>
                        <?php
                    endwhile;
                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;?>
            </div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
