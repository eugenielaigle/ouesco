<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ouesco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ouesco' ); ?></a> -->

		<header id="masthead" class="site-header">
<!-- 		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$ouesco_description = get_bloginfo( 'description', 'display' );
			if ( $ouesco_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ouesco_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>.site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<img class="open" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/menu.svg" alt="">
				<img class="close" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/croix.svg" alt="">
			</button>
			<div class="bleu">
				<div class="end-nav">
					<a href="mailto:ouesco2@gmail.com">
						<div class="mail">
							<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/mail.png" alt="mail ouesco">
						</div>
					</a>
					<a href="https://www.facebook.com/Ouesco-206840756585390/?ref=br_rs" target="_blank">
						<div class="facebook">
							<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/facebook-logo-blc.png" alt="facebook">
						</div>
					</a>

				</div>
			</div>
			<div class="menu-header">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
				<div id="footer-header" class="menu-footer">
					<p class="phrase-footer">Syndicat Mixte du SAGE Ouest-Cornouaille (OUESCO), Maison de la Baie d’Audierne – Saint Vio,  29720 Treguennec.</p>
					<div class="site-menu">
						<a href="https://www.facebook.com/Ouesco-206840756585390/?ref=br_rs" target="_blank" class="facebook-mobile">
							<div class="facebook">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/facebook-logo-blc.png" alt="facebook">
							</div>
						</a>
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-footer',
							'menu_id'        => 'menu-footer',
						) );
						?>

					</div><!-- .site-info -->
					<p class="note2018">©2018 Ouesco. <br>
					Tous droits réservés.</p>
				</div><!-- #colophon -->
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
