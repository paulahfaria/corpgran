$(document).ready(function(){

	var $container = $('#works');

	$container.isotope({
		animationOptions: {
	     duration: 750,
	     easing: 'linear',
	     queue: false
	   }
	});

	$(".filter-link").click(function(){

		$(this).parent().parent().find('a').removeClass('active');

		$(this).addClass('active');

		$(".filter").slideUp(400);

		var selector = $(this).attr('data-filter');

		var etapa = $('#filter-obras .active').attr('data-filter');

		var etapaActive = $('#filter-obras .active').html();

		var bairro = $('#filter-bairro .active').attr('data-filter');

		var bairroActive = $('#filter-bairro .active').html();	
		
		$('.etapa-active').html(etapaActive);

		$('.bairro-active').html(bairroActive);		

		if(etapa != '*' && bairro != '*'){	

  			$container.isotope({ filter: etapa+''+bairro });

  		}else if(etapa != '*'){

  			$container.isotope({ filter: etapa });

  		}else{

  			$container.isotope({ filter: bairro });

  		}
  		return false
	});

	$(".filter-type-link").click(function(){
		var typeFilter = $(this).attr("type-filter");
		$("#filter-"+typeFilter).slideToggle(400);
		return false;
	});

});
