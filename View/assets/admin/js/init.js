(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.modal').modal();
    $('select').formSelect();
    $('.dropdown-trigger').dropdown();



  }); // end of document ready
})(jQuery); // end of jQuery name space


$(document).ready(function() {
  var table = new DataTable('#myTable', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json',
    },
  });
  $('#myTable').DataTable();

});apagaruser

function apagar(id) {
  if (window.confirm('Deseja apagar este Veiculo?')) {
      window.location.href = '/admin/veiculos/excluir?id=' + id
  } else {
      window.alert('Ok, nenhuma ação foi feita!')
  }
}

function apagaruser(id) {
  if (window.confirm('Deseja apagar este Veiculo?')) {
      window.location.href = '/admin/usuarios/excluir?id=' + id
  } else {
      window.alert('Ok, nenhuma ação foi feita!')
  }
}

$('#logout').click(function(){
  document.cookie = "expires=Thu, 01 Jan 1970 00:00:00 UTC";
  location.href = "/admin/login";
});


$(function(){
  $('#Valor_Entrada').maskMoney({
    prefix:'',
    allowNegative: true,
    thousands:'.', decimal:',',
    affixesStay: true});
    $('#Valor_Venda').maskMoney({
      prefix:'',
      allowNegative: true,
      thousands:'.', decimal:',',
      affixesStay: true});
      $("#cpf").mask("999.999.999-99");
})



