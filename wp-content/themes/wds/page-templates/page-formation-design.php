<?php /* Template Name: FormationDesign */ ?>

<?php get_header('custom'); ?>
    <div style="border:solid 1px black; height:350px; width:100%;margin-top:50px">
		<div style="margin-top:100px">
			<span style="padding:25px 30px 25px 30px; border:solid 1px black; border-top-right-radius:50px; border-bottom-right-radius:50px; font-size:1.2em"><?php echo get_the_title(); ?></span>
		</div>
	</div>


    <section class="whatThis">

    </section>

    <section class="tags">

    </section>

    <section class="moreInfos" style="min-height:500px">
    <style>
    p
    {
        text-align: justify;
        /*text-align-last: center;*/
    }

    h6
    {
        text-align: center;
        color:#f93d3d;
    }

    </style>
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
