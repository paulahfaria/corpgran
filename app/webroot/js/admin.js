$(document).ready(function(){

	$('.imagemDestaque').change(function(){

		if($(this).val() == 1){

			$(".imagemDestaque").val('0');

			$(this).val('1');

		}

	});

});
