<?php /* Template Name: ecole */ ?>

<?php get_header('custom'); ?>

    <div id="bandeau-ecole" class="bandeau"  style="border:solid 1px black; height:350px; width:100%;margin-top:50px">
	</div>

    <div class="container" style="padding-top:100px;">
			<div class="row">    
			<div class="card horizontal">
			      <div class="card-image">
			        <img src="<?php echo get_template_directory_uri()?>/dev/images/qui_sommes-nous.png">
			      </div>
			      <div class="card-stacked">
			        <div class="card-content">
			          <style>
			          .text-card{
			          	margin:0px 80px 0px 80px!important;
			          	text-align: justify;
			          	font-size: 20px;
			          }
			          .text-card-2{
			          	margin:0px 50px 0px 50px!important;
			          	text-align: justify;
			          	font-size: 15px;

			          }
			          .title-page-ecole-black{
                        font-weight:bold;
			          	text-transform: uppercase;
			          	font-size: 20px;
			          	color:black;
			          	text-align: center;
			          }
			          .title-page-ecole-blue{
			          	text-transform: uppercase;
			          	font-size: 20px;
			          	color:darkblue;
			          	text-align: center;
                          font-weight:bold;
			          }
			          .text-download{
			          	font-size: 11px;
    					text-transform: uppercase;
    					font-weight: bold;
    					text-transform:uppercase;
    					color:#f93d3d!important;
    					padding-bottom: 20px;
			          }
			          .download-plaquette{
			          	height:200px;
			          	margin-top: 100px;

			          }
			          .green_ecole{
			          	color:#07b57a;
			          }
			          #mail_visitor{
			          	color:black;
			          	border-radius:50px;
			          	background-color:#dedede;
			          	width:100%;
			          	padding-left:15px;
			          	border-bottom: 0px;
    					box-shadow: 0px;
			          }
			          .back-yellow{
			          	background-image:url('<?php echo get_template_directory_uri()?>/dev/images/yellow_circle.png');
			          	height:475px;
			          	background-repeat:no-repeat;
			          	background-position:100%;
			          }
			          .back-green{
						background-image:url('<?php echo get_template_directory_uri()?>/dev/images/green_circle.png');
						height:475px;
						background-repeat:no-repeat;
						background-position: 1px;
			          }
			          .img-map{
						opacity:0.7;
						position:absolute;
						margin-bottom: 50px;
			          }
			          .btn_inscription{
						padding:10px;
						background-color:#f93d3d;
						color:white;
						border-radius:20px;
						text-transform: uppercase;
						padding: 10px 30px 10px 30px;
						font-weight: bold;
			          }

			          a.btn_inscription:hover{
			          	color:white;
			          }

			          .page-ecole-yellow{
			          	height:400px;
			          }
			          .link_form_inscription{
						width:60%;
						text-align:center;
			          }
			          .google_map{
						margin-top:70px;
						position:absolute;
						overflow:hidden;
						height:430px;
						width:885px;
			          }
			          .bandeau-gris{
						height:130px;
						background-color:grey;
						width:100%;
			          }
			          </style>

			          <p class="text-card"><b class="green_ecole">La Web Digital School</b> forme des professionnels du numérique à la poionte des nouvelles technologies. L'école a été créé en 2015 à Brest après une forte demande de formations dans le web suite aux grandes évolutions des entreprises Bretonnes.<br />L'originalité de notre établissement, faire bénéficier des meilleurs savoir-faire de l'écosystème numérique Bretons en plaçant nos étudiants dans des entreprises compétentes et prêtes à prendre un virage numérique.</p>
			          <p class="text-card"></p>
                      <p class="text-card">Partenaire des écoles IPSSI à Paris et CARREL à Lyon, nous vous apportons un enseignement de qualité et privilégions des classes de 15 étudiants maximum afin d'optimiser l'apprentissage de tous.</p>
			        </div>
			      </div>
			    </div> 
			</div>
			</div>

    
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

    	<div style="margin-top:80px;" class="row container">
			<div class="col s6">
				<h2 class="title-page-ecole-black">ce qu'on fait</h2>
				<p class="text-card-2">	
					Les formations de WDS permettent à tous les étudiants de communiquer entre eux et de s'entraider grâces à des modules de formations qui s'entrecroisent.<br />
					Chaque année les étudiants réalisent plusieurs projets numériques complets dans le cadre de groupes de travail encadrés par des enseignants en design, programmation, système et réseaux et management...
				</p>

				<h2 class="title-page-ecole-blue">Designer, Coder, Configurer...</h2>
				<p class="text-card-2">	
					On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
				</p>
			</div>
			<div class="col s6 download-plaquette">
			<div class="card horizontal">
			      <div class="card-image">
			        <img src="<?php echo get_template_directory_uri()?>/dev/images/newsletter.png">
			      </div>
			      <div class="card-stacked">
			        <div class="card-content" style="text-align:center;">
			          <p class="text-download" style="">Télécharger notre plaquette</p>
			          <input placeholder="Adresse mail" id="mail_visitor" type="text">
			          <a href="<?php echo esc_url( home_url( '/' ) ); ?>inscriptions"><image src="<?php echo get_template_directory_uri()?>/dev/images/btn_newsletter.png" /></a>
			        </div>
			      </div>
			    </div>
			</div>
			 
		</div>
		<div class="row" class="page-ecole-yellow">
			<div class="col s12 back-yellow">
			
			<!--<img class="responsive-img" style="position:absolute;padding-top:50px;" src="<?php echo get_template_directory_uri()?>/dev/images/yellow_circle.png">-->
		</div>
		<div class="row">
			<div class="container col s6 back-green">
			</div>
			<div class="col s6">
				<div class="link_form_inscription">
					<p class="title-page-ecole-blue">Comment s'inscrire</p>
				<p>
					Remplissez notre formulaire d'inscription en ligne.
					<br /><br />
					Après réception de votre dossier, l'école vous contactera pour un rendez-vous.
					<br /><br />
					Suite à un entretien personnalisé et un test d'admission, nous vous contacterons afin de vous donner une réponse définitive.
				</p>
				<a href="#" class="btn_inscription">Je m'inscris</a>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
            <div class="google_map">
                <div id='gmap_canvas' style='height:430px;width:885px;'>
                    </div>
                    <div>
                        <small>
                            <a href="http://embedgooglemaps.com">google maps carte</a>
                        </small>
                    </div>
                    <div>
                        <small>
                            <a href="http://www.youtubeembedcode.com">generate youtube code</a>
                            </small>
                        </div>
                    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                </div>
                <script type='text/javascript'>function init_map()
                {var myOptions = {
                    zoom:13,
                    center:new google.maps.LatLng(48.3935451,-4.434617200000048),
                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: new google.maps.LatLng(48.3935451,-4.434617200000048)});
                    infowindow = new google.maps.InfoWindow({
                        content:'<strong>Web Digital School</strong><br>297 rue eugene berest 29200 brest<br>'});
                    google.maps.event.addListener(marker, 'click', function(){
                        infowindow.open(map,marker);});infowindow.open(map,marker);}
                        google.maps.event.addDomListener(window, 'load', init_map);</script>
				<div class="col s6"></div>
				<div class="col s6"><img class="img-map" src="<?php echo get_template_directory_uri()?>/dev/images/qui_sommes_nous.png"/></div>
			</div>
		</div>

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
