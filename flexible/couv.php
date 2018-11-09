<?php $image_de_couverture = get_sub_field('image_de_couverture');
if( $image_de_couverture ): ?>

  <section class="panel couv panel-<?php echo get_row_index();?>" id="image-de-couverture">

    <img class="img-couv" src="<?php echo $image_de_couverture['image_couverture']['url']; ?>" alt="<?php echo $image_de_couverture['image_couverture']['alt']; ?>" />
    <?php $logo = $image_de_couverture['logo'];
    if ($logo): ?>
      <a class="logo-link" href="<?php bloginfo('url'); ?>">
        <div class="logo">
        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
      </div>
      </a>
    <?php endif;?>
    <div class="content">
      <hr>
      <h3 class="titre-couv"><?php the_sub_field('titre_couverture'); ?></h3>
      <p class="sous-titre-couv"><?php the_sub_field('sous-titre_couverture'); ?></p>
    </div>
  </section> <!-- end image de couverture -->

<?php endif; ?>
