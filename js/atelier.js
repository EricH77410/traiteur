$ = jQuery.noConflict();

var map;
function initMap(){
  var latLng = {
    lat: parseFloat(options.latitude),
    lng: parseFloat(options.longitude)
  }
  map = new google.maps.Map(document.getElementById('map'),{
    center: latLng,
    zoom: parseInt(options.zoom)
  });

  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    title: "L'Atelier"
  })
}

var breakpoint = 768;

$(document).ready(function(){
  
  // bxSlider sur le menu du jour
  $('.slider').bxSlider({
    auto: true,
    mode: 'fade',
    responsive: true,
    speed: 1000,
    slideWidth: 600
  });

  // Adapt Map heigth size
  var gglMap = $('#map');
  if (gglMap.length>0){
    if($(document).width() >= breakpoint){
      displayMap(0);
    } else {
      displayMap(300);
    }
  }

  // Sticky Header
  // -------------
  $(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
  });

  // Mobile Navigation
  $('.rico_mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
  });

  $('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
  });

  // navigation scroll lijepo radi materem
  $('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
  });
  // End Sticky Header
  // -------------
});

function displayMap(val){
  if(val===0){
    var locationSection = $('.location-reservation');
    var locationHeight = locationSection.height();
    $('#map').css({'height':locationHeight});
  } else {
    $('#map').css({'height':val});
  }
}


//jQuery('.menu-toggle').on('click', function(){
//	console.log('hbg has been clicked');
//	var $menu = jQuery('#menu-mobile');
//	if ($menu.hasClass('m-visible')){
//		jQuery('#menu-mobile').removeClass('m-visible');
//	} else {
//		jQuery('#menu-mobile').addClass('m-visible');
//	}
//	
//})