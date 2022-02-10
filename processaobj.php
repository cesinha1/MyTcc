<?php

include_once("conexao.php");

$nome = $_POST['nomeobj'];
$categoria = $_POST['categoria'];
$sql1 = "INSERT INTO objeto (nome,categoria) VALUES ('$nome','$categoria')";
$salvar = mysqli_query($conexao,$sql1);
$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
   if( isset( $_POST) && !empty($_POST) ){
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';
   }
   
?>     