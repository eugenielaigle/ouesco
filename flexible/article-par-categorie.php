<section class="panel article-categorie panel-<?php echo get_row_index();?>" id="article-par-categorie">
  <div  id="chapeau">
    <h4 class="chapeau"><?php the_sub_field('sous-titre'); ?></h4>
    <h3 class="titre-chapeau"><?php the_sub_field('titre');?></h3>
  </div>
  <div class="content-article-categorie">
    <?php
    if( have_rows('article_par_categorie') ):
      echo '<div class="slider-for">';
      while ( have_rows('article_par_categorie') ) : the_row();?>
        <div class="methode slick-container">
          <div class="padding-inside">
            <hr>
            <p class="number"><?php the_sub_field('titre_de_la_categorie');?></p>
            <h3 class="titre-methode"><?php the_sub_field('sous-titre'); ?></h3>
            <div class="paragraphe-methode">
              <p><?php the_sub_field('paragraphe_en_gras');?></p>
              <p><?php the_sub_field('paragraphe');  ?></p>
              <div class="margin-telechargement">
              <?php if( have_rows('telechargement') ):
                while ( have_rows('telechargement') ) : the_row();?>
                 <!-- FICHIER DE TELECHARGEMENT -->
                 <?php $file = get_sub_field('document_telechargeable');
                 if ($file):?>
                  <a class="telechargement" href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>">
                    <img class="image-telechargement" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/telechargement.svg" alt="téléchargement" >
                    <p class="nom-fichier"><?php the_sub_field('nom_du_fichier'); ?></p>
                  </a>
                <?php endif;?>

              <?php endwhile;

            else :
            endif;?>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile;

  else :
  endif;?>
</div>
</section>
