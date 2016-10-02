jQuery(document).ready(function($) {
  $(window).load(function() {

    $("#slideshow .flexslider").fadeIn("slow");
    $("#slideshow .flexslider").flexslider({
      animation: drupalSettings.newsplus.flexsliderMainInit.slideshowEffect,           // Select your animation type, "fade" or "slide"
      slideshowSpeed: drupalSettings.newsplus.flexsliderMainInit.slideshowEffectTime, // Set the speed of the slideshow cycling, in milliseconds
      prevText: "",
      nextText: "",
      pauseOnAction: false,
      useCSS: false
    });

  });
});