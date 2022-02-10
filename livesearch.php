<?php
include_once('conexao.php');

$query = $_GET['q'];

$sql1 = "SELECT idObjeto, nome FROM objeto WHERE NOT EXISTS ( SELECT 1 FROM objetoemprestimo WHERE objeto.idObjeto = objetoemprestimo.idObjeto
) ORDER BY nome";
$consulta = mysqli_query($conexao,$sql1);
$rows = mysqli_num_rows($consulta);

if ($rows > 0 ) {
    while($exibirRegistros = mysqli_fetch_array($consulta)){

        echo "<span onclick='preencheInput(this.innerHTML,$exibirRegistros[0])' class='link-result'>$exibirRegistros[1]</span><br>";


    }
} else {
    echo "Registro não encontrado!";

}


?>
