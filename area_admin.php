
<?php
session_start();
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql1 = "select * from usuario where nome like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql1);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
 <html lang="pt-br">
  <head>
    <title>BorrowSys</title>
    <meta name="charset" content="utf-8"/>
    <meta name="viewport" content="width-device-width, initial-scale-1.0"/>
    <title>keyTosh </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  </head>
<style>


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


<!-------------------------------------------------------------------------------------------------->
<?php include 'header.php'; ?>

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
