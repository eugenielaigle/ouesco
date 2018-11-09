<section class="panel graphique panel-<?php echo get_row_index();?>" id="graphique">
<div class="padding-graphique">
  <div class="graphique">
    <?php $graphique = get_sub_field('graphique_a_gauche');?>
    <img src="<?php echo $graphique['url']; ?>" alt="<?php echo $graphique['alt']; ?>" />
  </div>

  <div class="droite-du-graphique">
    <?php $encart_graphique = get_sub_field('partie_a_droite_du_graphique');
    if( $encart_graphique ): ?>
      <div class="encart-de-droite">
        <div class="content">
          <p class="chapeau"><?php echo $encart_graphique['chapeau']; ?></p>
          <h3 class="titre-droite"><?php echo $encart_graphique['titre']; ?></h3>
          <h4 class="sous-titre-droite"><?php echo $encart_graphique['sous-titre']; ?></h4>
          <div class="paragraphe-droite">
            <?php echo $encart_graphique['paragraphe-1'];?>
            <?php echo $encart_graphique['paragraphe-2'];?>
          </div>

          <!-- FICHIER DE TELECHARGEMENT -->
          <?php $file = $encart_graphique['document_telechargeable'];
          if ($file):?>
            <a class="telechargement" href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>">
              <img class="image-telechargement" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telechargement.svg" alt="téléchargement" >
              <p class="nom-fichier"><?php echo $encart_graphique['nom_du_fichier']; ?></p>
            </a>
          <?php endif;?>

        </div>
      </div>
    <?php endif; ?>

  </div>
  </div>
</section>
