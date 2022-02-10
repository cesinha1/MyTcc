<?php

include_once("conexao.php");
$query = "";

  if(isset($_POST)) {
    extract($_POST); // extrair os dados do post

      // $nomeobj, $categoria
      $query = "SELECT * FROM objeto WHERE nome = '".$nomeobj."' AND categoria = '".$categoria."'";
      mysqli_query($conexao,$query);
      $linhas = mysqli_affected_rows($conexao);

      if ($linhas > 0) {
        // status_code => 0 error
        // status_code => 1 success
        echo json_encode(array('message' => 'O objeto '.$nomeobj.' já existe', 'status_code' => 0));
      } else {
        $query = "INSERT INTO objeto(nome , categoria) VALUES('".$nomeobj."', '".$categoria."')";
        mysqli_query($conexao,$query);
        $linhas = mysqli_affected_rows($conexao);
        
        if ($linhas > 0) {
          echo json_encode(array('message' => 'Objeto inserido com sucesso!', 'status_code' => 1));
        } else {
          echo json_encode(array('message' => 'Ocorreu um erro ao tentar cadastrar o objeto', 'status_code' => 0));
        }
      }
    }else {
      echo json_encode(array('message' => 'Variável POST não foi definida', 'status_code' => 0));
  }
  mysqli_close($conexao);

?>
