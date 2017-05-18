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
    
    <div class="container">
        <div id="front_video" style="height:800px;">
            <div>   
                <h3>WDS</h3>
                <p>L'école est située à Brest, sur le port de plaisance du Moulin Blanc. Nous avons la chance de vous proposer les meilleurs conditions
                    d'apprentissage à Brest grâce à la vue imprenable que vous avez depuis les salles de cours.
                </p>
                <a class="waves-effect waves-light btn">Voir +</a>
            </div>
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

        <div id="front_entreprises">
            <div>   
                <h3>ENTREPRISES</h3>
                <p>Vous recherchez des stagiaires ou des étudiants en alternance</p>
                <a class="waves-effect waves-light btn">Je suis entreprise</a>
            </div>
        </div>
    
        <div id="front_contacts">
            <div class="item_contact">
                <h5>SUIVEZ - NOUS</h5>
                <p>Retrouvez nous sur nos réseaux sociaux</p>
                <div id="icon_contact">
                    <i>1</i>
                    <i>2</i>
                    <i>3</i>
                </div>
            </div>
            <div class="item_contact">
                <h5>NEWSLETTER</h5>
                <p>Je m’inscris gratuitement <br> pour ne manquer aucune actualités</p>
                <form id="form_contact">
                    <input type="email" name="email_newsletter" value="" placeholder="adresse email">
                    <input type="submit" name="" value="Je m'abonne">
                </form>
            </div>
        </div>
    </div>
<?php
get_footer();
