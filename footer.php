<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ouesco
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer-mobile">
		<a href="https://www.facebook.com/Ouesco-206840756585390/?ref=br_rs" target="_blank">
			<div class="facebook">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/facebook-logo.jpg" alt="facebook">
			</div>
		</a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">
			<p class="nous-contacter">NOUS CONTACTER</p>
		</a>
	</div>
	<p class="phrase-footer">Syndicat Mixte du SAGE Ouest-Cornouaille (OUESCO), Maison de la Baie d’Audierne – Saint Vio,  29720 Treguennec.</p>
	<div class="site-menu">
		<?php wp_nav_menu( array(
			'theme_location' => 'menu-footer',
			'menu_id'        => 'menu-footer',
		) );
		?>

	</div><!-- .site-info -->
	<p class="note2018">©2018 Ouesco. <br>
	Tous droits réservés.</p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
