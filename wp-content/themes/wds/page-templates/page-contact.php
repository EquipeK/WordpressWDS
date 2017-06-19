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
                                <div class="coordIcon"><img src="" alt=""></div>
                                <div class="coordInfo">
                                    <p>297 rue Eugène Berest<br />29200 BREST</p>
                                </div>
                            </div>
                            <div class="coordPhone">
                                <div class="coordIcon"><img src="" alt=""></div>
                                <div class="coordInfo">
                                    <p>02 00 00 00 13</p>
                                </div>
                            </div>
                            <div class="coordEmail">
                                <div class="coordIcon"><img src="" alt=""></div>
                                <div class="coordInfo">
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
