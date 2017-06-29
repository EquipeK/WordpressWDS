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
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
                    </div>
                    <div class="col s12 m5 push-m2" id="bloc-alternance">
                        <h6>LES AVANTAGES DE L'ALTERNANCE</h6>
                        <!-- start slipsum code -->
                        <p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
                    </div>
                <img class="images-side" src="<?php echo get_template_directory_uri()?>/dev/images/barreJV2.png" style="position:absolute; left:0; z-index:-1;" alt="">    
                </div>
                
                <div class="row">
                    <div class="col s12 m5">
                        <h6>ET POUR L'ENTREPRISE ?</h6>
                        <!-- start slipsum code -->

                        <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>

                        <!-- end slipsum code -->
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