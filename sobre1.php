<!DOCTYPE html>
<html>
	<head>
		<title>Sobre Nós</title>
		<meta name="charset" content="utf-8"/>
		<link rel="stylesheet" type="text/css" href="janela1.css">
		<meta name="viewport" content="width-device-width, initial-scale-1.0"/>
		<title>keyTosh </title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-3.4.1.min"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="">
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<!----------------------------------------------------------------------------------------------------->
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
	   margin-bottom: 100px;
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
a {
    color: #25A25A;
}
a:link {
    text-decoration: none;
}
a:hover {
    color: #8A8080;;
}
.container-texto {
	font-style: normal;
	font-size: 20px;
	letter-spacing: 0.02em;
	color: #585353;
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
<div class="box-conteudo">
	<p class="container-texto">O Sistema de Empréstimo de Objetos foi desenvolvido com o objetivo de permitir 
		o maior controle de processo de empréstimo de objetos que são atualmente realizados no assistente de 
		alunos de e gerenciados por meio de formulários manuais. Os objetos geralmente emprestados são: chaves de
		laboratórios, controles de ar condicionado, materiais esportivos e alguns itens de escritório.<br><br>
		Com o sistema, será possível aos usuários realizarem a reserva dos objetos, assim como manter o histórico
		dos objetos já emprestados. Também permitirá ao administrador realizar empréstimos e devoluções de maneira
		arganizada, tendo sempre ao alcance informações dos objetos disponíveis, empréstados e suas respectivas
		datas de vencimento. O sistema támbem enviará um e-mail ao usuário que não devolver o objeto dentro do
		prazo previsto permitindo assim que estes objetos sejam sempre devolvidos ao assistente de alunos no prazo
		previamente agendado.<br><br>
		Este trabalho é um requisito parcial para o cumprimento dos créditos na disciplina de TCC do curso técnico em 
		informática do IFF Campos Itaperuna.<br><br>
					
			<b>Prof. Orientador:</b> Leandro Santos<br><br>
			<b>Desenvolvedores:</b><br>
			-Cesar Augusto de Paula<br>
			-Brunno Andrade Ferreira<br>
	</p>
</div>

	<div class="rodape">
		<p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
	</div>

</body>
</html>
