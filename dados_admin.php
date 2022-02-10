<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>BorrowSys</title>
	   <meta name="charset" content="utf-8"/>
		<meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		<title>keyTosh </title>
	   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	   <meta charset="UTF-8">
	   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

	</head>
<style>
.texto-dados {
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
   background-color: rgba(0,0,0,0.7);
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
.alinha-conteudo {
   margin: 100px 20px 100px 20px;
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

<div class="alinha-conteudo">
   <form id="troca-nome" method="POST">
      <div class="texto-dados">
         <b class="modal-style1">Usuário</b>
         <p class="modal-style2"><?php echo $_SESSION['nome']; ?></p>
         <button type="button" class="btn-sucesso" onclick="showModal1()">Modificar Nome</button>
      </div>
   </form>

   <form id="troca-email" method="POST">
      <div class="texto-dados">
         <b class="modal-style1">E-mail</b>
         <p class="modal-style2"><?php echo $_SESSION['email']; ?></p>
         <button type="button" class="btn-sucesso" onclick="showModal2()">Modificar E-mail</button>
      </div>
   </form>

   <form id="troca-login" method="POST">
      <div class="texto-dados">
         <b class="modal-style1">Login</b>
         <p class="modal-style2"><?php echo $_SESSION['login']; ?></p>
         <button type="button" class="btn-sucesso" onclick="showModal3()">Modificar Login</button>
      </div>
   </form>

   <form id="troca-senha" method="POST">
      <div class="texto-dados">
         <b class="modal-style1">Senha</b>
         <p class="modal-style2">**********</p>
         <button type="button" class="btn-sucesso" onclick="showModal4()">Modificar Senha</button>

      </div>
   </form>
</div>
   
<div class="rodape">
      <p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
   </div>


<div id="myModal1" class="modal1">
   <div class="modal-content1">
         <p class="modal-style1">Atualizar Nome</p>
         <form method="POST" action="processa_admin.php">
            <input type="hidden" name="campo" value="nome">
            <input type="text" class="input-modais" name="update_nome" value="<?php echo $_SESSION['nome']; ?>"><br><br>
            <center><button type="submit" class="btn-sucesso1" onclick="closeModal1()">Atualizar</button>
            <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></cente>
       </form>    
   </div>
</div>

<div id="myModal2" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar E-mail</p>
      <form method="POST" action="processa_admin.php">
         <input type="hidden" name="campo" value="email">
         <input type="text" class="input-modais" name="update_email" value="<?php echo $_SESSION['email'];?>"><br><br>
         <center><button type="submit" class="btn-sucesso1" onclick="closeModal2()">Atualizar</button>
         <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
      </form>
   </div>
</div>

<div id="myModal3" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar Login</p>
         <form method="POST" action="processa_admin.php">
            <input type="hidden" name="campo" value="login">
            <input type="text" class="input-modais" name="update_login" value="<?php echo $_SESSION['login']; ?>"><br><br>
            <center><button type="submit" class="btn-sucesso1" onclick="closeModal3()">Atualizar</button>
            <button type="button" class="btn-cancelar" onclick="closeModalFechar()">Cancelar</button></center>
        </form>
   </div>
</div>

<div id="myModal4" class="modal1">
   <div class="modal-content1">
      <p class="modal-style1">Atualizar Senha</p>
      <form method="POST" action="processa_admin.php">
         <input type="hidden" name="campo" value="senha">
         <input type="text" class="input-modais" name="update_senha" placeholder="Digite novo Senha"><br><br>
         <input type="text" class="input-modais" name="update_senha" placeholder="Digite novo Senha"><br><br>
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
   window.location.href = 'dados_admin.php';
}
function showModal1() {
   modal1.style.display = "block";
}
function closeModal2() {
   modal2.style.display = 'none';
   window.location.href = 'dados_admin.php';
}
function showModal2() {
   modal2.style.display = "block";
}
function closeModal3() {
   modal3.style.display = 'none';
   window.location.href = 'dados_admin.php';
}
function showModal3() {
   modal3.style.display = "block";
}
function closeModal4() {
   modal4.style.display = 'none';
   window.location.href = 'dados_admin.php';
}
function showModal4() {
   modal4.style.display = "block";
}
function closeModalFechar() {
   window.location.href = 'dados_admin.php';
}

$(function(){
   $('#troca-nome').submit(function(){
      $.ajax({
         url: 'ProcessaLoginAdmin.php',
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
