<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ouesco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- IMAGE DE COUV -->
	<header class="entry-header">

	</header><!-- .entry-header -->

	<!-- CONTENT FLEXIBLE -->
	<div class="entry-content">
		<div id="pinContainer">

			<?php if( have_rows('contenu_flexible') ):
				while ( have_rows('contenu_flexible') ) : the_row();

					if( get_row_layout() == 'image_de_couv' ):
						get_template_part( 'flexible/couv');

					elseif( get_row_layout() == 'panoramique' ):
						get_template_part( 'flexible/panoramique');

					elseif( get_row_layout() == 'map' ):
						get_template_part( 'flexible/map');

					elseif( get_row_layout() == 'chapeau' ):
						get_template_part( 'flexible/chapeau');

					elseif( get_row_layout() == 'chapeau-methode-numero' ):
						get_template_part( 'flexible/chapeau-methode');

					elseif( get_row_layout() == 'articles_avec_image' ):
						get_template_part( 'flexible/article-avec-image');

					elseif( get_row_layout() == 'methode_avec_numero' ):
						get_template_part( 'flexible/methode-avec-numero');

					elseif( get_row_layout() == 'articles_par_categorie' ):
						get_template_part( 'flexible/article-par-categorie');

					elseif( get_row_layout() == 'graphique' ):
						get_template_part( 'flexible/graphique');

					elseif( get_row_layout() == 'titre_cat_actions' ):

					elseif( get_row_layout() == 'home_partie_2' ):
						get_template_part( 'flexible/home-part2');

					endif;

				endwhile;
			else :
			endif; ?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
