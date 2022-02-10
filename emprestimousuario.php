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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
  .btn-fundo{
    color: white;
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
  section {

    margin-left: 10px;
    float: left;
    background-color: #fff;
    box-sizing: border-box;
    padding: left;

  }
  .btn{
    width: 100px;
    height: 40px;
    border: 1px solid #ddd;
    background-color: #25A25A;
    color: #FFFFFF;
    cursor: pointer;

  }
  .campo{
    width: 300px;
    height: 40px;
    border: 1px solid #ccc;
    margin-top: 5px;
    margin-bottom: 10px;
    border-radius: 5px;
  }
  article {
    width: 70%;
    box-sizing: border-box;
    padding: 10px 20px 5px 20px;
    margin: 0px 0px 5px 0px;
    font-weight: bold;
    border-radius: 10px;

  }
  .box-principal{
        padding: 30px 0px 20px 0px;
        margin: 100px 50px 100px 0px;
        width: 98%;




 }


 .btn-emprestar{

        margin-top: 15px;
        margin-bottom: 10px;


       }
       .efeito{
           border: none;
            color: #FFFFFF;
           padding: 10px;
           margin: 10px;
           font-size: 20px;
         line-height: 10px;
           border-radius: 10px;
           position: relative;
           box-sizing:border-box;
           cursor: pointer;
           transition: all 400ms ease;

       }
       .efeito1{
           background-color: #25A25A;

       }
       .efeito1:before {
            content:'';

            position: absolute;
            top: 0px;
            left:0px;
            width: 0px;
            height: 44px;
            border-radius: 20px;
            background: rgba(169, 169, 169, 0.5);
            border-radius: 10px;
            transition: all 0.5s ease;


       }
       .efeito1:hover:before{
            width: 100%;

       }

       @media(max-width: 1000px){
         .menu-flutuante a{
           font-size: 20px;
           margin-top: 5px;
         }


       }
</style>
<body>
<?php include 'header.php'; ?>  


<section class="box-principal">

        <center>
        <form  action="" method="get">
          Pesquisar: <input type="text" name="filtro" class="campo">
          <input type="submit" value="Pesquisar" class="btn">
        </form>
        <?php
        print "Resultado da pesquisa para ($filtro)<br><br>";
        print "$registros registros encontrados.";
        print "<br><br>";
        print "</center>";

        while($exibirRegistros = mysqli_fetch_array($consulta)){

                  $idUsuario = $exibirRegistros[0];
                  $nome = $exibirRegistros[1];
                  $email = $exibirRegistros[2];
                  $siape = $exibirRegistros[5];
                  $matricula = $exibirRegistros[6];
                  $tipoServidor = $exibirRegistros[4];



             print "<article>";

            // print "$idUsuario<br>";
             print "Nome: $nome<br>";
            // print "$email<br>";
             print "Siape: $siape<br>";
             print "Matricula: $matricula<br>";

            print "<div>";
             echo "<a href='emprestimo.php?Nome=$nome&siape=$siape&matricula=$matricula&iduser=$idUsuario'>Emprestar</a>";
            echo "<hr style='background-color:black;'>";
             print"</div>";
             print "</article>";

        }

mysqli_close($conexao);

        ?>
</section>


  <div class="rodape">
    <p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
  </div>

<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>
