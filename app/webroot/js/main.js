var tpj=jQuery;
 tpj.noConflict();

tpj(document).ready(function() {

	/* banner principal */
    if (tpj.fn.cssOriginal!=undefined)
       tpj.fn.css = tpj.fn.cssOriginal;

        tpj('#gallery').revolution(
            {    
                delay:9000,                                                
                startheight:390,                            
                startwidth:840,
                
                hideThumbs:0,
                
                thumbWidth:161,                            
                thumbHeight:137,
                thumbAmount:4,
                
               navigationType:"thumb",               
               navigationArrows:"nexttobullets",      
               // navigationStyle:"round",               
                                            
               navigationHAlign:"center",             
               navigationVAlign:"bottom",                 
               navigationHOffset:0,
               navigationVOffset:20,
                
               soloArrowLeftHalign:"left",
               soloArrowLeftValign:"center",
               soloArrowLeftHOffset:20,
               soloArrowLeftVOffset:0,
                
               soloArrowRightHalign:"right",
               soloArrowRightValign:"center",
               soloArrowRightHOffset:20,
               soloArrowRightVOffset:0,
                touchenabled:"on",                      
                onHoverStop:"on",                        
                
                navOffsetHorizontal:0,
                navOffsetVertical:20,
                
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                hideSliderAtLimit:0,
                
                stopAtSlide:-1,
                stopAfterLoops:-1,
                
                shadow:0,
                fullWidth:"off"    
                                            
            });

	var jQuerycontainer = jQuery('#works');

	jQuerycontainer.isotope({
		animationOptions: {
	     duration: 750,
	     easing: 'linear',
	     queue: false
	   }
	});

	jQuery(".filter-link").click(function(){

		jQuery(this).parent().parent().find('a').removeClass('active');

		jQuery(this).addClass('active');

		jQuery(".filter").slideUp(400);

		var selector = jQuery(this).attr('data-filter');

		var etapa = jQuery('#filter-obras .active').attr('data-filter');

		var etapaActive = jQuery('#filter-obras .active').html();

		var bairro = jQuery('#filter-bairro .active').attr('data-filter');

		var bairroActive = jQuery('#filter-bairro .active').html();	
		
		jQuery('.etapa-active').html(etapaActive);

		jQuery('.bairro-active').html(bairroActive);		

		if(etapa != '*' && bairro != '*'){	

  			jQuerycontainer.isotope({ filter: etapa+''+bairro });

  		}else if(etapa != '*'){

  			jQuerycontainer.isotope({ filter: etapa });

  		}else{

  			jQuerycontainer.isotope({ filter: bairro });

  		}
  		return false
	});

	jQuery(".filter-type-link").click(function(){
		var typeFilter = jQuery(this).attr("type-filter");
		jQuery("#filter-"+typeFilter).slideToggle(400);
		return false;
	});

	/* mapa */

  	if(jQuery('body').find('#map-canvas').html()){initialize();}

});



// gmaps
var infowindow = null;
function initialize() {

    var centerMap = new google.maps.LatLng(-3.095843, -60.047888); /*PONTO CENTRAL*/



    var myOptions = {
        zoom: 16,
        center: centerMap,
        scrollwheel:false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDoubleClickZoom: true,
    streetViewControl: false,
    navigationControl: true,
    navigationControlOptions: {     
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'planb'] 
    }
    }

    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


    setMarkers(map, sites);
    infowindow = new google.maps.InfoWindow({
        content: "loading..."
    });
}
var sites = [

  ['', -3.096219, -60.046892, 4, 
  '<p style="padding:0;text-align:center; color:#cd2a1f; font-size:12px; text-transform: uppercase;">\
  <strong>Hotel Go Inn Cambuí</strong>\
  </p>', 'images/pin/pin.png'],
  
  ['Shopping Ponta Negra', -3.096843, -60.045888, 4, 
  '<p style="padding:17px 0 0 0;text-align:center;">\
  <strong>Shopping Ponta Negra</strong>\
  </p>', 'http://localhost/goinn-cambui/images/pin/camera.png'],
  ['Toscana Festas', -3.095962, -60.052986, 4, 
  '<p style="padding:17px 0 0 0;text-align:center;">\
  <strong>Toscana Festas</strong>\
  </p>', 'http://localhost/goinn-cambui/images/pin/camera.png'],
  
  ['Pizaaria Carluccio', -3.095490, -60.049467, 4, 
  '<p style="padding:17px 0 0 0;text-align:center;">\
  <strong>Pizaaria Carluccio</strong>\
  </p>', 'http://localhost/goinn-cambui/images/pin/camera.png'],
  
  ['Supermercado DB', -3.085601, -60.024829, 4, 
  '<p style="padding:17px 0 0 0;text-align:center;">\
  <strong>Supermercado DB</strong>\
  </p>', 'http://localhost/goinn-cambui/images/pin/camera.png'],
  
  ['Panificadora Conde do P&atilde;o', -3.092125, -60.020308, 4, 
  '<p style="padding:17px 0 0 0;text-align:center;">\
  <strong>Panificadora Conde do P&atilde;o</strong>\
  </p>', 'http://localhost/goinn-cambui/images/pin/camera.png'],
  
    
];
function setMarkers(map, markers) {
    for (var i = 0; i < markers.length; i++) {
        var sites = markers[i];
        var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
        var marker = new google.maps.Marker({
            position: siteLatLng,
            map: map,
            title: sites[0],
            zIndex: sites[3],
            icon: sites[5],
            html: sites[4]
        });

        var contentString = "Some content";

      
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      var marcador = markers[i];  
      var latMarcadorClicado = marcador[1];
      var lonMarcadorClicado = marcador[2];
      var pontoLatLng = new google.maps.LatLng(latMarcadorClicado , lonMarcadorClicado);
      map.panTo(pontoLatLng);
            infowindow.setContent(this.html);
            infowindow.open(map, this);
    }
    })(marker, i));   
    
    }
}
