<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ouesco
 */

?>
<a href="javascript:history.go(-1)" class="retour-arriere">
      <button class="retour-arriere">
      <img class="close-contact" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/croix.svg" alt="">
    </button>
    </a>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- IMAGE DE COUV -->
  <header class="entry-header">

    <hr>
    <div class="titre-contacts">
      <?php the_field('titre_contact'); ?>
    </div>
  </header><!-- .entry-header -->

  <!-- CONTENT FLEXIBLE -->
  <div class="entry-content">
    <?php if( have_rows('contacts') ):
      while ( have_rows('contacts') ) : the_row();?>
        <div class="contact-part">
          <div class="titre-contact"><?php the_sub_field('titre_en_gras'); ?></div>
          <div class="infos-contact"><?php the_sub_field('infos_contact'); ?></div>
        </div>
      <?php endwhile;
    endif; ?>

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

