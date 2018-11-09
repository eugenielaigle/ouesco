console.log('qualite');
if($(window).width() > 769){
    $('footer').css('z-index','19');

  (function ($) { // wait for document ready
    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    if($(window).width() < 1800){
        var wipeAnimation = new TimelineMax()

    .fromTo("section.panel-1", 1, {y: "0%"}, {y: "-100%", ease: Linear.easeNone}, "-=1") // différent
    .fromTo("section.panel-2", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-2 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    // .fromTo("section.marge-55", 1, {y: "-55%"}, {y: "-150%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-2", 1, {y: "-55%"}, {y: "-155%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-3", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=0.95") //"-=1.55"
    .fromTo("section.panel-3 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=0.95") //"-=1.55"
}else{
    var wipeAnimation = new TimelineMax()

    .fromTo("section.panel-1", 1, {y: "0%"}, {y: "-100%", ease: Linear.easeNone}, "-=1") // différent
    .fromTo("section.panel-2", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-2 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    // .fromTo("section.marge-55", 1, {y: "-55%"}, {y: "-150%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-2", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-3", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") //"-=1.55"
    .fromTo("section.panel-3 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1") //"-=1.55"

}


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
