if($(window).width() < 769){

jQuery(document).ready(function($){
   $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   dots: true,
   arrows: true,
   // asNavFor: '.slider-for',
   focusOnSelect: true,
   fade: false,
   autoplay: false,
  });
  // $('.slider-nav').slick({
  //   slidesToShow: 2,
  //   slidesToScroll: 1,
  //   asNavFor: '.slider-for',
  //   dots: true,
  //   centerMode: true,
  //   focusOnSelect: true,
  //   arrows: true,
  //   autoplay: false
  // });
});
}
