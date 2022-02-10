<?php
session_start();
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql1 = "SELECT * FROM emprestimo WHERE idEmprestimo LIKE '%$filtro%' ORDER BY idEmprestimo";
$consulta = mysqli_query($conexao,$sql1);
$registros = mysqli_num_rows($consulta);

?>
<html  lang="pt-br">
    <head>
	    <meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		  <title>Devolução</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	  </head>
<style>
.tabela-registros {
	font-size: 20px;
	border-color: black;
	background-color: #fff;
	margin: 0px 0px 0px 1px;
}
.vol {
	padding: 5px;
	margin: 5px;
}
section {
  width: 870px;
  height: 500px;
  margin-left: 10px;
  float: left;
  background-color: #fff;
  box-sizing: border-box;
  padding: left;
}
.campo {
  width: 300px;
  height: 35px;
  border: 1px solid #ccc;
  margin-top: 5px;
  margin-bottom: 10px;
  border-radius: 5px;
}
.btn {
  width: 100px;
  height: 40px;
  border: 1px solid #ddd;
  background-color: #25A25A;
  color: #FFFFFF;
  cursor: pointer;
  margin-top: -4px;
}
.modal1 {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 20%;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.7);
  cursor: pointer;
  border: 0;
}
.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 30%;
  border-radius: 5px;
}
.input-modais {
  width: 100%;
  height: 50px;
  border-radius: 10px;
  background: #FFFFFF;
  border: 1px solid #C4C4C4;
  margin-top: 5px;
  outline: 0;
}
.box-secundary input {
  width: 100%;
  height: 50px;
  border-radius: 10px;
  background: #FFFFFF;
  border: 1px solid #C4C4C4;
  margin-top: 5px;
  outline: 0;
}
.box-secundary select {
  width: 100%;
  height: 50px;
  border-radius: 10px;
  background: #FFFFFF;
  border: 1px solid #C4C4C4;
  margin-top: 5px;
  outline: 0;
}
.box-secundary label {
  font-size: 25px;
  color: #8A8080;
}
.modal2 {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 20%;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.7);
  cursor: pointer;
}
.box-principal {
 	padding: 30px 30px 20px;
  margin: 100px 50px 0px 30px;
  width: 95%;
  text-align: center;
}
.nome-sessao {
  font-size: 20px;
  margin-top: 5px;
}
.modal-style1 {
  color: #595959;
  font-size: 1.875em;
  font-weight: 600;
  text-align: center;
  text-transform: none;
  word-wrap: break-word;
}
.modal-style2 {
  color: #545454;
  font-size: 1.125em;
  font-weight: 400;
  line-height: normal;
  text-align: center;
  word-wrap: break-word;
  word-break: break-word;
}
.btn-sucesso {
  width: 40%;
  padding: 10px 17.6px;
  border: 0;
  border-radius: .25em;
  background: initial;
  background-color: #28a745;
  color: #fff;
  font-size: 1em;
}
.btn-cancelar {
  width: 30%;
  border-radius: 5px;
  padding: 10px 17.6px;
  border: 0;
  border-radius: .25em;
  background: initial;
  background-color: rgb(221, 51, 51);
  color: #fff;
  font-size: 1em;
}
.table {
  margin: 50px 0px 100px 0px;
}
.lok1 {
  width: 100%;
  border: 1px solid white;
}
.btn-devolver {
  width: 150px;
  height: 35px;
  background: #25A25A; 
  color: white;
  border: 3px solid #25A25A;
  transition-timing-function: ease-in-out;
  transition-property: background, color;
  transition-duration: 0.5s;
}
.btn-devolver:hover {
  background: white;
  color: #25A25A;
}

@media(max-width: 1000px) {
	.menu-flutuante a{
		font-size: 20px;
		margin-top: 5px;
	}
	.sistema{
		font-size: 20px;
	}
}

	</style>
<body>

<?php include 'header.php'; ?>

