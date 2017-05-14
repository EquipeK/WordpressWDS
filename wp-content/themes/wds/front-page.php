<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

get_header(); ?>

    <div id="front_formations" style="">
        
    </div>

    <div id="front_video" style="height:800px;">
        
    </div>

	<div id="front_primary" class="content-area" style="height:730px;">
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

        <div class="item_contact" style="background-color: rgb(244,215,5);">
            <h3>SUIVEZ - NOUS</h3>
            <p>Retrouvez nous sur nos réseaux sociaux</p>
            <div id="icon_contact">
                <i>1</i>
                <i>2</i>
                <i>3</i>
            </div>
        </div>
        <div class="item_contact">
            <h3>NEWSLETTER</h3>
            <p>Je m’inscris gratuitement pour ne manquer aucune actualités</p>
            <form id="form_contact">
                <input type="email" name="email_newsletter" value="" placeholder="adresse email">
                <input type="submit" name="" value="Je m'abonne'">
            </form>
        </div>
        
    </div>

<?php
get_footer();
