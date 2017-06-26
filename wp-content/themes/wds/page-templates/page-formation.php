<?php /* Template Name: formations */ ?>


<?php get_header('custom'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div style="border:solid 1px black; height:500px; width:100%;margin-top:50px">
				<div style="margin-top:100px">
					<span style="padding:25px 30px 25px 30px; border:solid 1px black; border-top-right-radius:50px; border-bottom-right-radius:50px; font-size:1.2em"><?php echo get_the_title(); ?></span>
				</div>
			</div>
			<section style="margin-top:150px">
				<div class="container" id="page-content">
					<img src="<?php echo get_template_directory_uri()?>/dev/images/barreRMleft.png" style="position:absolute; left:0; z-index:-1;"alt="">
						<article class="center-block" style="width:70%;">
							<h4 class="center-block" style="text-transform:uppercase">Web Digital School : l'école du numérique</h4>
							<div class="center-block center" style="width: 60%;">
								<p>Des formations professionnelles pour devenir un expert reconnu.</p>
								<p>Du BAC + 2 au BAC + 5</p>
								<p>Web Digital School est une école supérieur privée en informatique plébiscité par la qualité de son enseignement en alternance, en initial ou en continue </p>
							</div>
						</article>
						<img class="center-block" src="<?php echo get_template_directory_uri()?>/dev/images/puceformation.jpeg" alt="" style="width:120% !important">
						<article class="center-block" style="width:70%;">
							<div class="center-block center" style="width: 60%;">
								<p><span style="font-weight:bold">Après le BAC, </span>Les formations proposé à la Web Digital School sont réalisables selon 3 status, en fonction de votre situation</p>
							</div>
						</article>
						<img src="<?php echo get_template_directory_uri()?>/dev/images/barreJV2right.png" style="position:absolute; right:0; z-index:-1;"alt="">
						<img class="center-block" src="<?php echo get_template_directory_uri()?>/dev/images/statutformation.jpeg" alt="" style="width:70% !important">

						 <div id="front_entreprises" >
							<div class="row">
							<div id="purple-block" class="col s12 m4 push-m1" style="background-color: #353533 !important">
								<div id="purple-block-text" >
									<h4 style="text-transform:uppercase">DIGI Weeks / Days</h3>
									<p>Découvrez lors des Digiweeks & Digidays organisés par le Web Digital School.Découvrez lors des Digiweeks & Digidays organisés par le Web Digital School</p>
								</div>   
							</div>
							
							</div>
							<img src="<?php echo get_template_directory_uri()?>/dev/images/barreRM.png" style="position:absolute; right:0;z-index:-1;"alt="">       
						</div>
						<div id="form_email_leaflet" class="content">
							<form class="" action="?page_id=14" method="post">
								<label for="email">Pour plus d'information sur la formation, veuillez indiquez votre email afin de recevoir la plaquette par email</label>
								<input type="email" name="email" value="" placeholder="Entrez votre email">
								<input type="submit" name="" value="Envoyer">
							</form>
						</div>

				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
	?>