<?php
session_start();
include('verifica_sessao_usuario.php');
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>BorrowSys</title>
	   <meta name="charset" content="utf-8"/>
		<meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		<title>keyTosh </title>
	   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	   <meta charset="UTF-8">
	   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	</head>
<style>
body, ul {
  margin:  0px;
  padding:  0px;
  font-family: 'Roboto', sans-serif;
  list-style-type: none;
}
	a{
		color: #25A25A;
		text-decoration: none;
		font-family: sans-serif;
	}

  #header{
  	width: 100%;
  	height: 120px;
  	box-shadow: 0px 5px 4px #E4E4E4;
  	box-sizing: border-box;
  	display: flex;
  	align-items: center;
  	justify-content: space-between;
  	background: #FFFFFF;
  }
  #menu{
    display: flex;
    list-style: none;
    gap: .5rem;
    font-size: 20px;
    margin-right: 40px;
  }
  #menu a {
	  display:  block;
	  padding: .5rem;
  }

  .sistema{
	  font-size: 24px;
		color: #25A25A;
   	margin-left: 40px;
    margin-top: 15px;
  }
  #edit-botao {
   	width: 80px;
		padding: 5px 10px 5px 10px;
		background: #F5F7F9;
		box-shadow: 0px 2px 4px #C4C4C4;
		border-radius: 7px;
    margin-top: 5px;
  }
  .box-lista{
    font-size: 20px;
    margin-top: 45px;
    margin-right: 40px;
  }
  .box-lista ul{
    list-style-type: none;
  }
  .box-lista ul li{
    display: inline;
    padding-left: 25px;
  }
  .sair{
    color: #25A25A;
  }
  a:link {
    text-decoration: none;
  }
  .sair:hover {
    color: #8A8080;
  }
  .menu-flutuante {
      width: 100%;
      height: 71px;
      background: #25A25A;
      font-size: 25px;
      padding: 10px 0px 0px 0px;
    }
    .menu-flutuante ul {
      list-style: none;
      position: relative;
      margin-left: 20px;
    }
    .menu-flutuante ul li {
      margin-right: 10px;
      float: left;
    }
    .menu-flutuante a {
      padding: 7px;
      display: block;
      text-decoration: none;
      text-align: center;
      color: #fff;
      border-radius: 10px;
    }
    .menu-flutuante ul ul {
      position: absolute;
      visibility: hidden;

    }
    .menu-flutuante ul li:hover ul {
      visibility: visible;
      padding:15px;
    }
    .menu-flutuante a:hover {
      background-color: #f4f4f4;
      color: green;
    }
    .menu-flutuante ul ul li {
      float: none;
      border-bottom: solid 1px #ccc;
        border-radius: 15px;
    }
    .menu-flutuante ul ul li a {
      background-color: #25A25A;
    }
    .format{
      color: green;
    }
    .rodape {
	   	position: fixed;
	   	bottom: 0;
	   	width: 100%;
		  height: 30px;
		  background: #25A25A;
   	}
   	.complemento {
      padding: 0px 0px 0px 70px ;
      color: #FFFFFF;
      font-size: 17px;
      margin-top: 5px;
   	}

    .nome-sessao{
      font-size: 20px;
      margin-top: 5px;
    }
    .gif{
      width: 30px;
    }
    @media(max-width: 1000px){
      .menu-flutuante a{
        font-size: 20px;
        margin-top: 5px;
      }
      .sistema{
        font-size: 20px;
      }

    }
	.img1 {
		display: flex;
		justify-content: center;
		align-items: center;
    margin-top: 200px;
		width: 100%;
		height: 80%;
    margin-bottom: 100px;
	}
  .img2 {
	display: none;
		
    margin-top: 100px;
   text-align: center;
		width: 100%;
		height: 80%;
    margin-bottom: 100px;
	}

  @media(max-width: 1100px){
  .img1{
   display: none;
  }
  .img2{
    display: block;
    
  }

}

</style>
<body>
	<header id="header">
		<p class="sistema">Sistemas de Empréstimo de Objetos</p>
			<nav id="nav">
				<ul id="menu">
					 <li class="format"><a class="nome-sessao"><img src="img/people.gif" class="gif"> Olá, <?php echo $_SESSION['login'];?>. Seja Bem Vindo!</a></li>
					<li><a href="logout_usuario.php" id="edit-botao" class="sair">Sair <i class="fa fa-sign-in"></i></a></li>
				</ul>
			</nav>
	</header>

	<nav class="menu-flutuante">
	  <ul>
	      <li><a href="area_usuario.php"><i class ="fa fa-home"></i> Home</a></li>
	      <li><a href=""><i class="fa fa-money"></i> Empréstimos</a>
	        <ul>
	          <li><a href="reserva.php">Reserva</a></li>
	          <li><a href="">Material Pendente</a></li>
	        </ul>
	      </li>
	    <li><a href="dados_usuario.php"><i class="fa fa-users" aria-hidden="true"></i> Dados Pessoais</a></li>
	  </ul>
	</nav>
	
	<div class="img1">
  <img src="img/grande.png">
</div>

<div class="img2">
<img src="img/titulo.png">
</div>

	<div class="rodape">
		<p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
	</div>

	<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>
