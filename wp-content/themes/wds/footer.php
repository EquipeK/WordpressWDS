<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WDS
 */

?>
<style>
@media only screen and (max-width: 993px){
.footer-two 
{
	flex-direction:column;
}

#icon_footer 
{
	display:none;
}

.site-info 
{
	padding-top:20px;
}

}
</style>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<div class='footer-item footer-two'>
					<div class='footer-item'>
						<div class='footer-item' id="icon_footer">
							<object type="image/svg+xml" data="<?php echo get_template_directory_uri()?>/dev/images/icon_map.svg">Your browser does not support SVGs</object>
						</div>
						<div class='footer-item'>
							297 rue Eugène Berest </br>
							29200 BREST
						</div>
					</div>
					<div class='footer-item'>
						<a href="#">Mentions Légales</a>
					</div>
					<div class='footer-item'>
					brest@ecolewds.fr </br>
					02 57 52 04 31
					</div>	
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
