<html lang="pt">

<head>





<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


 <meta charset="UTF-8" />
 <link rel="stylesheet" href="css/catalogo.css">
 
 
 <title>Home</title>
 <link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/jpeg" href="img/pharolIco.jpeg">
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
  width: 100%;
}

.container{
	display: flex;
	margin: 0 auto;
}

#setaEsq{
margin-left:100;
}

#setaDir{
margin-right:100;
}

hr{
  border-color:#aaa;
  box-sizing:border-box;
  width:100%;  
}

.rodape{
length:0;
}


.text{
text-shadow: -1px -1px, 1px 1px #333;

}

a.text:link
{ 
text-decoration:none; 
webkit-text-stroke-width: 1px;
webkit-text-stroke-color: #000;
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

.pharol{
position: absolute;
    top: 8px;
    left: 8px;
}
 
}

@media screen and (max-width: 1000px){



.container{
	display: flex;
	margin: 10px;
}

#setaEsq{
margin-left:100;
}

#setaDir{
margin-right:100;
}

text{
text-shadow: -1px -1px, 1px 1px #333
width: 50%;
}

a.text:link
{ 
text-decoration:none; 
webkit-text-stroke-width: 1px;
webkit-text-stroke-color: #000;
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

.pharol{
	justify-content: center;
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
	
      <li class="nav-item active">
         <a class="nav-link" href="index.php"><h4>Home</h4></a>
      </li>
      <li class="nav-item">
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
<br>

<center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="" ></li>
  </ol>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" interval="100">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="img/imagem1.png"  width="80%" alt="First slide">
	  <div class="carousel-caption">
            <div class="texto"><h2>Bem vindo à Pharol!</h2></div>
            <div class="texto"><h4>A marca catarinense de vestuário inspirado no litoral brasileiro.</h4></div>
          </div>
    </div>
    <div class="carousel-item">
     <a href="catalogo.php"><img class="d-block" src="img/imagem2.png" width="80%" alt="Second slide"></a>
	   <div class="carousel-caption">
           <a href="catalogo.php"class="text"><h1>Veja os nossos produtos!</h1></a>
          </div>
    </div>
    <div class="carousel-item">
     <a href="sobre.php"><img class="d-block" src="img/imagem3.png" width="80%" alt="Third slide"></a>
	  <div class="carousel-caption">
          <a href="sobre.php" class="text"><h1>Saiba mais sobre a nossa marca!</h1></a>
          </div>
    </div>
  </div>
  </div>
  <center>
  
  <a class="carousel-control-prev" id="setaEsq" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"  id="setaDir" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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