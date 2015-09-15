$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
    $('.link-up').fadeIn();
  }
  else {
    $('.link-up').fadeOut();
  }
});

$(document).ready(function() {
  
  $('.block-slideshow').carousel({
    interval: 3000
  });
  
  $('.link-up').click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    },
    1200);
    return false;
  });
 
  $("#owl-product-carousel").owlCarousel({
    items : 3,
    lazyLoad : true,
    navigation : true
  });
  /*
  $('.block-slideshow .carousel-inner').hover(
    function () {
      $(this).find(".slide-text").fadeIn(600);
    },
    function () {
      $(this).find(".slide-text").fadeOut(600);
    }
  );
  */
});
