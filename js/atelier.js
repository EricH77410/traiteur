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
  $('.slider').bxSlider();

  // Adapt Map heigth size
  var gglMap = $('#map');
  if (gglMap.length>0){
    if($(document).width() >= breakpoint){
      displayMap(0);
    } else {
      displayMap(300);
    }
  }
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


jQuery('.menu-toggle').on('click', function(){
	console.log('hbg has been clicked');
	var $menu = jQuery('#menu-mobile');
	if ($menu.hasClass('m-visible')){
		jQuery('#menu-mobile').removeClass('m-visible');
	} else {
		jQuery('#menu-mobile').addClass('m-visible');
	}
	
})