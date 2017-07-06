<?php /* Template Name: alternance */ ?>


<?php get_header('custom'); ?>

<style>
p
{
    text-align: justify;
    /*text-align-last: center;*/
}

h6
{
    text-align: center;
}


#page-content
{
    padding-bottom:200px;
}

#bloc-alternance
{
    padding-top:400px;
}

@media only screen and (max-width: 600px){
    #bloc-alternance
    {
        padding-top:35px;
    }

    .images-side
    {
        display:none;
    }
}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="bandeau-alternance" class="bandeau" style="border:solid 1px black; height:350px; width:100%;margin-top:50px;">
			</div>
            <img class="images-side" src="<?php echo get_template_directory_uri()?>/dev/images/red_circle.png" style="position:absolute; right:0; z-index:-1;"alt="">
			<section style="margin-top:150px">
				<div class="container" id="page-content">
                <!-- Passer sur du contenu dynamique ? -->
				<div class="row">
                    <div class="col s12 m5">
                        <h6>LE RYTHME DE L'ALTERNANCE</h6>
                        <?php 
                        $value = get_field( "alternance_premier_texte" );
                        if( $value ) {
                            echo $value;
                        } else {
                            echo 'empty';
                        } ?>

                    </div>
                    <div class="col s12 m5 push-m2" id="bloc-alternance">
                        <h6>LES AVANTAGES DE L'ALTERNANCE</h6>
                        <?php 
                        $value = get_field( "alternance_deuxieme_texte" );
                        if( $value ) {
                            echo $value;
                        } else {
                            echo 'empty';
                        } ?>
                        </div>
                <img class="images-side" src="<?php echo get_template_directory_uri()?>/dev/images/barreJV2.png" style="position:absolute; left:0; z-index:-1;" alt="">    
                </div>
                
                <div class="row">
                    <div class="col s12 m5">
                        <h6>ET POUR L'ENTREPRISE ?</h6>
                        <?php 
                        $value = get_field( "alternance_troisième_texte" );
                        if( $value ) {
                            echo $value;
                        } else {
                            echo 'empty';
                        } ?>
                    </div>
                    <div class="col s12 m5 push-m2">
                    <script>
                        $(document).ready(function(){
                            $('.materialboxed').materialbox();
                        });
                    </script>   
                        <img class="materialboxed responsive-img" src="<?php echo get_template_directory_uri()?>/dev/images/photo_alternance.png" alt="">
                    </div>
                    <img class="images-side" src="<?php echo get_template_directory_uri()?>/dev/images/barreRM.png" style="position:absolute; right:0; z-index:-1;"alt="">
                </div>	
	

				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
	?>