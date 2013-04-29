$(document).ready(function(){

	$('.imagemDestaque').change(function(){

		if($(this).val() == 1){

			$(".imagemDestaque").val('0');

			$(this).val('1');

			$(this).next().val('0');

		}

	});

	$('.imagemPrivado').change(function(){

		if($(this).val() == 1){


			$(this).prev().val('0');

		}

	});

});
