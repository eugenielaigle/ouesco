<section class="panel part-2 panel-<?php echo get_row_index();?>" id="home-partie2">
<div class="padding-part2">
  <?php $encart_de_gauche = get_sub_field('encart_de_gauche');
  if( $encart_de_gauche ): ?>
    <div class="encart-de-gauche">
      <div class="content">
        <p class="chapeau"><?php echo $encart_de_gauche['chapeau']; ?></p>
        <h3 class="titre-gauche"><?php echo $encart_de_gauche['titre']; ?></h3>
        <div class="paragraphe-gauche">
          <?php echo $encart_de_gauche['paragraphe'];?>
        </div>
        <!-- FICHIER DE TELECHARGEMENT -->
        <?php $file = $encart_de_gauche['document_telechargeable'];
        if ($file):?>
        <a class="telechargement" href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>">
          <img class="image-telechargement" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telechargement.svg" alt="téléchargement">
          <p class="nom-fichier"><?php echo $encart_de_gauche['nom_du_fichier']; ?></p>
        </a>
      <?php endif;?>
      </div>
    </div>
  <?php endif; ?>

  <div class="encart-de-droite">
    <hr>
    <?php
    if( have_rows('encart_de_droite') ):
      while ( have_rows('encart_de_droite') ) : the_row();
        $num = get_row_index();
        $number = ($num < 10 ? "0$num" : $num);?>
        <div class="comite">
          <p class="number-droite"><?php echo $number;?></p>
          <p class="comite-droite"><?php the_sub_field('methode');?></p>
        </div>
      <?php endwhile;
    else :
    endif;?>
  </div>
</div>
</section>
