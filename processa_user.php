<?php
session_start();
include_once("conexao.php");
$campo_tabela;
$valor;

switch ($_POST['campo']) {
	case 'nome':
		$campo_tabela = 'nome';
		$valor = $_POST['update_nome'];
	break;

	case 'email':
		$campo_tabela = 'email';
		$valor = $_POST['update_email'];
	break;
	case 'login':
		$campo_tabela = 'login';
		$valor = $_POST['update_login'];
	break;

	case 'senha':
		$campo_tabela = 'senha';
		$valor = sha1($_POST['update_senha']);
	break;

}

$query = "UPDATE usuario SET $campo_tabela = '".$valor."' WHERE idUsuario = ".$_SESSION['id'];
echo $query;
if (mysqli_query($conexao, $query)) {
	echo 'atualização realizada com sucesso';
	$_SESSION[$campo_tabela] = $valor;
} else {
	echo 'erro na atualização' .mysqli_error($conexao);
}
header('Location: dados_usuario.php');

?>
