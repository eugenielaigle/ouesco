<section class="panel methodenumero panel-<?php echo get_row_index();?>" id="methode-avec-numeros">

  <div class="chapeau-methode" id="chapeau-methode-numero">
    <?php $image = get_sub_field('graphique_gauche');
    if ($image): ?>
    <div class="graphique-numero-gauche">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
  <?php endif; ?>
  <div>
    <h4 class="chapeau"><?php the_sub_field('chapeau-sous-titre'); ?></h4>
    <h3 class="titre-chapeau titre-gros"><?php the_sub_field('chapeau_titre');?></h3>
    </div>
  </div>

  <div class="methode-num">
    <?php
$row = count( get_sub_field( 'methode' ) );
    if( have_rows('methode') ):
      echo '<div class="slider-for">';
      while ( have_rows('methode') ) : the_row();
        $num = get_row_index();
        $number = ($num < 10 ? "0$num" : $num);
        $rows = ($row < 10 ? "0$row" : $row);
        ?>
        <div class="methode slick-container">
          <div class="padding-inside">
            <hr>
            <p class="number"><?php echo $number;?><span>/<?php echo $rows; ?></span></p>
            <h3 class="titre-methode"><?php the_sub_field('titre_de_la_methode'); ?></h3>
            <div class="paragraphe-methode"><?php the_sub_field('paragraphe_de_la_methode');  ?></div>
            <!-- FICHIER DE TELECHARGEMENT -->
            <?php $file = get_sub_field('document_telechargeable');
            if ($file):?>
              <a class="telechargement" href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>">
                <img class="image-telechargement" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telechargement.svg" alt="téléchargement">
                <p class="nom-fichier"><?php the_sub_field('nom_du_fichier'); ?></p>
              </a>
            <?php endif;?>
          </div>
        </div>
      <?php endwhile;?>
    </div>
   </div>
  <?php else :
  endif;?>
</section>
