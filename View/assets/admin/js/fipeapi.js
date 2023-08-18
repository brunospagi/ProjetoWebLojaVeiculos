$(document).ready(function() {
    var urlBase = "https://fipe.parallelum.com.br/api/v1/carros/marcas";

    /** Marcas**/

    $.getJSON(urlBase, function(data) {
      var items = ["<option value=\"\">MARCA</option>"];
      $.each(data, function(key, val) {
        items += ("<option value='" + val.codigo + "'>" + val.nome + "</option>");
      });
      $("#marcas").html(items);
    });

    /** Veiculo**/

    $("#marcas").change(function() {
      $.getJSON(urlBase + "/" + jQuery("#marcas").val() + "/" + "modelos", function(data) {
        var items = ["<option value=\"\">MODELOS</option>"];
        $.each(data.modelos, function(key, val) {
          items += ("<option value='" + val.codigo + "'>" + val.nome + "</option>");
        });
        $("#modelos").html(items);
      });
    });

    /** Ano**/

    $("#modelos").change(function() {
      $.getJSON(urlBase + "/" + jQuery("#marcas").val() + "/" + "modelos" + "/" + jQuery("#modelos").val() + "/" + "anos", function(data) {
        var items = ["<option value=\"\">ANO MODELO</option>"];
        $.each(data, function(key, val) {
          console.log(data)
          items += ("<option value='" + val.nome + "'>" + val.nome + "</option>");
        });
        $("#ano").html(items);
      });
    });
  });