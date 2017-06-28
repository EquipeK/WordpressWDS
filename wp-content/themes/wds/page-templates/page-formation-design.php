<?php /* Template Name: FormationDesign */ ?>

<?php get_header('custom'); ?>
    <div style="border:solid 1px black; height:350px; width:100%;margin-top:50px">
		<div style="margin-top:100px">
			<span style="padding:25px 30px 25px 30px; border:solid 1px black; border-top-right-radius:50px; border-bottom-right-radius:50px; font-size:1.2em"><?php echo get_the_title(); ?></span>
		</div>
	</div>

    <section class="whatThis">

        <div class="container">
            <div class="row whatThisCard">
                <div class="col m3 whatThisImg">
                    <img src="<?php echo get_template_directory_uri()?>/dev/images/DG1.png" alt="" class="responsive-img">
                    <div class="whatThisTitle"><h2>Le design graphique c'est<br />quoi</h2></div>
                </div>
                <div class="col m9 whatThisContent">
                    <p>
                        <span>Le Design Graphique</span> consiste à créer un outil de communication visuelle grâce à différents moyens.
                        C’est une discipline qui s’applique à de nombreux domaines : illustration, presse, édition, packaging, publicité, design web, motion design, communication d’entreprise, identité visuelle, etc.
                    </p>
                    <p>
                        <span>Le designer graphique</span> doit par conséquent savoir faire preuve d’adaptation et d’une grande créativité.
                    </p>
                </div>
                <a href="" class="btnDownload"><span class="btnText">Télécharger la plaquette</span> <img src="<?php echo get_template_directory_uri()?>/dev/images/iconeDownload.png" alt=""></a>
            </div>
        </div>

    </section>

    <section class="formationTags">
        <div id="cf7" class="shadow">
            <div class="row">
                <ul id="cf7_controls">
                    <li id="btn_objectif" class="current">Objectifs</li>
                    <li id="btn_matiere">Matières</li>
                    <li id="btn_debouche">Débouchés</li>
                </ul>
            </div>
            <div class="row" style="right:15%">
                <div id="content_objectif" class="txt col s9 push-s2">
                    <h3 class="titre">Les objectifs</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel afin de devenir les nouveaux acteurs du webdesign.</p>
                </div>
                <div id="content_matiere" class="txt col s9 push-s2">
                    <h3 class="titre">Design Graphique</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel afin de devenir les nouveaux acteurs du webdesign.</p>
                </div>
                <div id="content_debouche" class="txt col s9 push-s2">
                    <h3 class="titre">Développement web</h2>
                    <p>Vous serez formés à la conception de supports de communication et à la réalisation de sites<br /> Web, tout en respectant les standards pour une insertion efficace dans le milieu professionnel<br /> afin de devenir les nouveaux acteurs du webdesign.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="moreInfos" style="min-height:500px">


        <div class="row">
            <div class="container">
                <div class="col s12 m5 push-m7" id="bloc-alternance">
                    <h6>EN SAVOIR PLUS SUR L'ALTERNANCE</h6>
                    <p>Retrouver les informations sur l'alternance sur notre page Alternance</p>
                    <a class="waves-effect waves-light btn" id="btn-alternance">Alternance</a>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri()?>/dev/images/DG2.png" style="position:absolute; left:0; z-index:-1;" alt="">
        </div>
    </section>

    <section class="moreActus">
        <div id="formation_entreprises" style="display:block;">
            <div class="row">
                <div id="purple-block" class="col s12 m4 push-m6">
                    <div id="purple-block-text">
                        <h4>PORTES OUVERTES</h3>
                        <p>Tout les mercredis après-midi, dès le <br> mois de février, l'école ouvre ses portes <br> et vous accueille de 14h à 17h.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php get_footer(); ?>
