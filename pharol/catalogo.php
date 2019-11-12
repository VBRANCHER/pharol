<html>


	<head>

		<title>Catálogo</title>
		 <link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/jpeg" href="img/pharolIco.jpeg">
		<link rel="stylesheet" href="css/catalogo.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		


		
		<script src="js/catalogo.js"></script>
		
		 <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>


	<style>
	
@media screen and (min-width: 1000px){
#nav {
    background-color:#EDEDED; 
}

.navbar-nav ul li { 
	padding: auto;
} 

.navbar-nav {
 align-items: center;
  justify-content: center;
}

.container{
	display: flex;
	margin: 0 auto;
}

.pharol{
position: absolute;
    top: 8px;
    left: 8px;
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
	width: 35rem;
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

#fila2 ul {
list-style:none;
padding-right:0px;
padding-left:0px;
}

#fila2 img{
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

a.insta:link 
{ 
text-decoration:none; 
color: #000000;
} 

a.face:link 
{ 
text-decoration:none; 
color: #000000;
} 

}

@media screen and (max-width: 1000px){
	
	hr{
  border-color:#aaa;
  box-sizing:border-box;
  width:100%;  
}

.card-img-top {
}


.card-columns {
	align-items:left;
	 width: 100%;
	  margin-left: auto;
  margin-right: auto;
  @include media-breakpoint-only(sm) {
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

#fila2 ul {
list-style:none;
padding-right:0px;
padding-left:0px;
}

#fila2 img{
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

a.insta:link 
{ 
text-decoration:none; 
color: #000000;
} 

a.face:link 
{ 
text-decoration:none; 
color: #000000;
} 

	
}
	</style>


	<body>
	
<center>
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top" id="nav">
 
 
  
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" id="container">
    <span class="navbar-toggler-icon"></span>
  </button>

<a href="index.php" class="pharol"><img class="navbar-left"  src="img/pharol.jpg" width="120" ></a>

  <div class="collapse navbar-collapse" id="collapse_target" >
  <span class="sr-only"></span>
  
	
    <ul class="container navbar-nav">
	
      <li class="nav-item">
         <a class="nav-link" href="index.php"><h4>Home</h4></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="catalogo.php"><h4>Catálogo</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php"><h4>Sobre</h4></a>
      </li>
    </ul>
	
  </div>
</nav>
</center>

		<br>
		<br>
		<br>
		
		<center>
		<ul class="filas">
		<div class="card-columns" id="fila1">

		  <ul class="card border-dark" id="1">
			</li>
		   <img class="card-img-top card border-white" src="img/camisa.png" alt="Imagem de capa do card"
			<li class="card-body"><b>Camiseta Polvo</b>
			</li>
			<li class="card-body"><h5>R$20,00</h5>
			</li>
			</ul>
		  
		  
		   <ul class="card border-dark" id="2">
			
		   <img class="card-img-top card border-white" src="img/camisa2.png" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Farol</b>
			</li>
			<li class="card-body"><h5>R$35,00</h5>
			</li>
			</ul>
		  
		  <ul class="card border-dark" id="3">
		   <img class="card-img-top card border-white" src="img/camiseta-preta.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Preta</b>
			</li>
			<li class="card-body"><h5>R$30,00</h5>
			</li>
			</ul>
		  



		<center>


		  <ul class="card border-dark" id="4">
		   <img class="card-img-top card border-white" src="img/camiseta-branca.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Branca</b>
			</li>
			<li class="card-body"><h5>R$20,00</h5>
			</li>
			</ul>
		  
		  <ul class="card border-dark" id="5">
		   <img class="card-img-top card border-white" src="img/camiseta-cinza.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Cinza</b>
			</li>
			<li class="card-body"><h5>R$35,00</h5>
			</li>
			</ul>
		  
		  <ul class="card border-dark" id="6">
		   <img class="card-img-top card border-white" src="img/camiseta-preta.jpg" alt="Imagem de capa do card" style="width:100%">
			<li class="card-body"><b>Camiseta Preta</b>
			</li>
			<li class="card-body"><h5>R$30,00</h5>
			</li>
			</ul>
		  
		</div>

		<div class="card-columns" id="fila2">

		<ul class="card border-dark" id="7">
		   <img class="card-img-top card border-white" src="img/camiseta-vermelha.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Vermelha</b>
			</li>
			<li class="card-body"><h5>R$50,00</h5>
			</li>
		</ul>
		
		<ul class="card border-dark" id="8">
		   <img class="card-img-top card border-white" src="img/camiseta-azul.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Azul</b>
			</li>
			<li class="card-body"><h5>R$45,00</h5>
			</li>
		</ul>

		<ul class="card border-dark" id="9">
		   <img class="card-img-top card border-white" src="img/camiseta-amarela.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Amarela</b>
			</li>
			<li class="card-body"><h5>R$30,00</h5>
			</li>
		</ul>
		
		<ul class="card border-dark" id="10">
		   <img class="card-img-top card border-white" src="img/camiseta-rosa.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Rosa</b>
			</li>
			<li class="card-body"><h5>R$60,00</h5>
			</li>
		</ul>
		
		<ul class="card border-dark" id="11">
		   <img class="card-img-top card border-white" src="img/camiseta-verde.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Verde</b>
			</li>
			<li class="card-body"><h5>R$55,00</h5>
			</li>
		</ul>
		
		<ul class="card border-dark" id="12">
		   <img class="card-img-top card border-white" src="img/camiseta-listrada.jpg" alt="Imagem de capa do card">
			<li class="card-body"><b>Camiseta Listrada</b>
			</li>
			<li class="card-body"><h5>R$65,00</h5>
			</li>
		</ul>
		</div>
		</ul>
		
		
		<div id="paginacao" class="pagination justify-content-center">
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
<td><a href="https://www.facebook.com/pharolcompany/"><img src="img/face.png" width="35" height="35" ></td></a>
<td><a href="https://www.facebook.com/pharolcompany/" class="face"><H3>Pharol</H3></td></a>
</tr>
</table>
<table class="rodape" >
<tr>
<td><a href="https://www.instagram.com/pharolcompany/?hl=pt-br"><img src="img/insta.png" width="40" height="40" ></td></a>
<td><a href="https://www.instagram.com/pharolcompany/?hl=pt-br" class="insta"><H3>@pharolcompany</H3></td></a>
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