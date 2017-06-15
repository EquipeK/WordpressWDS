<?php /* Template Name: formations */ ?>


<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section style="margin-left:150px">
				<div class="container" id="page-content">

					<?php
							$my_posts = null;
							$the_slug = 'developpement-webmobile';
							$args = array(
							'name'           => $the_slug,
							'post_type'      => 'post',
							'post_status'    => 'publish',
							'posts_per_page' => 1
							);
							$my_posts = get_posts( $args );
					while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'formations' );
							var_dump($the_post());
					?>
						<article style="width:70%;">
							<h2><?= $my_posts[0]->post_title ?></h2>
							<p>
								<?= $my_posts[0]->post_content ?>
							</p>
						
						</article>
						<div id="form_email_leaflet" class="content">
							<form class="" action="?page_id=14" method="post">
								<label for="email">Pour plus d'information sur la formation, veuillez indiquez votre email afin de recevoir la plaquette par email</label>
								<input type="email" name="email" value="" placeholder="Entrez votre email">
								<input type="submit" name="" value="Envoyer">
							</form>
						</div>
								<?php endwhile; // End of the loop ?>

				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
	if(isset($_POST['email'])){
		var_dump($_POST);
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $_POST['email'])) // On filtre les serveurs qui présentent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
		//=====Déclaration des messages au format texte et au format HTML.
		$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
		$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
		//==========

		//=====Lecture et mise en forme de la pièce jointe.
		$fichier   = fopen(WP_CONTENT_DIR . '/uploads/2017/03/Why.pdf', "r");
		$attachement = fread($fichier, filesize(WP_CONTENT_DIR . '/uploads/2017/03/Why.pdf'));
		$attachement = chunk_split(base64_encode($attachement));
		fclose($fichier);
		//==========

		//=====Création de la boundary.
		$boundary = "-----=".md5(rand());
		$boundary_alt = "-----=".md5(rand());
		//==========

		//=====Définition du sujet.
		$sujet = "Plaquete d'information de la formation";
		//=========

		//=====Création du header de l'e-mail.
		$header = "From: \"Glenn Guegan\"<glenn.guegan@gmail.com>".$passage_ligne;
		$header.= "Reply-to: \"Glenn Guegan\" <glenn.guegan@gmail.com>".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		//==========

		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
		$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========

		$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

		//=====Ajout du message au format HTML.
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		//==========

		//=====On ferme la boundary alternative.
		$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
		//==========



		$message.= $passage_ligne."--".$boundary.$passage_ligne;

		//=====Ajout de la pièce jointe.
		$message.= "Content-Type: application/pdf; name=\"Why.pdf\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
		$message.= "Content-Disposition: attachment; filename=\"Why.pdf\"".$passage_ligne;
		$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========
		//=====Envoi de l'e-mail.

		//==========
		// mail($mail,$sujet,$message,$header);


		$retour = wp_mail($_POST['email'], $sujet, $message,$header);
		var_dump($retour);
	}
	?>