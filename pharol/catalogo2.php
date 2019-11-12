<html>


<head>

<title>Catálogo</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script>
$(function(){ 

  $("#pesquisa").keyup(function(){
    var texto = $(this).val();
    

    $("#fila1 ul").each(function(){
      var resultado = $(this).text().toUpperCase().indexOf(' '+texto.toUpperCase());
	  
	  
      if(resultado < 0) {
        $(this).fadeOut();
      }else {
        $(this).fadeIn();
      }
    }); 
	

  });

});


$(document).ready(function(){
            
    		

    		$(".page-link").on('click', function(){
                
    			$(".page-link").each(function(index, value){
    				$(value).parent().removeClass("active");
    			});

    			//Hide all cards
	    		$(".page-link").each(function(index, value){
	    			$('#fila1 ul').hide();
	    		})
  
    			$(this).parent().addClass("active");
    			var cardId = "#" + $(this).text();
    			$('#fila2 ul').show();
    		});
			
			
    	});
</script>
</head>

<style>
#nav {
       padding:10px;
       /*float:left;*/
       width:100%;
	   height:10%;
       background-color:#EDEDED;
}

#nav ul {
padding:350;
list-style:none;
overflow:auto;
width:900px;
margin-top:25;
}


#nav form{
margin-top:25;
}

hr{
  border-color:#aaa;
  box-sizing:border-box;
  width:100%;  
}

.card-img-top {
margin-right: 20px;
}


.card-columns {
  @include media-breakpoint-only(lg) {
    column-count: 6;
  }
  }

#fila1 ul {
list-style:none;
padding-right:0px;
padding-left:0px;
}

#fila1 img{
margin-top:10px;
}

.pagination > li > a
{
    background-color: white;
    color: #000000;
	border-color: #000000;
}

.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover
{
    color: #000000;
    background-color: #white;
    border-color: #000000;
}

.pagination > .active > a
{
    color: white;
    background-color: #000000;
    border: solid 1px #000000;
}

.pagination > .active > a:hover
{
    background-color: #000000;
    border: solid 1px #000000;
	color: white;
}



</style>


<body>


<br>
<br>
<br>
<center>
<div class="card-columns" id="fila1" style="width: 40rem;">

  <ul class="card border-dark" id="1">
	<li class="card-header">
	<b class="id">I006</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-branca.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Branca</b>
	</li>
	<li class="card-body"><h5>R$20,00</h5>
	</li>
	</ul>
  
  
   <ul class="card border-dark" id="2">
	<li class="card-header">
	<b class="id">I005</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-cinza.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Cinza</b>
	</li>
	<li class="card-body"><h5>R$35,00</h5>
	</li>
	</ul>
  
  <ul class="card border-dark" id="3">
	<li class="card-header">
	<b class="id">I004</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-preta.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Preta</b>
	</li>
	<li class="card-body"><h5>R$30,00</h5>
	</li>
	</ul>
  


<br>

<center>


  <ul class="card border-dark" id="4">
	<li class="card-header">
	<b class="id">I003</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-branca.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Branca</b>
	</li>
	<li class="card-body"><h5>R$20,00</h5>
	</li>
	</ul>
  
  <ul class="card border-dark" id="5">
	<li class="card-header">
	<b class="id">I002</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-cinza.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Cinza</b>
	</li>
	<li class="card-body"><h5>R$35,00</h5>
	</li>
	</ul>
  
  <ul class="card border-dark" id="6">
	<li class="card-header">
	<b class="id">I001</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-preta.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Preta</b>
	</li>
	<li class="card-body"><h5>R$30,00</h5>
	</li>
	</ul>
  
</div>

<div class="card-columns" id="fila2" style="width: 40rem;">

<ul class="card border-dark" id="7">
	<li class="card-header">
	<b class="id">I007</b>
	</li>
   <img class="card-img-top card border-secondary" src="img/camiseta-vermelha.jpg" alt="Imagem de capa do card" style="width:100%">
    <li class="card-body"><b>Camiseta Vermelha</b>
	</li>
	<li class="card-body"><h5>R$50,00</h5>
	</li>
	</ul>

</div>

<div class="pagination justify-content-center">
<ul class="pagination">
<li class="active"><a class="page-link"  >1</a></li>
  <li class=""><a class="page-link"   >2</a></li>
</ul>
</div>

</body>
<hr/>
<br>
<br>
<br>

<center>
<h1>FAÇA SEU ORÇAMENTO!</h1>
<br>
<table class="rodape" >
<tr>
<td><img src="img/zap.png" width="35" height="35" ></td>
<td><H3>(XX)XXXXX-XXXX</H3></td>
</tr>
</table>
<table class="rodape2" >
<tr>
<td><img src="img/insta.png" width="40" height="40" ></td>
<td><H3>@pharolcompany</H3></td>
</tr>
</table>
<br>
Pharol - 2019
</center>
<br>
<br>
<br>
<hr/>

</html>