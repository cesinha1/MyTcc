<?php
session_start();
include_once("conexao.php");

    $login = mysqli_real_escape_string($conexao, $_POST['login']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $query = "select idUsuario, nome, email, login, senha from usuario where login = '{$login}' and senha = SHA1('$senha')";

    $result = mysqli_query($conexao, $query);
    $row_usuario = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);
        if($row == 1) {
            $_SESSION['login'] = $login;
            $_SESSION['nome'] = $row_usuario['nome'];
            $_SESSION['email'] = $row_usuario['email'];
            $_SESSION['senha'] = $row_usuario['senha'];
            $_SESSION['id'] = $row_usuario['idUsuario'];
            echo json_encode(array('message' => 'Seja Bem Vindo! '.$login.'', 'status_code' => 1));
            exit();
        } else {
            echo json_encode(array('message' => 'Não foi possível fazer login. Usuário ou senha incorretos.', 'status_code' => 0));
            exit();
        }
        mysqli_close($conexao);
?>
