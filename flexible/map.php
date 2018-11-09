<section class="panel carte-interactive panel-<?php echo get_row_index();?>" id="map">
  <div class="map">
   <?php $encart_de_droite = get_sub_field('encart_de_droite');
   if( $encart_de_droite ): ?>
    <div class="chapeau-mobile">
     <p class="chapeau"><?php echo $encart_de_droite['chapeau']; ?></p>
     <h3 class="titre"><?php echo $encart_de_droite['titre']; ?></h3>
   </div>
 <?php endif; ?>
 <iframe src="<?php the_sub_field('carte_interactive');?>" frameborder="0" width="100%"></iframe>
 <div class="chapeau-laptop">
   <p>**unité d’évaluation de l’état des eaux.</p>
   <p>* unité géographique naturelle recevant les précipitations qui alimentent un cours d’eau.</p>
 </div>

 <!--     <img src="<?php the_sub_field('carte_interactive');?>" alt="" width="550" height="650"> -->
</div>
<?php
if( $encart_de_droite ): ?>
  <div class="content">
    <div class="chapeau-laptop">
      <p class="chapeau"><?php echo $encart_de_droite['chapeau']; ?></p>
      <h3 class="titre"><?php echo $encart_de_droite['titre']; ?></h3>
    </div>
    <p class="sous-titre"><?php echo $encart_de_droite['sous-titre']; ?></p>
    <div class="paragraphe-haut">
      <?php echo $encart_de_droite['zone_de_texte_1']; ?>

      <!-- FICHIER DE TELECHARGEMENT -->
      <?php $file = $encart_de_droite['document_telechargeable_1'];
      if ($file):?>
        <a class="telechargement" href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>">
          <img class="image-telechargement" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telechargement.svg" alt="téléchargement">
          <p class="nom-fichier">VOIR LA CARTE</p>
        </a>
      <?php endif;?>
    </div>
    <div class="paragraphe-haut">
      <?php echo $encart_de_droite['zone_de_texte_2']; ?>

      <!-- FICHIER DE TELECHARGEMENT -->
      <?php $file = $encart_de_droite['document_telechargeable_2'];
      if ($file):?>
        <a class="telechargement" href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>">
          <img class="image-telechargement" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telechargement.svg" alt="téléchargement">
          <p class="nom-fichier">VOIR LA CARTE</p>
        </a>
      <?php endif;?>
    </div>
    <div class="chapeau-mobile legendes-map">
     <p>**unité d’évaluation de l’état des eaux.</p>
     <p>* unité géographique naturelle recevant les précipitations qui alimentent un cours d’eau.</p>
   </div>
 </div>
<?php endif; ?>


</section>
