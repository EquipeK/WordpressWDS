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
        <div id="front_video" style="height:700px;">
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
            <h5>L'ACTU</h5>
            <p>Retrouvez toutes les actus de l'école</p>
            <div class="row">
                <div id="actu-1" class="col s7" style="height:500px; background-color:#353533">
                    
                </div>
                <div class="col s5" style="height:500px; background-color:#efd502; padding:0;">
                    <div id="actu-2" style="height:250px; width:100%;">
                        
                    </div>
                    <div id="actu-3"  style="height:250px; background-color:#07b57a; width:100%;">
                        
                    </div>
                </div>
            </div>
                <?php
                // VOIR COMMENT FAIRE POUR FIXER LES ARTICLES DANS LES 3 DIV TOUT EN POUVANT EN CHARGER PLUS QUE 3
                // if ( have_posts() ) :
                //$i = 0;
                //    while ( have_posts() ) : the_post();?>
                        <?php 
                        // get_template_part( 'template-parts/content', 'front' );
                        ?>
                        <?php
                    //$i++;
                    //echo $i;
                    //endwhile;
                //else :

                    //get_template_part( 'template-parts/content', 'none' );

                //endif;?>
                
            </main><!-- #main -->
        </div><!-- #primary -->

        <div id="front_entreprises">
            <div id="purple-block">
                <div id="purple-block-text">
                    <h4>ENTREPRISES</h3>
                    <p>Vous recherchez des stagiaires ou <br> des étudiants en alternance</p>
                    <a class="waves-effect waves-light btn">Je suis une entreprise</a>
                </div>   
            </div>
            <div id="other-block">
                <div id="other-block-text">
                    <div>
                        <h5>test</h5>
                    </div>
                    <div>
                        <h5>test</h5>
                    </div>
                    <div>
                        <h5>test</h5>
                    </div>
                    <div>
                        <h5>test</h5>
                    </div>
                    <div>
                        <h5>test</h5>
                    </div>
                    <div>
                        <h5>test</h5>
                    </div>
                </div>   
            </div>
        </div>
    
        <div id="front_contacts">
            <div class="item_contact">
                <h5>SUIVEZ - NOUS</h5>
                <p>Retrouvez nous sur nos réseaux sociaux</p>
                <div id="icon_contact">
                    <object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/logo_fb.svg">Your browser does not support SVGs</object>
                    <object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/logo_ig.svg">Your browser does not support SVGs</object>
                    <object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/logo_twi.svg">Your browser does not support SVGs</object>
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
