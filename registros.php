<?php
session_start();
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql1 = "SELECT * FROM objeto WHERE nome LIKE '%$filtro%' ORDER BY nome";
$consulta = mysqli_query($conexao,$sql1);
$registros = mysqli_num_rows($consulta);
?>

<html lang="pt-br">
    <head>
	    <meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		  <title>BorrowSys</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	  </head>
<style type="text/css">
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
  padding-top: 30px;
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
  width: 50%; 
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
.box-secundary select{
  width: 100%;
  height: 50px;
  border-radius: 10px;
  background: #FFFFFF;
  border: 1px solid #C4C4C4;
  margin-top: 5px;
  outline: 0;
}
.box-secundary label{
  font-size: 25px;
  color: #8A8080;
}
.modal2 {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 30px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.7);
  cursor: pointer;
}
.box-principal{
 	padding: 30px 30px 20px;
  margin: 100px 50px 0px 30px;
  width: 95%;
  text-align: center;
}
.nome-sessao{
  font-size: 20px;
  margin-top: 5px;
}
.modal-style1{
  color: #595959;
  font-size: 1.875em;
  font-weight: 600;
  text-align: center;
  text-transform: none;
  word-wrap: break-word;
}
.modal-style2{
  color: #545454;
  font-size: 1.125em;
  font-weight: 400;
  line-height: normal;
  text-align: center;
  word-wrap: break-word;
  word-break: break-word;
}
.btn-sucesso{
  width: 40%;
  padding: 10px 17.6px;
  border: 0;
  border-radius: .25em;
  background: initial;
  background-color: #28a745;
  color: #fff;
  font-size: 1em;
}
.btn-cancelar{
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
.table{
  margin: 50px 0px 100px 0px;
}
.lok1{
  width: 100%;
  border: 1px solid white;
}
@media(max-width: 1000px){
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
          <th scope="col">OBJETO</th>
          <th scope="col">CATEGORIA</th>
          <th scope="col">EXCLUIR</th>
          <th scope="col">EDITAR</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($exibirRegistros = mysqli_fetch_array($consulta)){
          $idObjeto = $exibirRegistros[0];
          $nome = $exibirRegistros[1];
          $categoria = $exibirRegistros[2];      
      ?>
        <tr>
          <!--<th id="hidden" scope="row"><?php echo $idObjeto; ?></th>-->
          <td><?php echo $nome; ?></td>
          <td><?php echo $categoria; ?></td>
          <td><i onclick="excluirObj(<?php echo "$idObjeto" ?>)" class="fas fa-trash-alt"></i></td>
          <td><i class="fas fa-edit" onclick="editarObj(<?php echo "$idObjeto" .','. "'$nome'" .','. "'$categoria'"; ?>)"></i></td>
        </tr>

      <?php }
        mysqli_close($conexao);
      ?>

    </table>
  </div>
</section>

<div id="myModal1" class="modal1">
  <div class="modal-content1">
    <div>
      <center><img src="img/update.png"></center>
      <p class="modal-style1">Atualização de Objetos</p>
      <p class="modal-style2">Verifique corretamente!</p>
    </div>
    <form action="processa_registros.php" id="validacao1" method="post">
      <div class="box-secundary">
        <label for="input-nome">Nome</label>
          <div class="validation">
            <input type="text" name="idObjeto" style="display: none" id="input-idObj">
            <input type="text" id="input-nomeobj" name="nomeobj">
            <span class="validation-msg" id="msg-input-login">O campo nome não pode ser vazio</span>
          </div>
      </div>
            <div class="box-secundary box-secundary select">
              <label for="select-tipo" name="Tipoobj">Tipo</label>
              <select name="categoria" id="categoria-obj">
                <option value="chave" selected>Chave</option>
                <option value="controle">Controle</option>
                <option value="material_escritorio">Material Escritório</option>
                <option value="esporte">Esporte</option>
                <option value="material_aula">Material Aula</option>
                <option value="jogos">Jogos</option>
                <option value="outros">Outros</option>
              </select>
            </div>
            <br>
            <div class="box-secundary">
              <center><button type="submit" name="atualizar" class="btn-sucesso">Atualizar</button>
              <button class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
            </div>
    </form>
  </div>
</div>

<div class="rodape">
	<p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
</div>

<div id="myModal2" class="modal1">
  <div class="modal-content1">
    <center><img src="img/icon23.png"></center>
    <p class="modal-style1">Tem certeza?</p>
    <p class="modal-style2">Você não poderá reverter isso!</p>
    <form action="processa_registros.php" method="POST">
      <input type="text" name="idObjeto" style="display: none" id="input-idObj-excluir">
      <center><button type="submit" name="excluir" class="btn-sucesso">Sim, exclua!</button>
      <button class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
    </form>
  </div>
</div>

<script>
$(function(){
	$('#validacao1').submit(function(){
		$.ajax({
			url: 'processa_registros.php',
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

var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

function closeModal1() {
  modal1.style.display = 'none';
  window.location.href = 'registros.php';
}
function editarObj(idObjeto, nome, categoria) {
  $("#input-idObj").val(idObjeto);
  $("#input-nomeobj").val(nome);
  $('#categoria-obj option[value=' + categoria.toLowerCase() + ']').prop('selected',true);
  modal1.style.display = "block";
}
function closeModalFechar() {
  window.location.href = 'registros.php';
}
function excluirObj(idObjeto) {
  $("#input-idObj-excluir").val(idObjeto);
  modal2.style.display = "block";
}

</script>

<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>
