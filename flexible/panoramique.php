<section class="panel panoramique panel-<?php echo get_row_index();?>" id="panoramique">
  <div id="image-de-couverture">
    <?php $panoramique = get_sub_field('panoramique');?>
    <img src="<?php echo $panoramique['url']; ?>" alt="<?php echo $panoramique['alt']; ?>" />

    <?php $text_image = get_sub_field('texte_sur_limage');
    if( $text_image ): ?>
      <div class="content">
        <p class="chapeau"><?php echo $text_image['chapeau']; ?></p>
        <h3 class="titre-sur-image"><?php echo $text_image['titre']; ?></h3>
        <p class="paragraphe-sur-image"><?php echo $text_image['paragraphe']; ?></p>
      </div>
    <?php endif; ?>

  </div> <!-- end image de couverture -->
</section>
