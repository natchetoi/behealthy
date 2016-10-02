jQuery(document).ready(function($) {
  // store the slider in a local variable
  var $window = $(window);

  $(window).load(function() {

    $("#internal-banner-slider").fadeIn("slow");

    $("#internal-banner-slider").flexslider({
      useCSS: false,
      animation: drupalSettings.newsplus.flexsliderInternalBannerSliderInit.internalBannerEffect,
      controlNav: false,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#internal-slider-carousel"
    });
  
  });

});