<!-- scripts concatenated and minified via ant build script-->
<script src="/lib/js/modernizr-2.6.1.min.js"></script>
<script src="/lib/js/conditional.js"></script>
<script src="/lib/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="/lib/js/plugins.js"></script>
<script src="/lib/js/jquery.inview.js"></script>
<script src="/lib/js/retina.js"></script>
<script src="/lib/js/bp-script.js"></script>

<!-- begin jquery.sticky script-->
<script type="text/javascript" src="/lib/js/jquery.sticky.js"></script>
<script>
    $(window).load(function(){
      $("#header_wrapper").sticky({ topSpacing: 0 });
    });
</script>
<!-- end jquery.sticky script-->

<!-- begin scrollTo script-->
<script src="/lib/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript">
(function($){
  $(document).ready(function() {
  /* This code is executed after the DOM has been completely loaded */

    $("#nav li a, a.scrool").click(function(e){

      var full_url = this.href;
      var parts = full_url.split("#");
      var trgt = parts[1];
      var target_offset = $("#"+trgt).offset();
      var target_top = target_offset.top;

      $('html,body').animate({scrollTop:target_top -70}, 1000);
        return false;

    });

  });
})(jQuery);
</script>
<!-- end menu scrollTo script-->

<!-- begin menu color script-->
<script src="/lib/js/jquery.nav.js"></script>
<script>
$(document).ready(function() {
$('#nav').onePageNav({
filter: ':not(.external)',
scrollThreshold: 0.25
});
});
</script>
<!-- end menu color script-->

<!--begin shrink header script -->
<script>
$(function(){
var shrinkHeader = 5;
$(window).scroll(function() {
var scroll = getCurrentScroll();
  if ( scroll >= shrinkHeader ) {
     $('#header_wrapper').addClass('shrink');
  }
  else {
    $('#header_wrapper').removeClass('shrink');
  }
});
function getCurrentScroll() {
return window.pageYOffset;
}
});
</script>
<!--end shrink header script -->

<!--begin fitvids script -->
<script src="/lib/js/jquery.fitvids.js"></script>
<script>
// Basic FitVids Test
$("#container").fitVids();
</script>
<!--end fitvids script -->

<!-- begin owl.carousel script-->
<script src="/lib/js/owl.carousel.js"></script>
<script>
$(document).ready(function($) {
  $(".owl-example").owlCarousel();
});
$("body").data("page", "frontpage");
</script>
<!-- end owl.carousel script-->

<!-- begin bxslider script-->
<script src="/lib/js/jquery.bxslider.min.js"></script>
<script>
$('.bxslider').bxSlider({
auto: true,
pause: 5000,
autoControls: false
});
</script>
<!-- end bxslider script-->

<!-- begin slider script-->
<script src="/lib/js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {

  // Slideshow 4
  $("#slider4, #slider3").responsiveSlides({
  auto: true,
  pager: true,
  nav: true,
  pause: true,
  speed: 500,
  timeout: 5000,
  namespace: "callbacks",
  before: function () {
    $('.events').append("<li>before event fired.</li>");
  },
  after: function () {
    $('.events').append("<li>after event fired.</li>");
  }
  });

});
</script>
<!-- end slider script-->

<!-- begin map script-->
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
<script src="/lib/js/jquery.mapmarker.js"></script>
<script type="text/javascript">
(function($){
$(document).ready(function() {
  var myMarkers = {"markers": [ {"latitude": "51.507207", "longitude": "-0.127223"}
    ]
  };
  $("#g_map_380").mapmarker({
    center: "51.507207,-0.127223",
    zoom: 15,
    controls: false,
    mapType: 'ROADMAP',
    scrollwheel: false,
    draggable: true,
    doubleclickzoom: true,
    customMarkers: true,
    markers: myMarkers,
    styling: 1,
    featureType: "all",
    elementType: "all",
    visibility: "on",
    invert_lightness: false,
    color: "",
    hue: "",
    saturation: -100,
    lightness: 10,
    gamma: 1
  });
});
})(jQuery);
</script>
<!-- end map script-->

<!-- begin background slideshow script-->
<script src="/lib/js/jquery.vegas.js"></script>
<script>
$( function() {
  $.vegas('slideshow', {
    backgrounds:[
      { src:'http://placehold.it/1920x1280', fade:1500 },
      { src:'http://placehold.it/1920x1280', fade:1500 }
    ],
    loading:false
  })
});
</script>
<!-- end background slideshow script-->
