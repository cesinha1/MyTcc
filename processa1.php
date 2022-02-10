<?php 
include_once("conexao.php");
$query = "";

  if (isset($_POST)) {
      extract($_POST); // extrair os dados do post

      // $nomeobj, $categoria 
      $query = "SELECT * FROM usuario WHERE email = '".$email."' AND login = '".$login."'";
      mysqli_query($conexao,$query); 
      $linhas = mysqli_affected_rows($conexao);    
      
      if ($linhas > 0) {
        // status_code => 0 error 
        // status_code => 1 success
        echo json_encode(array('message' => 'O usuario '.$nome.' já existe', 'status_code' => 0));
      } else {
      
        if($tipo === "SERVIDOR"){
          $query = "insert into Usuario (nome,email,tipo,tipoServidor,siape,matricula,login,senha) values ('$nome','$email','$tipo','$tipoServidor','$siape',$matricula,'$login', SHA1('$senha'))";
        }else{
          $query = "insert into Usuario (nome,email,tipo,tipoServidor,siape,matricula,login,senha) values ('$nome','$email','$tipo',NULL,NULL,$matricula,'$login', SHA1('$senha'))";
        }
        mysqli_query($conexao,$query);

        $linhas = mysqli_affected_rows($conexao);    
          if ($linhas > 0) {
            echo json_encode(array('message' => 'Usuario inserido com sucesso', 'status_code' => 1));
          } else {
            echo json_encode(array('message' => 'Ocorreu um erro ao tentar cadastrar o usuário', 'status_code' => 0));
          }
  }
  } else {
    echo json_encode(array('message' => 'Variável POST não foi definida', 'status_code' => 0));
  }

mysqli_close($conexao);
?>