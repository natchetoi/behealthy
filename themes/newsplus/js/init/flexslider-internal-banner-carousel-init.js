jQuery(document).ready(function($) {
  // store the slider in a local variable
  var $window = $(window),
  flexslider;

  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 768) ? 3 : 6;
  }

  $(window).load(function() {
    
    $("#internal-slider-carousel").fadeIn("slow");

    // The slider being synced must be initialized first
    $("#internal-slider-carousel").flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 166,
      itemMargin: 4.8,
      prevText: "",
      nextText: "",
      asNavFor: "#internal-banner-slider",
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize(), // use function to pull in initial value
      start: function(slider){
        flexslider = slider;
      }
    });
  
  });

  // check grid size on resize event
  $window.resize(function() {
    var gridSize = getGridSize();
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });
});