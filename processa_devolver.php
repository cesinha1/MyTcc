<?php
include_once("conexao.php");
if(isset($_POST['devolver'])){
	$query1 = "DELETE  FROM emprestimo WHERE idEmprestimo = ".$_POST['idEmprestimo']."";
}else {
	header('Location: devolucao.php');
}	
if (mysqli_query($conexao, $query1)) {
	header('Location: devolucao.php');
} else {
      echo "<script>alert('erro na operação: ".mysqli_error($conexao)."');</script>";
}
      echo "<script>window.location.href = 'devolucao.php'</script>";

?>
