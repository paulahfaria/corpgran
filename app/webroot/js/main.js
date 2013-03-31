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
		$(".filter").slideUp(400);
		// $(".filter-link").removeClass("active");
		// $(this).addClass("active");
		var selector = $(this).attr('data-filter');
  		$container.isotope({ filter: selector });
  		return false
	});

	$(".filter-type-link").click(function(){
		var typeFilter = $(this).attr("type-filter");
		$("#filter-"+typeFilter).slideToggle(400);
		return false;
	});

});
