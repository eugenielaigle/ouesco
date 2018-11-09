<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ouesco
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="background-404">
			<header>
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/logo-blanc.png" alt="Ouesco Ouest Cornouaille Eau">
			</header>
			<div class="content-404">
				<p>Il semblerait que <br>
					cette page n’existe plus.<br>
					Nous vous invitons à revenir<br>
				à l’accueil du site.</p>
			</div>
			<a href="<?php bloginfo('url');?>">
				<button class="button-newsletter button-404">REVENIR A L'ACCUEIL</button>
			</a>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

	<?php
	get_footer();
