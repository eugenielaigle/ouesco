console.log('doc');

if($(window).width() > 769){
$('footer .site-menu').css('display','none');
$('footer .note2018').css('display','none');


  (function ($) { // wait for document ready
    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimation = new TimelineMax()
    .fromTo("section.panel-couv", 1, {y: "0%"}, {y: "-100%", ease: Linear.easeNone})
    .fromTo("section.panel-categorie", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") // in from top

    .fromTo("section.panel-categorie", 1, {y: "-100%", height: '100vh'}, {y: "-200%", height: '100vh', ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-pano", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") // in from top
    .fromTo("section.panel-pano img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1"); //"-=1.55"


    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinContainer",
      triggerHook: "onLeave",
      duration: "300%"
    })
    .setPin("#pinContainer")
    .setTween(wipeAnimation)
      .addTo(controller);
    })(jQuery);
}
