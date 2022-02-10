<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
			<meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		<title>keyTosh </title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">



<!--------------------------------------------------------------------------------------------->
<style>
body, ul {
	margin:  0px;
	padding:  0px;
	font-family: 'Roboto', sans-serif;
	list-style-type: none;
}
a {
	color: #25A25A;
	text-decoration: none;
	font-family: sans-serif;
}
#header {
	width: 100%;
	height: 120px;
	box-shadow: 0px 5px 4px #E4E4E4;
	box-sizing: border-box;
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: #FFFFFF;
}
#menu {
	display: flex;
	list-style: none;
	gap: .5rem;
	font-size: 20px;
	margin-right: 40px;
}
#menu a {
	display:  block;
	padding: .5rem;
}
.sistema {
	font-size: 24px;
	color: #25A25A;
	margin-left: 40px;
	margin-top: 15px;
}
#edit-botao {
	width: 80px;
	padding: 5px 10px 5px 10px;
	background: #F5F7F9;
	box-shadow: 0px 2px 4px #C4C4C4;
	border-radius: 7px;
	margin-top: 5px;
}
.box-lista {
	font-size: 20px;
	margin-top: 45px;
	margin-right: 40px;
}
.box-lista ul {
	list-style-type: none;
}
.box-lista ul li {
	display: inline;
	padding-left: 25px;
}
.sair {
	color: #25A25A;
}
a:link {
	text-decoration: none;
}
.sair:hover {
	color: #8A8080;
}
.menu-flutuante {
	width: 100%;
	height: 71px;
	background: #25A25A;
	font-size: 25px;
	padding: 10px 0px 0px 0px;
}
.menu-flutuante ul {
	list-style: none;
	position: relative;
	margin-left: 20px;
}
.menu-flutuante ul li {
	margin-right: 10px;
	float: left;
}
.menu-flutuante a {
	padding: 7px;
	display: block;
	text-decoration: none;
	text-align: center;
	color: #fff;
	border-radius: 10px;
}
.menu-flutuante ul ul {
	position: absolute;
	visibility: hidden;
}
.menu-flutuante ul li:hover ul {
	visibility: visible;
	padding:15px;
}
.menu-flutuante a:hover {
	background-color: #f4f4f4;
	color: green;
}
.menu-flutuante ul ul li {
	float: none;
	border-bottom: solid 1px #ccc;
	border-radius: 15px;
}
.menu-flutuante ul ul li a {
	background-color: #25A25A;
}
.format {
	color: green;
}
.rodape {
	position: fixed;
	bottom: 0;
	width: 100%;
	height: 30px;
	background: #25A25A;
}
.complemento {
	padding: 0px 0px 0px 70px ;
	color: #FFFFFF;
	font-size: 17px;
	margin-top: 5px;
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
.box-secundary {
	padding: 10px 45px 5px;
}
.box-principal {
	padding: 20px 0px 20px;
    border: 1px solid #C4C4C4;
    border-radius: 5px;
    margin: 220px auto;
    width: 50%;
    max-width: 600px;
    color: #8A8080;
	box-sizing: border-box;
}
.validation-msg {
    display: none;
    color: #E03B3B;
    font-size: .7em;
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
.box-secundary label {
	font-size: 25px;
	color: #8A8080;
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
	background-color: rgba(0,0,0,0.8);
	cursor: pointer;
}
.modal-content1 {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	width: 50%;
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
	background-color: rgba(0,0,0,0.8);
	cursor: pointer;
}
.modal-content2 {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	width: 50%;
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
.btn-cadastrar-objeto {
	width: 100%;
	height: 50px;
	text-align: center;
	background: #25A25A;
	border-radius: 10px;
	cursor: pointer;
	margin-top: 25px;
	border: 2px solid black;
	color: #FFFFFF;
	font-size: 25px;
}
@media(max-width: 1000px) {
	.menu-flutuante a {
		font-size: 20px;
		margin-top: 5px;
	}
	.sistema  {
		font-size: 20px;
	}
}

</style>

	</head>

<body>
<?php include 'header.php'; ?>

<div class="box-principal">
	<form id="validacao1" method="post" >
		<div class="box-secundary">
			<label for="input-nome">Nome</label>
				<div class="validation">
					<input type="text" id="input-login" name="nomeobj">
					<span class="validation-msg" id="msg-input-login">O campo nome não pode ser vazio</span>
				</div>
		</div>
		
		<div class="box-secundary box-secundary select">
			<label for="select-tipo" name="Tipoobj">Tipo</label>
				<select name="categoria">
					<option value="chave" selected>Chave</option>
  					<option value="controle">Controle</option>
  					<option value="material_escritorio">Material Escritório</option>
  					<option value="esporte">Esporte</option>
  					<option value="material_aula">Material Aula</option>
  					<option value="jogos">Jogos</option>
  					<option value="outros">Outros</option>
				</select>
		</div>
		
		<div class="box-secundary">
			<button class="btn-cadastrar-objeto" onclick="validarCampos(event)">Cadastrar</button>
		</div>
	</form>
</div>

	<div class="rodape">
		<p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
	</div>

	<div id="myModal1" class="modal1">
	  	<div class="modal-content1">
		    <div>
				<center><img src="img/check.png"></center>
		    	<p class="modal-style1" id="conteudo-modal-sucesso"></p>
				<p class="modal-style2">Deseja cadastrar outro objeto?</p>
			</div>
		    <center><button type="button" class="btn-sucesso" onclick="closeModal1()">Sim, cadastrar!</button>
			<button type="button" class="btn-cancelar" onclick="closeModal2()">Cancelar</button></center>
	 	</div>
	</div>

	<div id="myModal2" class="modal2">
	  	<div class="modal-content2">
		  	<center><img src="img/xcancel.png"></center>
			<p class="modal-style1">Ops! Objeto já cadastrado</p>
			<p class="modal-style2" id="conteudo-modal-erro"></p>
			<center><button type="button" class="btn-cancelar" onclick="closeModal1()">Tente Novamente</button></center>
	 	</div>
	</div>

<script>
	var modal1 = document.getElementById("myModal1");
	var modal2 = document.getElementById("myModal2");

function closeModal1() {
	modal1.style.display = 'none';
	window.location.href = 'cadastro_objetos.php';
}
function closeModal2() {
	modal1.style.display = 'none';
	window.location.href = 'area_admin.php';
}
function showModal1() {
	modal1.style.display = "block";
}
function showModal2() {
	modal2.style.display = "block";
}

	$(function(){
	$('#validacao1').submit(function(){
		console.log($('#validacao1').serialize());
		$.ajax({
			url: 'processa_cadastro_objeto.php',
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

	function sucessoRequisicao(jsonResult) {
		try {

			let objResult = JSON.parse(jsonResult);
			const status_code = parseInt(objResult.status_code);
			preparaModal(objResult);

			if (status_code === 1) { // sucesso
				showModal1();
			} else { // erro
				showModal2();
			}

		} catch (ex) {
			console.log('Erro ao tentar processar resultado: ' + ex.message);
		}
	}

	function preparaModal(objResult) {
		let conteudoModalSucesso = document.querySelector('#conteudo-modal-sucesso');
		let conteudoModalErro = document.querySelector('#conteudo-modal-erro');
		switch(parseInt(objResult.status_code)) {
			case 1:
				conteudoModalSucesso.innerHTML = objResult.message;
			break;
			case 0:
				conteudoModalErro.innerHTML = objResult.message;
			break;
		}
	}


	function erroRequisicao(xhr, status, error) {
		preparaModal({'message' : 'Ocorreu um erro com a requisição AJAX', 'status_code' : 0});
		showModal2();
	}

	function aguardar() {
		console.log('Abrir modal de aguardar requisicao. Aguardando requisicao...');
	}

	function requisicaoCompletada() {
		console.log('Fechar o modal de aguardar. Requisicao completa');
	}




	function formatacaoError(input, span) {

        input.style.border = '1px solid #E03B3B';
        input.style.boxShadow  = '0px 5px 10px rgba(224, 59, 59, 0.25)';

        span.style.display = 'block';
    }

    function formatacaoNormal(input, span) {

        input.style.border = '1px solid #C4C4C4';
        input.style.boxShadow  = 'none';

        span.style.display = 'none';
    }

    function validarCampos(event) {
        var divsValidacao = document.querySelectorAll(".validation");
        var arrayDivsValidacao = Array.from(divsValidacao);
        var isEmpty = false;

            for (div of arrayDivsValidacao) {
                if(div.children[0].value.trim() === '') {
                    formatacaoError(div.children[0], div.children[1]);
                    isEmpty = true;
                } else {
                    formatacaoNormal(div.children[0], div.children[1]);
                }
            }
            if(isEmpty) {
                event.preventDefault();
                return;
            }

        }
		</script>
<!-------------------------------------------------------------------------------------------------->
<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>
