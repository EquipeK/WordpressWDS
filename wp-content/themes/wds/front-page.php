<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

get_header(); ?>
<style>
    .home{
		background-image:url("http://localhost/WordpressWDS/wp-content/themes/wds/dev/images/header_homepage.jpg" );
		background-repeat: no-repeat;
		background-size:100%;
		min-height:1200px;
	}
</style>
<div id="header">
    <div id="page home" class="site home">
        <header role="banner" >
            <div class="navbar-fixed">
                <nav class="nav">
                    <div class="nav-wrapper">
                        <a class="a-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri()?>/dev/images/blanc.png"/></a>
                        <?php wp_nav_menu( array('menu_class' => 'hide-on-med-and-down' ) ); ?>
                    </div>
                </nav>
            </div>
            <div class="site-branding">
                <?php dynamic_sidebar( 'sidebar-head' );  ?>
                <a class="btn btn_md" style="margin-top: 7%;">Je m'inscris</a>
            </div>
        </header>
    </div>
</div>
    <div id="front_formations" style="min-height:800px; ">
        <div id="cf7" class="shadow">
            <div class="row" style="min-height:400px">
                <img class='opaque' id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_md.png" height="600px"  />
                <img id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_dg.png" height="600px"  />
                <img id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_d.png"  height="600px" />
                <img id="diapo" src="<?php echo get_template_directory_uri()?>/dev/images/bg_sr.png" height="600px" />

                <h2 class="formation">Nos Formations</h2>

                <!--<div id="menu" class="menu">
                    <p id="cf7_controls">
                        <span id="btn_md" class="selected"><a href="#"></a>Bac +2 Marketing Digital <br /></span>
                        <span id="btn_dg">Mastère 1 Design Graphique <br /></span>                        
                        <span id="btn_d">Mastère 1 Développement <br /></span>
                        <span id="btn_sr" >Mastère 1 Système & Réseau <br /></span>
                    </p>
                </div>-->

                
                <ul id="cf7_controls" class="dotstyle dotstyle-hop">
                    <li id="btn_md" class="selected current"><a class="myLinks"></a>Bac +2 Marketing Digital</li>
                    <li id="btn_dg"><a class="myLinks"></a>Mastère 1 Design Graphique</li>
                    <li id="btn_d"><a class="myLinks"></a>Mastère 1 Développement</li>
                    <li id="btn_sr"><a class="myLinks"></a>Mastère 1 Système & Réseau</li>
                </ul>
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
    
    <div class="container" style="padding-top:100px">
    <img src="<?php echo get_template_directory_uri()?>/dev/images/barreRM2.png" style="position:absolute; right:0;z-index:-1;"alt="">       
        <style>
        @media only screen and (max-width: 600px){
            #yellow-block 
            {
                opacity:0;
            }
        }
        
        </style>
        <div id="front_video" style="height:800px;">
            <div id="ytapiplayer2" style="display:none;"></div>
            <div class="row" id="bloc_video_pres">
                <div class="col s11 m6 push-m1" id="launch_video" style="height:200px; margin-top:200px; cursor:pointer;">
                    
                </div>
                <div id="yellow-block" class="col s1 m4 push-m2">
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
        <img src="<?php echo get_template_directory_uri()?>/dev/images/barreJV2.png" style="position:absolute; left:0; z-index:-1;"alt="">       
            <main id="main" class="site-main" role="main">
            <h5>L'ACTU</h5>
            <p>Retrouvez toutes les actus de l'école</p>
            <div class="row">
            <div class="col s12 m7 l5 push-l2" style="padding:0;max-height:500px; background-color:#353533">    
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

            <div class="col s12 m5 l3 push-l2" style="max-height:500px; padding:0;">
                <?php
                
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

        <style>
        @media only screen and (max-width: 600px){
            #other-block 
            {
                display:none !important;
            }
        }
        
        </style>
        <div id="front_entreprises">
            <div class="row">
            <div id="purple-block" class="col s12 m4 push-m1">
                <div id="purple-block-text">
                    <h4>ENTREPRISES</h3>
                    <p>Vous recherchez des stagiaires ou <br> des étudiants en alternance</p>
                    <a class="waves-effect waves-light btn">Info entreprise</a>
                </div>   
            </div>
            <div id="other-block" class="col s12 m5 push-m1">
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
            <img src="<?php echo get_template_directory_uri()?>/dev/images/barreRM.png" style="position:absolute; right:0;z-index:-1;"alt="">       
        </div>
        <div id="front_contacts" class="row">
        <div class="col l6 s12">
            <div class="item_contact">
                <h5>SUIVEZ - NOUS</h5>
                <p>Retrouvez nous sur nos réseaux sociaux</p>
                <div id="icon_contact">
                    <object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/logo_fb.svg">Your browser does not support SVGs</object>
                    <object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/logo_ig.svg">Your browser does not support SVGs</object>
                    <object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/logo_twi.svg">Your browser does not support SVGs</object>
                </div>
            </div>    
        </div>
        <div class="col l6 s12">
            <div class="item_contact">
                <h5>NEWSLETTER</h5>
                <p>Je m’inscris gratuitement <br> pour ne manquer aucune actualités</p>
                <form id="form_contact">
                    <input type="email" name="email_newsletter" value="" placeholder="adresse email">
                    <input type="submit" name="" value="Je m'abonne">
                </form>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/dev/images/barreJV2.png" style="position:absolute; left:0;z-index:-1;max-height:500px;"alt="">       
        </div>
    </div>
<script>
    (function(){
		$(window).scroll(function(){
            $('div#header').attr('id','header-custom')
            $('.logo').attr('src', '<?php echo get_template_directory_uri()?>/dev/images/logo-wds-noir.png')
			if($(window).scrollTop() === 0){
                $('div#header-custom').attr('id','header')
                $('.logo').attr('src', '<?php echo get_template_directory_uri()?>/dev/images/logo-hd-blanc.png')
            }	
		})

	})(window)
</script>
<?php
get_footer();

