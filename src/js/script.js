// (function($){
// $("#inlineFrameExample").contents().find("#go_head").hide();
// })(jQuery);

// function openCloseCategorie(){
//   // $( ".categorie-link" ).each(function( index ) {
//   // console.log( index + ": " + $( this ).text() );
//   //  console.log($(this).parent().parent().find('.each-categorie').text());
// // });

// }
$(".each-categorie .sub-categorie").hide();
$(".each-categorie .posts-telechargement").hide();

$(".categories-menu .each-categorie .categorie").click( function () {
  console.log('ça fonctionne');
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).parent().children(".sub-categorie:visible").length != 0) {
          $(this).removeClass('active');
          $(this).parent().children(".sub-categorie").each(function() { $(this).slideUp("normal"); })
          $(this).parent().children('.sub-categorie').removeClass('active-sub');
          $(this).parent().children(".posts-telechargement").each(function() { $(this).slideUp("normal"); })
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
          $(this).addClass('active');
          $(this).parent().children(".sub-categorie").each(function() { $(this).slideUp("normal"); })
          $(this).parent().children('.sub-categorie').removeClass('active-sub');
          $(this).parent().children(".posts-telechargement").each(function() { $(this).slideUp("normal"); })
          $(this).parent().children(".sub-categorie").each(function() { $(this).slideDown("normal"); })
        }
        // On empêche le navigateur de suivre le lien :
        return false;

      });

$(".categories-menu .each-categorie .sub-categorie").click( function () {
  console.log('ça fonctionne aussi');
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next(".posts-telechargement:visible").length != 0) {
          $(this).removeClass('active-sub');
          $(this).next(".posts-telechargement").each(function() { $(this).slideUp("normal"); })
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
          $(this).addClass('active-sub');
          $(this).next(".posts-telechargement").each(function() { $(this).slideUp("normal"); })
          $(this).next(".posts-telechargement").each(function() { $(this).slideDown("normal"); })
        }
        // On empêche le navigateur de suivre le lien :
        return false;

      });
