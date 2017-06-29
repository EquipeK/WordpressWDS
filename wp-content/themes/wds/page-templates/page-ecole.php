<?php /* Template Name: ecole */ ?>

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

    
    <section class="ecole-historique">
        <div class="container">
            <div class="fond-historique">
                <div id="ligne-historique">
                    
                </div>
                <div class="row">
                    <div class="col s4">
                        <h6>2015</h6>
                    </div>
                    <div class="col s4">
                        <h6>2016</h6>
                    </div>
                    <div class="col s4">
                        <h6>2017</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s4 bloc-historique">
                    <h6>Création de la Web Digital School</h6>
                    <p>Du lorem ipsum ici. Du lorem ipsum ici. Du lorem ipsum ici. Du lorem ipsum ici.</p>
                </div>
                <div class="col s4 bloc-historique">
                    <h6>Création de la Web Digital School</h6>
                    <p>Du lorem ipsum ici. Du lorem ipsum ici. Du lorem ipsum ici. Du lorem ipsum ici.</p>
                </div>
                <div class="col s4 bloc-historique">
                    <h6>Création de la Web Digital School</h6>
                    <p>Du lorem ipsum ici. Du lorem ipsum ici. Du lorem ipsum ici. Du lorem ipsum ici.</p>
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
