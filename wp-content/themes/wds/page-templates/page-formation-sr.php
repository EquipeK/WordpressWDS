<?php /* Template Name: FormationSR */ ?>

<?php get_header('custom'); ?>
    <div id="bandeau-SR" class="bandeau"  style="border:solid 1px black; height:350px; width:100%;margin-top:50px">
		
	</div>

    <section class="whatThis">

        <div class="container">
            <div class="row whatThisCard">
                <div class="col m3 whatThisImg">
                    <img src="<?php echo get_template_directory_uri()?>/dev/images/sys_quoi.png" alt="" class="responsive-img">
                </div>
                <div class="col m9 whatThisContent">
                    <p>
                        <span class="formationResBGTxt">Le Design Graphique</span> consiste à créer un outil de communication visuelle grâce à différents moyens.
                        C’est une discipline qui s’applique à de nombreux domaines : illustration, presse, édition, packaging, publicité, design web, motion design, communication d’entreprise, identité visuelle, etc.
                    </p>
                    <p>
                        <span class="formationResBGTxt">Le designer graphique</span> doit par conséquent savoir faire preuve d’adaptation et d’une grande créativité.
                    </p>
                </div>
                <div class="btnDownload" id="slider-formation" style="height:200px; bottom:-140px;">
                    <span class="btnText">Télécharger la plaquette</span>
                    <img src="<?php echo get_template_directory_uri()?>/dev/images/iconeDownload.png" alt="">
                    <div id="sliding" style="display:none; padding-top:20px">
                    <form id="form_contact" style="width:100%;">
                        <input type="email" name="email_newsletter" value="" placeholder="adresse email">
                        <input type="submit" name="" value="Recevoir">
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="formationTags formationResBG">
        <div id="cf7" class="shadow">
            <div class="row">
                <ul id="cf7_controls">
                    <li id="btn_objectif" class="current">Objectifs</li>
                    <li id="btn_matiere">Matières</li>
                    <li id="btn_debouche">Débouchés</li>
                </ul>
            </div>
            <div class="row" style="right:15%">
                <div id="content_objectif" class="txt col m9 push-m2 s12">
                    <h3 class="titre formationBlackBGTxt">Les objectifs</h2>
                    <ul class="obj">
                        <li class="formationBlackBGTxt"><div class="objCheck"><img src="<?php echo get_template_directory_uri()?>/dev/images/iconeCheck.png" alt=""></div> Maîtriser les bases de la PAO (Publication Assistée par Ordinateur) et de la création graphique multimédia.</li>
                        <li class="formationBlackBGTxt"><div class="objCheck"><img src="<?php echo get_template_directory_uri()?>/dev/images/iconeCheck.png" alt=""></div> Pouvoir réaliser un site Web dans son intégralité, jusqu'à son intégration finale.</li>
                        <li class="formationBlackBGTxt"><div class="objCheck"><img src="<?php echo get_template_directory_uri()?>/dev/images/iconeCheck.png" alt=""></div> Savoir gérer un projet, seul ou en équipe.</li>
                        <li class="formationBlackBGTxt"><div class="objCheck"><img src="<?php echo get_template_directory_uri()?>/dev/images/iconeCheck.png" alt=""></div> Comprendre les concepts de design d’interface (UI) ainsi que de l’expérience utilisateur (UX).</li>
                        <li class="formationBlackBGTxt"><div class="objCheck"><img src="<?php echo get_template_directory_uri()?>/dev/images/iconeCheck.png" alt=""></div> Concevoir et appliquer une charte graphique.</li>
                        <li class="formationBlackBGTxt"><div class="objCheck"><img src="<?php echo get_template_directory_uri()?>/dev/images/iconeCheck.png" alt=""></div> Savoir rédiger et tenir une discussion en anglais.</li>
                    </ul>
                </div>
                <div id="content_matiere" class="txt col m9 push-m2 s12">
                    <h3 class="titre formationBlackBGTxt">Les Matières Enseignées </h2>
                    <img src="<?php echo get_template_directory_uri()?>/dev/images/matieres_sys.jpg" alt="Design Matières" class="responsive-img">
                </div>
                <div id="content_debouche" class="txt col m9 push-m2 s12">
                    <h3 class="titre formationBlackBGTxt">Les Débouchés</h2>
                    <img src="<?php echo get_template_directory_uri()?>/dev/images/nuages_sys.jpg" alt="Design Débouchés" class="responsive-img">
                </div>
            </div>
        </div>
        <div class="formationTagsBars hide-on-small-only"><img src="<?php echo get_template_directory_uri()?>/dev/images/barre_blanche.png" alt=""></div>
    </section>

    <section class="moreInfos" style="min-height:500px">


        <div class="row">
            <div class="container">
                <div class="col s12 m5 push-m7" id="bloc-alternance">
                    <h6 class="formationResBGTxt">EN SAVOIR PLUS SUR L'ALTERNANCE</h6>
                    <p>Retrouver les informations sur l'alternance sur notre page Alternance</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>alternance" class="waves-effect waves-light btn formationResBG formationBlackBGTxt" id="btn-alternance">Alternance</a>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri()?>/dev/images/DG2.png" style="position:absolute; left:0; z-index:-1;" alt="" class="hide-on-small-only">
        </div>
    </section>

    <section class="moreActus">
        <div id="formation_entreprises" style="display:block;">
            <div class="row">
                <div id="purple-block" class="col s12 m4 push-m6 formationResBG formationBlackBGTxt">
                    <div id="purple-block-text">
                        <h4>PORTES OUVERTES</h3>
                        <p>Tout les mercredis après-midi, dès le <br> mois de février, l'école ouvre ses portes <br> et vous accueille de 14h à 17h.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<style>
@keyframes slide {
  0% {
    transform: translateX(600px);
  }

  100% {
    transform: translateX(0);
  }
}
</style>

<?php get_footer(); ?>
