(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
  $('select').formSelect();
});
$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true,
});
autoplay();
function autoplay() {
    $('.carousel.carousel-slider').carousel('next');
    setTimeout(autoplay, 4500);
}

  