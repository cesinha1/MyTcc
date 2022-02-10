<!DOCTYPE html>
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style_loginadmin.css">
		<link rel="stylesheet" href="css/style_universal.css">
	</head>

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

<section class="align-container-admin">
	<div class="container-login-admin">
		<form id="cadrastroLogin" method="post">
			<center><img class="img-login" src="img/cabeçalho.png" alt=""></center>
			
			<p align="center" class="title-admin">Área Administrativa <i class="fa fa-lock"></i></p>
				
			<div class="container-align">
				<label class="box-label">Login</label><br>
				<div class="validation">
					<input class="box-input" name="login" type="text" id="input-login" autofocus>
					<span class="validation-msg" id="msg-input-login">O campo login não pode ser vazio</span>
				</div>
				
				<label class="box-label">Senha</label><br>
				<div class="validation">
					<input class="box-input" name="senha"  type="password" id="input-password" autofocus>
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
			<p id="conteudo-modal-sucesso" class="modal-style1"></p>
         		<p class="modal-style2">Essa área é destinada a administradores!</p>
  		</div>
		<center><button type="button" class="btn-sucesso" onclick="closeModal1()">Entrar</button>
    		<button class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
  	</div>
</div>

<div id="myModal2" class="modal2">
	<div class="modal-content2">
  		<center><img src="img/xcancel.png" alt="cancel"></center><br>
		<p class="modal-style1">Ops! Algo deu errado</p>
		<p class="modal-style2" id="conteudo-modal-erro"></p>
		<center><button type="button" class="btn-cancelar" onclick="closeModal2()">Tentar Novamente</button></center>
	</div>
</div>

<script>

var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

function closeModal1() {
	modal1.style.display = 'none';
	window.location.href = 'area_admin.php';
}
function showModal1() {
	modal1.style.display = "block";
}
function closeModal2() {
	modal2.style.display = 'none';
	window.location.href = 'loginAdmin.php';
}
function showModal2() {
	modal2.style.display = "block";
}
function closeModalFechar() {
    window.location.href = 'loginAdmin.php';
}

$(function(){
	$('#cadrastroLogin').submit(function(){
		$.ajax({
			url: 'ProcessaLoginAdmin.php',
			type: 'POST',
			data: $('#cadrastroLogin').serialize(),
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
			let adminResult = JSON.parse(jsonResult);
			const status_code = parseInt(adminResult.status_code);
			preparaModal(adminResult);

			if (status_code === 1) { // sucesso
				showModal1();
			} else { // erro
				showModal2();
			}
		} catch (ex) {
			console.log('Erro ao tentar processar resultado: ' + ex.message);
		}
	}
	
	
	function preparaModal(adminResult) {
		let conteudoModalSucesso = document.querySelector('#conteudo-modal-sucesso');
		let conteudoModalErro = document.querySelector('#conteudo-modal-erro');
		switch(parseInt(adminResult.status_code)) {
			case 1:
				conteudoModalSucesso.innerHTML = adminResult.message;
			break;
			case 0:
				conteudoModalErro.innerHTML = adminResult.message;
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
