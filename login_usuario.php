<!DOCTYPE html>
<html  lang="pt-br">
    <head>
	    <meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		<title>keyTosh </title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

<style type="text/css">
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
a:hover {
	color: #8A8080;
}
a:link {
	text-decoration: none;
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
	width: 90px;
	padding: 5px 10px 5px 10px;
	background: #F5F7F9;
	box-shadow: 0px 2px 4px #C4C4C4;
	border-radius: 7px;
}
.box-conteudo {
   	padding: 20px 20px 0px 20px;
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
.voltar-home-login {
	max-width: 450px;
	padding: 5px 0px 0px 5px;
	font-size: 18px;
	margin: 0 auto;
	width: 50%;
}

.img-login {
	width: 50%;
	height: 100%;
}
.alinhamento-login {
	padding: 20px;
}
.centralizar-login {
	text-align: center;
}
.box-label {
	width: 50px;
	height: 23px;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	line-height: 23px;
	color: #8A8080;
	margin-top: 20px;
}
.box-input {
	width: 100%;
	height: 48px;
	background: #FFFFFF;
	border: 1px solid #C4C4C4;
	box-sizing: border-box;
	border-radius: 7px;
	cursor: pointer;
	outline: 0;
	
}
.btn-acessar-login {
	width: 100%;
	height: 50px;
	background: #25A25A;
	border-radius: 10px;
	cursor: pointer;
}
.validation-msg {
    display: none;
    color: #E03B3B;
    font-size: .7em;
}
.esqueceu-senha-login {
	font-size: 18px;
	color: #25A25A;
	display: flex;
	margin-top: 20px;
	justify-content: flex-end;
	text-align: right;
}
.font-acessar-login {
	font-size: 25px;
	margin: 7px 15px 7px 15px;
	text-align: center;
	color: #FFFFFF;
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
}
.modal-content1 {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	width: 50%;
	border-radius: 5px;
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
.modal-content2 {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	width: 50%;
	border-radius: 5px;
}
.close {
   	text-align: center;
}
.rodape {
  	position: fixed;
  	bottom: 0;
  	width: 100%;
  	height: 30px;
  	background: #25A25A;
}
.complemento {
  	margin-top: 5px;
    padding: 0px 0px 0px 70px ;
  	color: #FFFFFF;
  	font-size: 17px;
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
.btn-acessar-login {
	width: 100%;
	height: 50px;
	text-align: center;
	background: #25A25A;
	border-radius: 10px;
	cursor: pointer;
	margin-top: 50px;
	border: 2px solid black;
	color: #FFFFFF;
	font-size: 25px;
}
.align-container-user {
	display: flex;
	justify-content: center;
	align-items: center;
	
	height: calc(100vh - 120px);
}
.mat-login {
	width: 35%;
	
		padding: 20px 0px 20px;
    border: 1px solid #C4C4C4;
    border-radius: 5px;
    
    color: #8A8080;
}
.title-user {
	color: green;
	font-size: 25px;

}
@media(max-width: 1200px){
	.mat-login {
	width: 50%;
	
		
	}
	.align-container-user {
		height: 120vh;
	}
	
}



</style>

<body>
  	<header id="header">
		<p class="sistema">Sistemas de Empréstimo de Objetos</p>
		<nav id="nav">
		<ul id="menu">
			<li><a href="telaPrincipal.php">Home</a></li>
			<li><a href="loginAdmin.php">Admin</a></li>
			<li><a href="cadastro_usuario.html">Cadastrar</a></li>
			<li><a href="sobre1.php">Sobre</a></li>
			<li><a href="login_usuario.php" id="edit-botao">Logar <i class="fa fa-sign-in"></i></a></li>
		</ul>
		</nav>
  	</header>
	<section class="align-container-user">
	  <div class="mat-login">
		<form id="loginUsuarios" method="post">
			<div class="alinhamento-login centralizar-login">
				<img class="img-login" src="img/cabeçalho.png" alt="">
			</div>

			<p align="center" class="title-user">Área do Usuário <i class="fa fa-lock"></i></p>

			<div class="alinhamento-login">
				<label for="input-login" class="box-label">Login</label><br>
				<div class="validation">
					<input class="box-input" type="text" name="login" id="input-login" autofocus>
					<span class="validation-msg" id="msg-input-login">O campo login não pode ser vazio</span>
				</div>
			
	
			
				<label class="box-label">Senha</label><br>
				<div class="validation">
					<input class="box-input" type="password" name="senha" id="input-password" autofocus>
					<span class="validation-msg" id="msg-input-password">O campo senha não pode ser vazio</span>
				</div>
			
				<button class="btn-acessar-login" onclick="validarCampos(event)">Entrar</button>
		

				<div class="box-lista">
					<ul>
						<li><a href="recuperasenha.php" class="esqueceu-senha-login">Esqueceu sua senha?</a></li>
					</ul>
				</div>
			</div>
		</form>
	</div>
	</section>


    <div class="rodape">
      <p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
    </div>


<div id="myModal1" class="modal1">
	<div class="modal-content1">
		<div>
			<center><img src="img/check.png" alt="cancel"></center>
			<p class="modal-style1" id="conteudo-modal-sucesso"></p>
			<p class="modal-style2">Essa área é destinada aos usuários!</p>
  		</div>
		  <center><button type="button" class="btn-sucesso" onclick="closeModal1()">Entrar</button>
    	  <button class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
	</div>
</div>

<div id="myModal2" class="modal2">
	<div class="modal-content2">
        <center><img src="img/xcancel.png"></center>
        <p class="modal-style1">Ops! Algo deu errado</p>
        <p class="modal-style2" id="conteudo-modal-erro"></p>
		<center><button type="button" class="btn-cancelar" onclick="closeModal2()">Tente Novamente</button></center>
	</div>
</div>

<script>

	var modal1 = document.getElementById("myModal1");
	var modal2 = document.getElementById("myModal2");

function closeModal1() {
	modal1.style.display = 'none';
	window.location.href = 'area_usuario.php';
}
function showModal1() {
	modal1.style.display = "block";
}
function closeModal2() {
	modal2.style.display = 'none';
	window.location.href = 'login_usuario.php';
}
function showModal2() {
	modal2.style.display = "block";
}
function closeModalFechar() {
    window.location.href = 'login_usuario.php';
}

$(function(){
	$('#loginUsuarios').submit(function(){
		$.ajax({
			url: 'ProcessaLoginUsuario.php',
			type: 'POST',
			data: $('#loginUsuarios').serialize(),
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
		let usuarioResult = JSON.parse(jsonResult);
		const status_code = parseInt(usuarioResult.status_code);
		preparaModal(usuarioResult);

		if (status_code === 1) { // sucesso
			showModal1();
		} else { // erro
			showModal2();
		}

		} catch (ex) {
			console.log('Erro ao tentar processar resultado: ' + ex.message);
		}
	}

function preparaModal(usuarioResult) {
	let conteudoModalSucesso = document.querySelector('#conteudo-modal-sucesso');
	let conteudoModalErro = document.querySelector('#conteudo-modal-erro');
		switch(parseInt(usuarioResult.status_code)) {
			case 1:
				conteudoModalSucesso.innerHTML = usuarioResult.message;
				break;
			case 0:
				conteudoModalErro.innerHTML = usuarioResult.message;
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
    // Mudando as bordas e sombreamento do input
    input.style.border = '1px solid #E03B3B';
    input.style.boxShadow  = '0px 5px 10px rgba(224, 59, 59, 0.25)';
    // mostrando a mensagem do span
    span.style.display = 'block';
}

function formatacaoNormal(input, span) {
    // Restaurando as bordas do input e retirando o sombreamento
    input.style.border = '1px solid #C4C4C4';
    input.style.boxShadow  = 'none';
    // Escondendo a mensagem do span
    span.style.display = 'none';
}

function validarCampos(event) {
    var divsValidacao = document.querySelectorAll(".validation"); // pegando todos os divs que contem os inputs e as mensagens de validação (spans)
    var arrayDivsValidacao = Array.from(divsValidacao); // transformando em array os inputs
    var isEmpty = false; // necessário para evitar que o form seja enviado (submitted) sem validação

        for (div of arrayDivsValidacao) { // percorrendo o array de divs
            if(div.children[0].value.trim() === '') { // pegando o input atual filho do div e verificando se está vazio
                formatacaoError(div.children[0], div.children[1]);
                isEmpty = true;
            } else {
                formatacaoNormal(div.children[0], div.children[1]);
            }
        }

            if(isEmpty) { // se existe algum campo não preenchido, então faz com que o form não seja
                event.preventDefault();
                return;
            }

        }
</script>

</body>
</html>
