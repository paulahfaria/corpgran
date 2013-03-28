window.baseUrl = $("#baseUrl").val();

$(document).ready(function(){

    var strDataInicio = $("#data_inicio").val();

    var strDataAtual = $("#data_atual").val();

    var dataAtual= new Date(strDataAtual);

    var dataInicio = new Date(strDataInicio);

    var dataFim = new Date(strDataInicio);

    dataFim.setHours(dataFim.getHours()+5);

    var dataAtualMili = dataAtual.getTime();

    var dataFimMili = dataFim.getTime();

    window.timeFinal = dataFimMili - dataInicio;

    window.timeProva =  dataAtualMili - dataInicio;

    setInterval(showTime, 1000);

    abrirQuestao();

    $('.dateFormat').mask("99/99/9999");

    $('.telFormat').mask("(99) 9999-9999?9");


});


function showTime(){

    var miliseconds = window.timeProva;
 

    var hours =  Math.floor(miliseconds / (1000*60*60));
    var minutes = Math.floor((miliseconds % (1000*60*60)) / (1000*60));
    var seconds = Math.floor(((miliseconds % (1000*60*60)) % (1000*60)) / 1000);

     $(".tempo").html(pad(hours,2,0)+":"+pad(minutes,2,0)+":"+pad(seconds,2,0));

     window.timeProva += 1000;

     if(window.timeProva > window.timeFinal)

       console.log("tempo esgotado");


}


function novoSimulado(prova_id){

    $.post(window.baseUrl +"/simulados/create/"+prova_id, function(data){

      window.location = window.baseUrl+"simulados/index/"+data;

    });

    return false;

}

function abrirQuestao(){

      $("#questao").hide();

      var prova_id = $("#prova_id").val();

      var etapa_id = $("#etapa_id").val();

      var materia_id = $("#materia_id").val();

      $("#questao").load( baseUrl + "/questoes/exibir/"+prova_id+"/"+etapa_id+"/"+materia_id, function(){

            $("#questao").fadeIn(1000);


       });

      return false;

}

function selecionaAlternativa(alternativa){

    $('.alternativa').removeClass('selected');

    $('.alternativa_'+alternativa).addClass('selected');

}

function responder(questao_id){

    var etapa = $("#etapa_id").val();

    var alternativa = $(".alternativa.selected").attr('rel');

    var simulado = $("#simulado_id").val();

    if($(".alternativa.selected").size() == 0){

      alert("Selecione uma resposta");

      return false;

    }

     $.post(baseUrl +"/respostas/save/"+etapa+"/"+questao_id, { alternativa: alternativa} , function(data){

          if(data == "fim")
            
              window.location = baseUrl+"simulados/index/"+simulado;

          if(data == "proximo")

              abrirQuestao();       

     });

}

function pad (n, len, padding){
   var sign = '', s = n;
 
   if (typeof n === 'number'){
      sign = n < 0 ? '-' : '';
      s = Math.abs (n).toString ();
   }
 
   if ((len -= s.length) > 0){
      s = Array (len + 1).join (padding || '0') + s;
   }
   return sign + s;
}

