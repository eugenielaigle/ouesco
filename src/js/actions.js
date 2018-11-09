console.log('actions');

if($(window).width() > 769){
$('.post-236 .panel-2').addClass('marge-55').removeClass('panel-2');

  (function ($) { // wait for document ready
    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    if($(window).width() < 1800){
    var wipeAnimation = new TimelineMax()

    .fromTo("section.panel-1", 1, {y: "0%"}, {y: "-100%", ease: Linear.easeNone}, "-=1") // différent
    .fromTo("section.marge-55", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.marge-55 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.marge-55", 1, {y: "-55%"}, {y: "-160%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-3", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=0.80") //"-=1.55"
    .fromTo("section.panel-3 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=0.80") //"-=1.55"


    .fromTo("section.panel-3", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top "-=1"
    .fromTo("section.panel-4", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-4 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")


    .fromTo("section.panel-4", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone})
    .fromTo("section.panel-5", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") // in from top
    .fromTo("section.panel-5 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")


    .fromTo("section.panel-5", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone})
    .fromTo("section.panel-6", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") // in from top
    .fromTo("section.panel-6 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.panel-6", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-7", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-7 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.panel-7", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-8", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-8 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.panel-8", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-9", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-9 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")
} else{
        var wipeAnimation = new TimelineMax()

    .fromTo("section.panel-1", 1, {y: "0%"}, {y: "-100%", ease: Linear.easeNone}, "-=1") // différent
    .fromTo("section.marge-55", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.marge-55 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.marge-55", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-3", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") //"-=1.55"
    .fromTo("section.panel-3 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1") //"-=1.55"


    .fromTo("section.panel-3", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top "-=1"
    .fromTo("section.panel-4", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-4 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")


    .fromTo("section.panel-4", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone})
    .fromTo("section.panel-5", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") // in from top
    .fromTo("section.panel-5 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")


    .fromTo("section.panel-5", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone})
    .fromTo("section.panel-6", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1") // in from top
    .fromTo("section.panel-6 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.panel-6", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-7", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-7 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.panel-7", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-8", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-8 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")

    .fromTo("section.panel-8", 1, {y: "-100%"}, {y: "-200%", ease: Linear.easeNone}) // in from top
    .fromTo("section.panel-9", 1, {backgroundColor: "black"}, {backgroundColor: "white", ease: Linear.easeNone}, "-=1")
    .fromTo("section.panel-9 img", 1, {opacity: "0"}, {opacity: "1", ease: Linear.easeNone}, "-=1")
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
