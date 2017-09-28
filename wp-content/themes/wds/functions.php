<?php
/**
 * WDS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WDS
 */

if ( ! function_exists( 'wds_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wds_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WDS, use a find and replace
	 * to change 'wds' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wds', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'wds' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wds_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'wds_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wds_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wds_content_width', 640 );
}
add_action( 'after_setup_theme', 'wds_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wds_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wds' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'=>'Sidebar Header',
		'id'=> 'sidebar-head',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'wds_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wds_scripts() {
	wp_enqueue_style( 'wds-style', get_stylesheet_uri() );
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery',get_template_directory_uri() . '/dist/js/jquery-3.2.0.min.js');

	wp_enqueue_script( 'wds-scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '20151215', true );

	wp_register_script('leaflet',get_template_directory_uri() . '/dev/js/leaflet.js', array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wds_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function contact_send_message() {
	if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
    $contact_errors = false;

    // get the posted data
   	$name_contact     = $_POST['name_contact'];
	$lastname_contact    = $_POST['lastname_contact'];
	$email_contact    = $_POST['email_contact'];
	$phone_contact   = $_POST['phone_contact'];
	$subject_contact  = $_POST['group1'];
	$message_contact = $_POST['message_contact'];

	$address = "brest@ecolewds.fr";

	// Below the subject of the email
	$e_subject = 'Vous avez été contacté par ' . $name_contact . ' ' . $lastname_contact. '.';
	 $e_subject = "=?utf-8?B?" . base64_encode($e_subject) . "?=";

	// You can change this if you feel that you need to.
	$e_body = "Vous avez été contacté par $name_contact $lastname_contact dans l'intention éventuelle de rejoindre la formation $subject_contact. La personne a souhaitée ajouter le message suivant :" . PHP_EOL . PHP_EOL;
	$e_content = "\"$message_contact\"" . PHP_EOL . PHP_EOL;
	$e_reply = "Vous pouvez répondre à $name_contact $lastname_contact via email : $email_contact ou par téléphone au $phone_contact";

	$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

	$header .= "MIME-Version: 1.0\n";
	$header .= "From: $email_contact\n";
	$header .= "Reply-To: $email_contact\n";
    $header .= "Content-Type: text/html; charset=utf-8\n";

    // send the email using wp_mail()
    if( !wp_mail($address, $e_subject, $msg, $header) ) {
        $contact_errors = true;
    }

}
add_action('contact_send_message', 'contact_send_message');

function send_plaquette() {

    $contact_errors = false;

    // get the posted data
    $email_address = $_POST["email_newsletter"];

    // write the email content
    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-Type: text/html; charset=utf-8\n";

    $message .= "Voici la plaquette des formations de la WDS !";

    $subject = "Plaquette WDS";
    $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

    $to = $email_address;

    // send the email using wp_mail()
    if( !wp_mail($to, $subject, $message, $header) ) {
        $contact_errors = true;
    }

}
add_action('send_plaquette', 'send_plaquette');

function inscription_ecole() {
	if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
    $contact_errors = false;

	$code =	isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : NULL;

	function isValid($code)
	{
		if (empty($code)) {
			return false; // Si aucun code n'est entré, on ne cherche pas plus loin
		}
		$params = array('secret'=>'6LcfzBAUAAAAAORAB_Y0CXh2mBZ4wPQZt_C9Ih6x','response' => $code);
		$url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
		if (function_exists('curl_version')) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
			$response = curl_exec($curl);
		} else {
			// Si curl n'est pas dispo, un bon vieux file_get_contents
			$response = file_get_contents($url);
		}

		if (empty($response) || is_null($response)) {
			return false;
		}

		$json = json_decode($response);
		return $json->success;
	}

	$reponse = isValid($code);
	if($reponse == false)
	{
		header('Location: '.$_SERVER['PHP_SELF'].'inscriptions/?captcha=captcha');
		exit;
	}else
	{	
		// get the posted data
		$name_contact     = $_POST['name_contact'];
		$lastname_contact    = $_POST['lastname_contact'];
		$dateNaissance    = $_POST['birth'];
		$email_contact    = $_POST['email_contact'];
		$phone_contact   = $_POST['phone_contact'];
		$subject_contact  = $_POST['select-formation'];

		$anneeFormation1  =  $_POST['candidatureFormationAnnee'];
		$etablissementFormation1  =  $_POST['etablissementFormation'];
		$titreFormation1  =  $_POST['titreFormation'];
		$obtentionFormation1  =  $_POST['obtentionFormation'];
		if ($obtentionFormation1 == 'oui')
		{
			$obtention = "oui";
		}else
		{
			$obtention = "non";
		}

		$ExpStatut1  =  $_POST['candidatureExpStatut'];
		$dateExp1  =  $_POST['candidatureExpDate'];
		$ExpEntreprise1  =  $_POST['candidatureExpEntreprise'];
		$ExpPoste1  =  $_POST['candidatureExpPoste'];
		$ExpDuree1  =  $_POST['candidatureExpDuree'];

		$internetDivers     = $_POST['checkboxInternet'];
		$presseDivers     = $_POST['checkboxPresse'];
		$connaissancesDivers = $_POST['checkboxConnaissances'];
		$autreDivers     = $_POST['candidatureDiversAutre'];
		
		// Test DIVERS
		$divers = $internetDivers.$presseDivers.$connaissancesDivers.$autreDivers;

		$dateNaissance = date("d-m-Y", strtotime($dateNaissance));
		$dateExp1 = date("d-m-Y", strtotime($dateExp1));

		require_once('inc/fpdf/fpdf.php');
		require_once('inc/FPDI/fpdi.php');
		$pdf = new FPDI();
		$pageCount = $pdf->setSourceFile(WP_CONTENT_DIR . '/uploads/dossier-de-preinscription.pdf');
		$tplIdx[1] = $pdf->importPage(1, '/MediaBox');  // ou 'MediaBox'
		$tplIdx[2] = $pdf->importPage(2, '/MediaBox');
		$tplIdx[3] = $pdf->importPage(3, '/MediaBox');
		$tplIdx[4] = $pdf->importPage(4, '/MediaBox');

		$pdf->SetFont('Helvetica'); 

		// PAGE 1
		$pdf->addPage();

		$pdf->useTemplate($tplIdx[1], 0, 0, 210);

		$pdf->Text(120,90,$lastname_contact);
		$pdf->Text(122,105,$name_contact);

		$choix = 'X';
		switch($subject_contact)
		{
			case 'Bac +2 : Chargé Marketing Digital (Bac+2 en 1 an)':
				$pdf->Text(172,196,$choix);
				break;
			case 'Mastere Design Graphique (Bac+3/4 en 2 ans)':
				$pdf->Text(172,209,$choix);
				break;
			case 'Mastere Developpement (Bac+3/4 en 2 ans)':
				$pdf->Text(172,222,$choix);
				break;
			case 'Mastere Systeme Reseau (Bac+3/4 en 2 ans)':
				$pdf->Text(172,237,$choix);
				break;
			case 'Mastere IT Manager (Bac+5 en 1 an)':
				$pdf->Text(172,250,$choix);
				break;
			default:

		}

		//PAGE 2

		$pdf->addPage();
		$pdf->useTemplate($tplIdx[2], 0, 0, 210);

		$pdf->Text(44,52,$lastname_contact);
		$pdf->Text(115,52,$name_contact);
		$pdf->Text(45,68,$dateNaissance);
		$pdf->Text(45,115,$phone_contact);
		$pdf->Text(45,132,$email_contact);

		//PAGE 3

		$pdf->addPage();
		$pdf->useTemplate($tplIdx[3], 0, 0, 210);

		// Formations

		$pdf->Text(45,60,$anneeFormation1);
		$pdf->Text(62,60,$etablissementFormation1);
		$pdf->Text(116,60,$titreFormation1);
		$pdf->Text(150,60,$obtention);

		// Exp
		$pdf->Text(17,143,$ExpStatut1);
		$pdf->Text(45,143,$dateExp1);
		$pdf->Text(75,143,$ExpEntreprise1);
		$pdf->Text(130,143,$ExpPoste1);
		$pdf->Text(175,143,$ExpDuree1);

		//PAGE 4

		$pdf->addPage();
		$pdf->useTemplate($tplIdx[4], 0, 0, 210);

		if (isset($internetDivers))
		{
			$pdf->Text(55,60,$choix);
		}
		if (isset($connaissancesDivers))
		{
			$pdf->Text(94,60,$choix);	
		}
		if (isset($presseDivers))
		{
			$pdf->Text(154,60,$choix);	
		}
		
		if (isset($autreDivers))
		{
			$pdf->Text(55,70,$choix);
			$pdf->Text(94,68,$autreDivers);
		}

		$message = $name_contact.$lastname_contact;

		$pdf-> Output(WP_CONTENT_DIR . '/uploads/'.$message.'.pdf', 'F');
		$attachments = array( WP_CONTENT_DIR . '/uploads/'.$message.'.pdf' );
		$to = "gwendal.jeanson@gmail.com";

		// Below the subject of the email
		$e_subject = 'Vous avez été contacté par ' . $name_contact . ' ' . $lastname_contact. '.';
		$e_subject = "=?utf-8?B?" . base64_encode($e_subject) . "?=";

		// You can change this if you feel that you need to.
		$e_body = "Vous avez été contacté par $name_contact $lastname_contact dans l'intention éventuelle de rejoindre la formation $subject_contact." . PHP_EOL . PHP_EOL;
		$e_content = "" . PHP_EOL . PHP_EOL;
		$e_reply = "Vous pouvez répondre à $name_contact $lastname_contact via email : $email_contact ou par téléphone au $phone_contact";

		$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

		$header .= "MIME-Version: 1.0\n";
		$header .= "From: $email_contact\n";
		$header .= "Reply-To: $email_contact\n";
		$header .= "Content-Type: text/html; charset=utf-8\n";

		// send the email using wp_mail()
		if( !wp_mail($to, $e_subject, $msg, $header, $attachments) ) {
			$contact_errors = true;
		}
	}
}
add_action('inscription_ecole', 'inscription_ecole');