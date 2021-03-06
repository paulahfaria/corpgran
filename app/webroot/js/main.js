
var tpj=jQuery;
 tpj.noConflict();

tpj(document).ready(function() {

  jQuery('.barra-item').hover(function(){
    jQuery(this).children('p').fadeIn(500);
    jQuery(this).addClass('active');
  }, function(){
    jQuery(this).children('p').fadeOut(500);
    jQuery(this).removeClass('active');
  });

  setTimeout(function() {
    jQuery('.colorbox-image a').colorbox();
}, 5000);
  /* banner principal */
    if (tpj.fn.cssOriginal!=undefined)
       tpj.fn.css = tpj.fn.cssOriginal;

     tpj('.banner').revolution(
            {    
                delay:9000,                                                
                startheight:327,                            
                startwidth:960,
                
                hideThumbs:0,
                
                thumbWidth:137,                            
                thumbHeight:64,
                thumbAmount:7,
                
               navigationType:"bullet",               
               navigationArrows:"none",      
               navigationStyle:"round",               
                                            
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
                fullWidth:"on"    
                                            
            });

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
  
jQuery(window).scroll(function () {
  var scrollTop = jQuery(window).scrollTop();
    if(scrollTop > 154){  
      jQuery('.main-nav').addClass('fixed');

    } else {
      jQuery('.main-nav').removeClass('fixed');
  
    };
  });


    jQuery('.login').click(function(){
      jQuery('.login-restrita').slideToggle(600);
      return flase;
    });

    jQuery("#acompanhe-empreendimento").click(function(){
      jQuery('.login-restrita').slideToggle(600);
      jQuery("body, html").animate({
        scrollTop: 0
      });
      return false
    });
  var jQuerycontainer = jQuery('#works');

    window.container = jQuery('#works');

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

        window.container.isotope({ filter: '.'+etapa+'.'+bairro });

      }else if(etapa != '*'){

        window.container.isotope({ filter: '.'+etapa });

      }else if(bairro != '*'){

        window.container.isotope({ filter: '.'+bairro });

      }else{

        window.container.isotope({ filter: '*'});

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


    jQuery('.link-investimento').click(function(){
      var linkInvestimento = jQuery(this).attr('content');
      jQuery(this).next().slideToggle();
      //jQuery('.content-'+linkInvestimento).slideToggle();
      return false;
    });

    jQuery('.barra').each(function(){
      var progress = jQuery(this).attr('data-progress');
      jQuery(this).css('width',progress+'%');
    });
    jQuery('.valor-progresso').each(function(){
      var paddingProgress = jQuery(this).attr('data-progress');
      jQuery(this).css('padding-left',(paddingProgress-20)+'%');
    });
});


function filtrarEmpreendimentos(){

    var urlBase = jQuery('#urlBase').val();

    var etapa = jQuery('#filter-obras .active').attr('data-filter');

    var bairro = jQuery('#filter-bairro .active').attr('data-filter');

    var filtro = "";

    if(etapa != '*'){  

        filtro += "/Etapa:" + etapa;

      }
      if(bairro != '*'){

        filtro += '/Bairro:'+bairro;

      }

      window.location = urlBase+"empreendimentos/index"+filtro;



}

function buscaEmpreendimentos(){

  var urlBase = jQuery('#urlBase').val();

  var palavra = retira_acentos(jQuery('.search-input').val());

  window.location = urlBase+"empreendimentos/index/Busca:"+palavra;

  return false;

}
function enviaContato(){

  var urlBase = jQuery('#urlBase').val();

  var email = jQuery('#emailContato').val();

  if(!validateEmail(email)){

      jQuery('#emailContato').val('E-mail inválido');  

      return false;
  }

  jQuery.post(urlBase+'/usuarios/salvar_contato', { email:email }, function(resposta){

      if(resposta == 'success'){

        jQuery('#emailContato').val('Enviado').addClass('success');

      }else{

        jQuery('#emailContato').val('Erro');

      }


  });

}

function validateEmail(email) {
 
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

   return reg.test(email);

}

function retira_acentos(palavra) {
  com_acento = 'áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ';
  sem_acento = 'aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC';
  nova='';
  for(i=0;i<palavra.length;i++) {
    if (com_acento.search(palavra.substr(i,1))>=0) {
      nova+=sem_acento.substr(com_acento.search(palavra.substr(i,1)),1);
    } else {
      nova+=palavra.substr(i,1);
    }
  }
  return nova.toLowerCase();
}