<section class="box-principal">

  <form  action="" method="get">
    Pesquisar: <input type="text" name="filtro" class="campo" >
    <input type="submit" value="Pesquisar" class="btn">
  </form>

       <br>
        <?php
        print "&nbsp;&nbsp;&nbsp;Resultado da pesquisa com a palavra ($filtro)<br>";
        print "&nbsp;&nbsp;&nbsp;$registros registros encontrados.";
        print "<br><br>";
		?>

  <div class="lok1">
    <table class="table" id="objects">
      <thead>
        <tr>
          <th scope="col">Usuário</th>
          <th scope="col">Objeto</th>
          <th scope="col">Data-Empréstimo</th>
          <th scope="col">Data-Devolução</th>
          <th scope="col">Devolução</th> 
        </tr>
      </thead>
      <tbody>
        
        
          <?php 
          while($exibirRegistros = mysqli_fetch_array($consulta)){
            $idEmprestimo = $exibirRegistros[0];
            $idUsuario = $exibirRegistros[1];
            $dataEmprestimo = $exibirRegistros[2];
            $dataDevolucao = $exibirRegistros[3];
          
          $sql = "SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";
          $query1 = mysqli_query($conexao,$sql);
          $resgist = mysqli_num_rows($query1);    
          
          while($exibirRegistros1 = mysqli_fetch_array($query1)){
            $nomeUsuario = $exibirRegistros1[1];
          

            $sqlcaptureidobj = "SELECT * FROM objetoemprestimo WHERE idEmprestimo = '$idEmprestimo'";
            $queryIdEmprestimo = mysqli_query($conexao,$sqlcaptureidobj);
            $registroObjEmp = mysqli_num_rows($queryIdEmprestimo);
            
            while($exibirObjEmp = mysqli_fetch_array($queryIdEmprestimo)){
              $idObj = $exibirObjEmp[1];
            

            $sqlCaptureNomeObj = "SELECT * FROM objeto WHERE idObjeto = '$idObj'";
            $queryNomeObj = mysqli_query($conexao,$sqlCaptureNomeObj);
            $registroNomeObj = mysqli_num_rows($queryNomeObj);
            
            while($exibirNomeObj = mysqli_fetch_array($queryNomeObj)){
              $nomeObj = $exibirNomeObj[1];
            
          

          ?>
          <tr>
           <td><?php echo $idEmprestimo; ?></td>
          <td><?php echo $nomeUsuario; ?></td>
          <td><?php echo $nomeObj; ?></td>
          <td><?php echo $dataEmprestimo; ?></td>
          <td><?php echo $dataDevolucao; ?></td>
          <td><button class="btn-devolver" onclick="modalDevolver()">Devolver</button></td>   
        </tr>

      <?php
            } 
          }
          }
          }
      ?>
      
    </table>
  </div>
</section>


<div id="myModal2" class="modal1">
  <div class="modal-content1">
    <center><img src="img/icon23.png"></center>
    <p class="modal-style1">Tem certeza?</p>
    <p class="modal-style2">Você não poderá reverter isso!</p>
      <form action="processa_devolver.php" method="POST" id="validacao1">
        <input type="text" name="idEmprestimo" value="<?php echo "$idEmprestimo"; ?>" id="idEmp">
        <center><button type="submit" name="excluir" class="btn-sucesso" onclick='devolverObj(<?php echo $idEmprestimo; ?>)'>Sim, exclua!</button>
        <button class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
      </form>
  </div>    
</div>

<script>

$(function(){
	$('#validacao1').submit(function(){
		$.ajax({
			url: 'processa_devolver.php',
			type: 'POST',
			data: $('#validacao1').serialize(),
			beforeSend: aguardar,
			complete: requisicaoCompletada,
			success: sucessoRequisicao,
			error: erroRequisicao
		});
	return false;
	});
});



var modal2 = document.getElementById("myModal2");

function closeModalFechar() {
  window.location.href = 'devolucao.php';
}
function devolverObj(idEmprestimo) {
  $("#idEmp").val(idEmprestimo); 
}
function modalDevolver(){
  modal2.style.display = "block";
}
</script>


<div class="rodape">
	<p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
</div>

<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>