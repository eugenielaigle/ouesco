<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ouesco
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!--  <div id="pinContainer"> -->

    <div class="entry-content">
 <?php
   if( have_rows('documents_telechargeables') ):
    while ( have_rows('documents_telechargeables') ) : the_row();
      $file = get_sub_field('document_telechargeable');?>
      <a href="<?php echo $file['url']; ?>" download="<?php echo $file['filename']; ?>"><?php the_sub_field('nom_du_document'); ?></a>
    <?php  endwhile;
    endif;?>

  </div><!-- .entry-content -->

  <!-- </div> -->

</article><!-- #post-<?php the_ID(); ?> -->

