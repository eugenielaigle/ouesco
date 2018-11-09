<section class="panel article-image panel-<?php echo get_row_index();?>" id="article-avec-image">
  <div class="complet">
  <div  id="chapeau">
    <h4 class="chapeau"><?php the_sub_field('sous-titre'); ?></h4>
    <h3 class="titre-chapeau titre-chapeau-article-image"><?php the_sub_field('titre');?></h3>
  </div>
  <?php $gros_titre = get_sub_field('gros_titre_de_categorie');
  if($gros_titre): ?>
  <div class="gros-titre">
    <h2><?php echo $gros_titre;?></h2>
  </div>
<?php endif; ?>
  <div class="content-article-image">
    <?php
    if( have_rows('articles') ):
      echo '<div class="slider-for">';
      while ( have_rows('articles') ) : the_row();?>
        <div class="article-image slick-container">
          <div class="padding-inside">
            <div class="content-article">
            <h3 class="title"><?php the_sub_field('titre_de_larticle');?></h3>
            <hr>
            <div class="paragraphe-article">
              <?php the_sub_field('paragraphe_de_larticle');?>
            </div>
            </div>
            <div class="image-de-larticle">
              <?php $image = get_sub_field('image_de_larticle');?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
          </div>
        </div>
      <?php endwhile;

      echo '</div>';
    else :
    endif;?>
  </div>
</div>
</section>
