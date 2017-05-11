<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

get_header(); ?>

    <div id="front_formations" style="background-color: #02b77b; height:730px;">
        
    </div>

    <div id="front_video" style="height:800px;">
        
    </div>

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

    <div id="front_entreprises" style="height:730px;">
        
    </div>

    <div id="front_contacts" style="background-color: #02b77b; height:390px;">
        
    </div>

<?php
get_footer();
