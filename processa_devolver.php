<?php
	include_once("conexao.php");
	$devolver = $_POST['idEmprestimo'];
	$query1 = "DELETE  FROM emprestimo WHERE idEmprestimo = '".$devolver."'";
    	mysqli_query($conexao, $query1);
	$rows = mysqli_affected_rows($conexao);

		if ( $rows > 0){
			echo("Sucesso!");
			header('Location: devolucao.php');
		} else {
			echo("Erro!");
			header('Location: devolucao.php');
		}


?>
