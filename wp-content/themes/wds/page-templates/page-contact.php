<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<style>

</style>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card cardContact">
                    <div class="card-content contactContent">
                        <div class="col m8 contactForm">
                            <span class="card-title">Nous contacter</span>

                            <div class="contactTitle left"><h3>Vos coordonées</h3></div>
                            <div class="contactStep right"><p>2/3</p></div>
                            <div class="clearfix"></div>

                            <?php while (have_posts()) : the_post(); ?>

                                <div class="entry-content-page">
                                    <?php the_content(); ?>
                                </div>

                            <?php endwhile; ?>
                        </div>
                        <div class="col m4 contactCoord contactCoordDev">
                            <div class="coordTitle">
                                <h3>Nos coordonnées</h3>
                            </div>
                            <div class="coordAddress">
                                <div class="coordIcon left">
                                    <img src="<?php echo get_template_directory_uri()?>/dev/images/localisation_white.png" alt="Localisation" class="responsive-img">
                                    <!-- Icone Black a afficher seulement si la classe est contactCoordRES -->
                                    <img style="display: none;" src="<?php echo get_template_directory_uri()?>/dev/images/localisation_black.png" alt="Localisation" class="responsive-img">
                                </div>
                                <div class="coordInfo right">
                                    <p>297 rue Eugène Berest<br />29200 BREST</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="coordPhone">
                                <div class="coordIcon left">
                                    <img src="<?php echo get_template_directory_uri()?>/dev/images/phone_white.png" alt="Phone" class="responsive-img">
                                    <!-- Icone Black a afficher seulement si la classe est contactCoordRES -->
                                    <img style="display: none;" src="<?php echo get_template_directory_uri()?>/dev/images/phone_black.png" alt="Phone" class="responsive-img">
                                </div>
                                <div class="coordInfo right">
                                    <p>02 00 00 00 13</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="coordEmail">
                                <div class="coordIcon left">
                                    <img src="<?php echo get_template_directory_uri()?>/dev/images/mail_white.png" alt="Mail" class="responsive-img">
                                    <!-- Icone Black a afficher seulement si la classe est contactCoordRES -->
                                    <img style="display: none;" src="<?php echo get_template_directory_uri()?>/dev/images/mail_black.png" alt="Mail" class="responsive-img">
                                </div>
                                <div class="coordInfo right">
                                    <p>brest@ecolewds.fr</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>
