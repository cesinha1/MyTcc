<?php
session_start();
include_once("conexao.php");
include('verifica_sessao_usuario.php');
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>BorrowSys</title>
	   <meta name="charset" content="utf-8"/>
		<meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		<title>BorrowSys</title>
	   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	   <meta charset="UTF-8">
	   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	</head>
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
}
.box-lista ul li {
	 display: inline;
	 padding-left: 25px;
}
.sair{
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
   padding: 0px 0px 0px 70px;
	color: #FFFFFF;
	font-size: 17px;
	margin-top: 5px;
}
.texto-dados{
   margin-top: 40px;
   margin-left: 10px;
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
   background-color: rgba(0,0,0,0.8);
   cursor: pointer;
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
.btn-sucesso {
   width: 200px;
   padding: 10px 17.6px;
   border: 0;
   border-radius: .25em;
   background: initial;
   background-color: #28a745;
   color: #fff;
   font-size: 1em;
}
.btn-sucesso1 {
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
.modal-style1 {
   color: #595959;
   font-size: 1.875em;
   font-weight: 600;
   text-transform: none;
   word-wrap: break-word;
}
.modal-style2 {
   color: #545454;
   font-size: 1.125em;
   font-weight: 400;
   line-height: normal;
   word-wrap: break-word;
   word-break: break-word;
}
.gif {
   width: 30px;
}
.alinha-conteudo{
   margin: 100px 20px 100px 20px;
}

</style>

<body>
	<header id="header">
	 <p class="sistema">Sistemas de Empréstimo de Objetos</p>
		 <nav id="nav">
			 <ul id="menu">
				 <li class="format"><a class="nome-sessao"><img src="img/people.gif" class="gif"> Olá, <?php echo $_SESSION['login'];?>. Seja Bem Vindo!</a></li>
				 <li><a href="logout_usuario.php" id="edit-botao" class="sair">Sair <i class="fa fa-sign-in"></i></a></li>
			 </ul>
		 </nav>
	</header>

	<nav class="menu-flutuante">
		<ul>
			<li><a href="area_usuario.php"><i class ="fa fa-home"></i> Home</a></li>
			<li><a href=""><i class="fa fa-money"></i> Empréstimos</a>
				<ul>
					<li><a href="">Reserva</a></li>
					<li><a href="">Material Pendente</a></li>
				</ul>
			</li>
			<li><a href="dados_usuario.php"><i class="fa fa-users" aria-hidden="true"></i> Dados Pessoais</a></li>
		</ul>
	</nav>


<div class="alinha-conteudo">
   <div class="texto-dados">
      <b class="modal-style1">NOME</b>
      <p class="modal-style2"><?php echo $_SESSION['nome']; ?></p>
      <button type="button" class="btn-sucesso" onclick="showModal1()">Modificar Nome</button>
   </div>

   <div class="texto-dados">
      <b class="modal-style1">E-mail</b>
      <p class="modal-style2"><?php echo $_SESSION['email']; ?></p>
      <button type="button" class="btn-sucesso" onclick="showModal2()">Modificar E-mail</button>
   </div>

   <div class="texto-dados">
      <b class="modal-style1">Login</b>
      <p class="modal-style2"><?php echo $_SESSION['login'];?></p>
      <button type="button" class="btn-sucesso" onclick="showModal3()">Modificar Login</button>
   </div>

   <div class="texto-dados">
      <b class="modal-style1">Senha</b>
      <p class="modal-style2">************</p>
      <button type="button" class="btn-sucesso" onclick="showModal4()">Modificar Senha</button>
   </div>
</div>
   
<div class="rodape">
      <p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
   </div>

<div id="myModal1" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar Nome</p>
         <form method="POST" action="processa_user.php">
            <input type="hidden" name="campo" value="nome">
            <input type="text" class="input-modais" name="update_nome" id="troNome" value="<?php echo $_SESSION['nome']; ?>"><br><br>
            <center><button type="submit" class="btn-sucesso1" onclick="closeModal1()">Atualizar</button>
            <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
         </form>
      
   </div>
</div>

<div id="myModal2" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar E-mail</p>
      <form method="POST" action="processa_user.php">
         <input type="hidden" name="campo" value="email">
         <input type="text" class="input-modais" name="update_email" placeholder="Digite novo Email" id="troEmail" value="<?php echo $_SESSION['email']; ?>"><br><br>
         <center><button type="submit" class="btn-sucesso1" onclick="closeModal2()">Atualizar</button>
         <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
      </form>
   </div>
   
</div>

<div id="myModal3" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar Login</p>
      <form method="POST" action="processa_user.php">
         <input type="hidden" name="campo" value="login">
         <input type="text" class="input-modais" name="update_login" placeholder="Digite novo login" id="troLogin" value="<?php echo $_SESSION['login']; ?>"><br><br>
         <center><button type="submit" class="btn-sucesso1" onclick="closeModal3()">Atualizar</button>
         <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
      </form>
   </div>
</div>

<div id="myModal4" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar Senha</p>
      <form method="POST" action="processa_user.php">
         <input type="hidden" name="campo" value="senha">
         <input type="text" class="input-modais" name="update_senha" placeholder="Digite novo Senha" id="senha1"><br><br>
         <input type="text" class="input-modais" name="update_senha" placeholder="Digite novo Senha" id="senha2"><br><br>
         <center><button type="submit" class="btn-sucesso1" onclick="closeModal4()">Atualizar</button>
         <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
      </form>
    
   </div>
</div>

<script>

var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");

function closeModal1() {
   modal1.style.display = 'none';
   window.location.href = 'dados_usuario.php';
}
function showModal1() {
   modal1.style.display = "block";
}
function closeModal2() {
   modal2.style.display = 'none';
   window.location.href = 'dados_usuario.php';
}
function showModal2() {
   modal2.style.display = "block";
}
function closeModal3() {
   modal3.style.display = 'none';
   window.location.href = 'dados_usuario.php';
}
function showModal3() {
   modal3.style.display = "block";
}
function closeModal4() {
   modal4.style.display = 'none';
   window.location.href = 'dados_usuario.php';
}
function showModal4() {
   modal4.style.display = "block";
}
function closeModalFechar() {
   window.location.href = 'dados_usuario.php';
}


$(function(){
   $('#troca-nome').submit(function(){
      $.ajax({
         url: '.php',
         type: 'POST',
         data: $('#troca-nome').serialize(),
         beforeSend: aguardar,
         complete: requisicaoCompletada,
         success: sucessoRequisicao,
         error: erroRequisicao
      });
   return false;
   });
});

$(function(){
   $('#troca-email').submit(function(){
      $.ajax({
         url: 'ProcessaLoginAdmin.php',
         type: 'POST',
         data: $('#troca-email').serialize(),
         beforeSend: aguardar,
         complete: requisicaoCompletada,
         success: sucessoRequisicao,
         error: erroRequisicao
      });
   return false;
   });
});

$(function(){
   $('#troca-login').submit(function(){
      $.ajax({
         url: 'ProcessaLoginAdmin.php',
         type: 'POST',
         data: $('#troca-login').serialize(),
         beforeSend: aguardar,
         complete: requisicaoCompletada,
         success: sucessoRequisicao,
         error: erroRequisicao
      });
   return false;
   });
});

$(function(){
   $('#troca-senha').submit(function(){
      $.ajax({
         url: 'ProcessaLoginAdmin.php',
         type: 'POST',
         data: $('#troca-senha').serialize(),
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
         }
         if (status_code === 1) { // sucesso
            showModal2();

         }

      } catch (ex) {
         console.log('Erro ao tentar processar resultado: ' + ex.message);
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

</script>


<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>
