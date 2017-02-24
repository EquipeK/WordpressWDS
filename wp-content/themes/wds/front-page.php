<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WDS
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class='header-container'>
        <div class='header'>
            <div class='subscribe'>Test &#9662;</div>
            <div class='logo'><img src="<?php echo(get_template_directory_uri());?>/dist/images/awesome-logo.svg"/></div>
            <div class='social'><img src='<?php echo(get_template_directory_uri());?>/dist/images/social-icons.svg'/></div>
        </div>
    </div>

	<div class='photo-grid-container'>
        <div class='photo-grid'>
            <div class='photo-grid-item'>
            <img src='<?php echo(get_template_directory_uri());?>/dist/images/one.svg'/>
            </div>
            <div class='photo-grid-item'>
            <img src='<?php echo(get_template_directory_uri());?>/dist/images/two.svg'/>
            </div>
            <div class='photo-grid-item'>
            <img src='<?php echo(get_template_directory_uri());?>/dist/images/three.svg'/>
            </div>
            <div class='photo-grid-item'>
            <img src='<?php echo(get_template_directory_uri());?>/dist/images/four.svg'/>
            </div>
            <div class='photo-grid-item'>
            <img src='<?php echo(get_template_directory_uri());?>/dist/images/five.svg'/>
            </div>
        </div>
    </div>
		<?php
		/*if ( have_posts() ) :
			
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;*/ ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
