$(document).ready(function(){

// Coloca como a primeira página como ativa ao carregar o js

var htmlPaginacao = "<ul class='pagination'><li class='active'><a id='pag1' href='#' onclick='alterarPagina(1)' class='page-link'>1</a></li><li><a href='#' onclick='alterarPagina(2)' id='pag2' class='page-link'>2</a></li></ul>";
$('#fila2 ul').hide();
$('#fila1 ul').show();
	$("#paginacao").html(htmlPaginacao);

	
		// funcao que altera a pagina ao clicar.
		alterarPagina = function(paginaEscolhida) {
			
		if(paginaEscolhida === 1){//Coloca classe "active" na pagina de numero 1
			htmlPaginacao = "<ul class='pagination'><li class='active'><a id='pag1' class='page-link'>1</a></li><li><a id='pag2' href='#' onclick='alterarPagina(2) ' class='page-link'>2</a></li></ul>";
			$('#fila2 ul').hide();
			$('#fila1 ul').show();
			//Carregar os cards da primeira pagina aqui, chamando pelo id da div ou ul e dando um .html com os dados 
			
			
		} else {//Coloca classe"active" na pagina numero 2
		
			htmlPaginacao = "<ul class='pagination'><li><a href='#' id='pag1' onclick='alterarPagina(1)' class='page-link'>1</a></li><li class='active'><a id='pag2' class='page-link'>2</a></li></ul>";	
			
			$('#fila1 ul').hide();
			$('#fila2 ul').show();
			//Carregar os cards da segunda pagina aqui, chamando pelo id da div ou ul e dando um .html com os dados 
			
		}

		$("#paginacao").html(htmlPaginacao);
		
			
	};

	
	
	
});