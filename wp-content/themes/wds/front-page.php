<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

get_header(); ?>

    <div id="front_formations" style="min-height:800px; padding-top:100px;">
        <div id="cf7" class="shadow">
            <div class="row" style="min-height:600px">
                <img id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_sr.png" height="600px" />
                <img id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_md.png" height="600px"  />
                <img class='opaque' id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_dg.png" height="600px"  />
                <img id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_d.png"  height="600px" />

                <h2 class="formation">Nos Formations</h2>

                <div id="menu" class="menu">
                    <p id="cf7_controls">
                        <span id="btn_sr" class="selected">Système et Réseaux <br /></span>
                        <span id="btn_md">Marketing Digital <br /></span>
                        <span id="btn_dg">Design Graphique <br /></span>
                        <span id="btn_d">Développement <br /></span>
                    </p>
                </div>
            </div>
            <div class="row" style="right:15%">
                <div id="txt_dev" class="txt col s7 push-s4">
                    <h3 class="titre">Développement web</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites<br /> Web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel<br /> afin de devenir les nouveaux acteurs du webdesign.</p>
                    <a class="btn btn_d" href="">Découvrez</a>
                </div>
                <div id="txt_sr" class="txt col s7 push-s4">
                    <h3 class="titre">Systèmes et Réseaux</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel afin de devenir les nouveaux acteurs du webdesign.</p>
                    <a class="btn btn_sr" href="">Découvrez</a>
                </div>
                <div id="txt_md" class="txt col s7 push-s4">
                    <h3 class="titre">Marketing Digital</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel afin de devenir les nouveaux acteurs du webdesign.</p>
                    <a class="btn btn_md" href="">Découvrez</a>
                </div>
                <div id="txt_dg" class="txt col s7 push-s4">
                    <h3 class="titre">Design Graphique</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel afin de devenir les nouveaux acteurs du webdesign.</p>
                    <a class="btn btn_dg" href="">Découvrez</a>
                </div>
            </div>           
        </div>
    </div>
    
    <div class="container">
    <!-- Voir comment on veut afficher la video au click -->
        <div id="front_video" style="height:800px;">
            <div class="row">
                <div id="yellow-block" class="col s4 push-s7">
                    <div id="yellow-block-text" class="col s9 pull-s3">
                        <img style="width:65%;" src="<?php echo get_template_directory_uri()?>/dev/images/blanc.png" alt="">
                        <p>L'école est située à Brest, sur le port de plaisance du Moulin Blanc. Nous avons la chance de vous proposer les meilleurs conditions
                        d'apprentissage à Brest grâce à la vue imprenable que vous avez depuis les salles de cours.</p>
                        <a class="waves-effect waves-light btn">Voir +</a>
                    </div>
                       
                </div>
            </div>
        </div>

        <div id="front_primary" class="content-area" style="min-height:730px;">
            <main id="main" class="site-main" role="main">
            <h5>L'ACTU</h5>
            <p>Retrouvez toutes les actus de l'école</p>
            <div class="row" style="max-height:500px;">
            <div class="col s5 push-s2" style="min-height:500px; background-color:#353533">    
                    <?php
                // VOIR POUR CHARGER PLUS QUE 3 A LOAD SI CLICK FLECHE
                query_posts('posts_per_page=1');
                if ( have_posts() ) :
                // apres creation des catégorie faire une custom query "news"
                    while ( have_posts() ) : the_post();?>
                        <?php 
                        get_template_part( 'template-parts/content', 'article1' );
                        ?>
                        <?php
                    endwhile;
                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;?>
            </div>

            <div class="col s3 push-s2" style="height:500px; padding:0; background-color:#efd502;">
                <?php
                // VOIR POUR CHARGER PLUS QUE 3 A LOAD SI CLICK FLECHE
                
                query_posts('posts_per_page=3&offset=1');
            
                if ( have_posts() ) :
                // apres creation des catégorie faire une custom query "news"
                $i = 1;
                
                    while ( have_posts() ) : the_post();?>
                        <?php 
                        get_template_part( 'template-parts/content', 'article2' );
                        ?>
                        <?php
                    $i++;
                    endwhile;
                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;?>
                </div>
            </div>       
            </main><!-- #main -->
        </div><!-- #primary -->

        <div id="front_entreprises">
            <div class="row">
            <div id="purple-block" class="col s4 push-s1">
                <div id="purple-block-text">
                    <h4>ENTREPRISES</h3>
                    <p>Vous recherchez des stagiaires ou <br> des étudiants en alternance</p>
                    <a class="waves-effect waves-light btn">Je suis une entreprise</a>
                </div>   
            </div>
            <div id="other-block" class="col s5 push-s1">
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
