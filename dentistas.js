$(function () {
  $("#cidadeDentista_a").change(function () {
    atualizaBairros();
  });

  function atualizaBairros() {
    console.log("Executou")
    var Cod_cidade = 2;

    // $('#cidadeDentista_a').change(function () {
    //   Cod_cidade = ($(this).val());
    //   console.log("Cod_Cidade teste 1: " + Cod_cidade);
    // });
    $.ajax({
      type: "GET",
      url: "buscaBairro.php",
      // data: { lnk: 'bar', tp: $('#cidadeDentista_a').val() },
      //O PARAMETRO PASSADO PARA O PHP
      data: {
        data: Cod_cidade
      },
      success: function (data) {

        console.log("Executou succes")
        // // $('#bairroDentista_a').html('');
        // // $('#bairroDentista_a').removeAttr("disabled");
        // $('#cidadeDentista_a').change(function () {
        //   var Cod_cidade = ($(this).val());
        //   console.log(Cod_cidade);
        // });
        // $('#bairroDentista_a').append(new Option('Selecione...', '', false, true));
        //$('#bairroDentista_a').append(data);
      }
    });
  }
});





  // function atualizaCidades() {
  //   let codEstado=1;
  //   $.ajax({
  //       type: "GET",
  //       url:  `https://sio-teste.fswise.com.br/Crown/api/dentistas/cidades/${codEstado}`,
  //       dataType: 'json',

  //       success: function(cidades) {

  //       $('#cidadeDentista_a').prop("disabled",false);
  //       $('#cidadeDentista_a').append(new Option('Selecione...', '', false, true));
  //       $('#cidadeDentista_a').append(data);
  //     }
  //   });
  // }
    // function buscaDentistas() {
    //   $.ajax({
    //       type: "POST",
    //       url: "../buscas.php",
    //       data: {
    //         lnk:'den',
    //         n:$('#nomeDentista_a').val(),
    //         e:$('#estadoDentista_a').val(),
    //         c:$('#cidadeDentista_a').val(),
    //         b:$('#bairroDentista_a').val(),
    //         p:$('#especialidadeDentista_a').val()
    //       },
    //       success: function(data) {
    //       $('#resultadoDentista_a').html('');
    //       $('#resultadoDentista_a').show();
    //       $('#resultadoDentista_a').append(data);
    //     }
    //   });
    // }
  // $("[data-widget='collapse']").click(function() {
  //   var box = $(this).parents(".box").first();
  //   var bf = box.find(".box-body, .box-footer");
  //   if (!box.hasClass("collapsed-box")) {
  //     box.addClass("collapsed-box");
  //     bf.slideUp();
  //   } else {
  //     box.removeClass("collapsed-box");
  //     bf.slideDown();
  //   }
  // });
