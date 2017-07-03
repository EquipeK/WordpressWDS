<?php /* Template Name: contact */ ?>

<?php get_header('custom'); ?>
    <div id="bandeau-contact" class="bandeau" style="border:solid 1px black; height:350px; width:100%;margin-top:50px">
	</div>
    <div class="container" style="padding-top:150px">
        <div class="row">
            <div class="col s12 m12">
            <div class="pagenations" style="display:none">
                <div class="pagenation page-01 is-active"></div>
                <div class="pagenation page-02"></div>
                <div class="pagenation page-03"></div>
            </div>
            <form class="main">
                <!-- STEP 1 -->
                <div class="block block-01 is-active">
                    <div class="card cardContact">
                    <div class="card-content contactContent">
                        <div class="col s12 m8 contactForm">
                            <span class="card-title">Nous contacter</span>

                            <div class="contactTitle left"><h3>Je suis intéressé par</h3></div>
                            <div class="contactStep right"><p>1/3</p></div>
                            <div class="clearfix"></div>


                            <div class="row">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <p>
                                                <input name="group1" type="radio" id="market" />
                                                <label for="market">Bac +2 Marketing Digital</label>
                                            </p>
                                        </div>
                                        <div class="input-field col s6">
                                            <p>
                                                <input name="group1" type="radio" id="design" />
                                                <label for="design">Mastère 1 Design Graphique</label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <p>
                                                <input name="group1" type="radio" id="dev" />
                                                <label for="dev">Mastère 1 Développement</label>
                                            </p>
                                        </div>
                                        <div class="input-field col s6">
                                            <p>
                                                <input name="group1" type="radio" id="res" />
                                                <label for="res">Mastère 1 Système & Réseau</label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <p>
                                                <input name="group1" type="radio" id="other" />
                                                <label for="other">Autres</label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="btn waves-effect waves-light btn-contact button page-02">Suivant</div>
                            </div>





                            <!--<?php while (have_posts()) : the_post(); ?>

                                <div class="entry-content-page">
                                    <?php the_content(); ?>
                                </div>

                            <?php endwhile; ?>-->
                        </div>
                        <div class="col s12 m4 contactCoord ">
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
                

                <!-- STEP 2 -->
                <div class="block block-02">
                    
                
                <div class="card cardContact">
                    <div class="card-content contactContent">
                        <div class="col s12 m8 contactForm">
                            <span class="card-title">Nous contacter</span>

                            <div class="contactTitle left"><h3>Vos coordonées</h3></div>
                            <div class="contactStep right"><p>2/3</p></div>
                            <div class="clearfix"></div>


                            <div class="row">
                                    <div class="row">
                                        <div class="input-field col s6">
                                             <input id="last_name" type="text" class="validate">
                                            <label for="last_name">Nom</label>
                                        </div>
                                        <div class="input-field col s6">
                                             <input id="first_name" type="text" class="validate">
                                            <label for="first_name">Prénom</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                             <input id="phone" type="text" class="validate">
                                            <label for="phone">Téléphone</label>
                                        </div>
                                        <div class="input-field col s6">
                                             <input id="mail" type="text" class="validate">
                                            <label for="mail">Adresse mail</label>
                                        </div>
                                    </div>

                                    <div class="btn waves-effect waves-light btn-contact page-03">Suivant</div>
                            </div>

                            <!--<?php while (have_posts()) : the_post(); ?>

                                <div class="entry-content-page">
                                    <?php the_content(); ?>
                                </div>

                            <?php endwhile; ?>-->
                        </div>
                        <div class="col s12 m4 contactCoord ">
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
                <!-- STEP 3 -->
                <div class="block block-03">
                <div class="card cardContact">
                    <div class="card-content contactContent">
                        <div class="col s12 m8 contactForm">
                            <span class="card-title">Nous contacter</span>

                            <div class="contactTitle left"><h3>Votre message</h3></div>
                            <div class="contactStep right"><p>3/3</p></div>
                            <div class="clearfix"></div>


                            <div class="row">
                                
                                    <div class="row">
                                       <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                            <label for="textarea1">Message</label>
                                        </div>
                                    </div>

                                    <input class="button btn waves-effect waves-light btn-contact" type="submit" name="submit" value="submit">        
                               
                            </div>

                            <!--<?php while (have_posts()) : the_post(); ?>

                                <div class="entry-content-page">
                                    <?php the_content(); ?>
                                </div>

                            <?php endwhile; ?>-->
                        </div>
                        <div class="col s12 m4 contactCoord ">
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
                </form>
            </div>
        </div>
    </div>




<?php 
include('wp-content\themes\wds\inc\contact_form.php');
get_footer(); ?>
