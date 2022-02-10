<?php
include_once("conexao.php");
if (isset($_POST['atualizar'])) {
	$nomeObj = $_POST['nomeobj'];
	$categoriaObj = $_POST['categoria'];
	$idObj = $_POST['idObjeto'];
	$query = "UPDATE objeto  SET nome = '".$nomeObj."', categoria = '".$categoriaObj."' WHERE idObjeto = ".$idObj;

} else if (isset($_POST['excluir'])) {
	//precisa realizar verificações extras:
	//verificar se o objeto se encontra emprestado
	$query = "DELETE FROM objeto  WHERE idObjeto = ".$_POST['idObjeto'];
} else {
	header('Location: registros.php');
}

if (mysqli_query($conexao, $query)) {
	 header('Location: registros.php');
} else {
	echo "<script>alert('erro na operação: ".mysqli_error($conexao)."');</script>";
}
	echo "<script>window.location.href = 'registros.php'</script>";

?>
