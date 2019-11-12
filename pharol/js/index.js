$(document).ready(function(){
	var htmlPaginacao ="<ul><li class='active'><a class='page-link'>1</a></li><li id='pag2' class=''><a class='page-link'>2</a></li></ul>";
$('#fila2 ul').hide();
$('#fila1 ul').show();
$("#pag").html(htmlPaginacao);



$("#pag").on('click', function(){ 

htmlPaginacao ="<ul><li class=''><a class='page-link'>1</a></li><li id='pag2' class='active'><a class='page-link'>2</a></li></ul>";
$('#fila1 ul').hide();
$('#fila2 ul').show();
$("#pag2").html(htmlPaginacao);

}



$(function(){
  $("#pesquisa").keyup(function(){
    var texto = $(this).val();
    

    $("#fila1 ul").each(function(){
      var resultado = $(this).text().toUpperCase().indexOf(''+texto.toUpperCase());
	  
	  
      if(resultado < 0) {
        $(this).fadeOut();
      } else {
        $(this).fadeIn();
      }
    }); 
	

  });

});
});