<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ouesco
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">


    <div id="pinContainer">
      <section class="panel couv panel-couv" id="image-de-couverture">

        <img class="img-couv" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/Nomades-Ouesco-Agriculture-2.jpg" alt="image documentation" />
        <div class="logo">
          <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/logo-blanc.png" alt="ouesco">
        </div>
        <div class="content">
          <hr>
          <h3 class="titre-couv">Documentation</h3>
          <p class="sous-titre-couv">Télécharger tous nos documents en pdf</p>
        </div>
      </section> <!-- end image de couverture -->




      <section class="panel panel-categorie" id="menu-categories">
        <div id="chapeau" style="margin-top: 20vh; margin-bottom: 30px;">
          <h4 class="chapeau">Menu</h4>
        </div>
        <?php      $taxonomies = get_terms( array(
          'taxonomy' => 'categories_documentation',
          'hide_empty' => false
        ) );

        if ( !empty($taxonomies) ) :
          $output = '<div class="categories-menu" >';
          foreach( $taxonomies as $category ) {
            if( $category->parent == 0 ) {
              $output.= '<div class="each-categorie">';
              $output.= '<h2 class="categorie"><span> ↳ </span><a class="categorie-link">'. esc_attr( $category->name ) . '</a></h2>';
              foreach( $taxonomies as $subcategory ) {
                if($subcategory->parent == $category->term_id) {
                  $output.= '<h3 class="sub-categorie"><span> → </span><a class="subcategorie-link">'. esc_html( $subcategory->name ) .'</a></h3>';

                  $args = array(
                    'post_type' => 'documentsofficiels',
                    'categories_documentation' => $subcategory->slug,
                    'hide_empty' => 1
                  );
                  $query = new WP_Query( $args );
                  $output.= '<div class="posts-telechargement">';
                  while ( $query->have_posts() ) : $query->the_post();

                    $output.= '<div class="doc-a-telecharger">';
                    if( have_rows('documents_telechargeables') ):
                      while ( have_rows('documents_telechargeables') ) : the_row();
                        $file = get_sub_field('document_telechargeable');
                        $name = get_sub_field('nom_du_document');
                        $output.= '<a href="' . $file['url'] . '" download="'. $file['filename'] .'">' . $name .'</a>';
                      endwhile;
                    endif;

                    $output.='</div><!-- .entry-content -->';


                  endwhile;
                  $output.= '</div>';
                }



              }
              $output.= '</div>';
            }
          }
          $output.='</div>';
          echo $output;
        endif;?>

      </section>

      <section class="panel panoramique panel-pano" id="panoramique">
        <div class="image-pano">
          <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/Nomades-Ouesco-Lac plage-50.jpg" alt="image documentation" />
        </div>
      </section> <!-- end image de couverture -->


    </div>

    <?php
    /* if ( have_posts() ) :
    /* Start the Loop */
     /* while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.

        get_template_part( 'template-parts/documentsofficiels', get_post_type() );

      endwhile;

      the_posts_navigation();

    else :

      // get_template_part( 'template-parts/content', 'none' );

  endif;*/
  ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
