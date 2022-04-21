<?php

include_once("conexao.php");
session_start();
include('verifica_sessao_usuario.php');
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql1 = "select * from usuario where nome like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql1);
$registros = mysqli_num_rows($consulta);

?>
<!DOCTYPE html>
 <html lang="pt-br">
  <head>
    <title>BorrowSys</title>
    <meta name="charset" content="utf-8"/>
    <meta name="viewport" content="width-device-width, initial-scale-1.0"/>
    <title>BorrowSys</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
	a{
		color: #25A25A;
		text-decoration: none;
		font-family: sans-serif;
	}

  #header{
  	width: 100%;
  	height: 120px;
  	box-shadow: 0px 5px 4px #E4E4E4;
  	box-sizing: border-box;
  	display: flex;
  	align-items: center;
  	justify-content: space-between;
  	background: #FFFFFF;
  }
  #menu{
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

  .sistema{
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
  .box-lista{
    font-size: 20px;
    margin-top: 45px;
    margin-right: 40px;
  }
  .box-lista ul{
    list-style-type: none;
  }
  .box-lista ul li{
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
    .format{
      color: green;
    }
  .rodape{
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 30px;
    background: #25A25A;
  }
  .complemento{
    padding: 0px 0px 0px 70px ;
    color: #FFFFFF;
    font-size: 17px;
  } 
  .format{
    color: green;
  }
  .serviços-css{
    display: block;
    text-decoration: none;
    text-align: center;
    padding: 15px 20px 0px 0px;
    color: #fff;
  }
  
  
  .btn{
    width: 100px;
    height: 40px;
    border: 1px solid #ddd;
    background-color: #2a578b;
    color: #fff;
    cursor: pointer;
  }
  .campo{
    width: 300px;
    height: 30px;
    border: 1px solid #ccc;
    margin-top: 5px;
    margin-bottom: 10px;
  }
  article {
    width: 100%;
    box-sizing: border-box;
    padding: 10px;
    background-color: #d6d5d5;
    margin-bottom: 5px;
  }
  .box-secundary input[type=text] {
		width: 450px;
		height: 50px;
		border-radius: 10px;
		background: #FFFFFF;
  
		margin-top: 5px;
		outline: 0;
	}
	.validation-msg {
        display: none;
        color: #E03B3B;
        font-size: .7em;
    }
    label{
		font-size: 25px;
		color: black;
	}
  .btn-objeto {
    width: 250px;
    height: 50px;

    background: #25A25A;
    color: white;
    border-radius: 10px;

    margin-top: 5px;
    outline: 0;
  }
  .tabela-descricao {
    font-size: 20px;
  }
  .btn-table {
    display: flex;
    justify-content: flex-end;
  }
  .glock {
     margin:0 1em 0 5;
     font-size: 20px;
     color: black;

  }
  .container-reserva {
    width: 100%;
    height: calc(100vh - 191px);
    
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 100px 0px;
  }
  .sub {
    width: 800px;
    padding: 25px;
    border-radius: 15px;
    border: 1px solid #c4c4c4;
    

  }
  .box-pesquisa {
    display: flex;
    justify-content: space-between; 
    padding: 0px 10px;
    padding-bottom: 10px;
    width: 100%;

    
  }
  .format-livesearch {

width: 450px;
border-radius: 5px;
}


.nome-sessao{
      font-size: 20px;
      margin-top: 5px;
    }
    .gif{
      width: 30px;
    }
    .container-tree {
      display: flex;
    justify-content: space-between; 
    padding: 10px 10px;
    width: 100%;
   
    }
    .container-table {
      width: 100%;
      
      padding: 10px 10px;
      
    }
    .pesquisa-search {
      width: 100%;
     
      padding: 10px 10px;
    }
    .date-format {
      padding: 6px;
    }
    .container-img {
      display: flex;
      justify-content: center;
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
	          <li><a href="reserva.php">Reserva</a></li>
	          <li><a href="">Material Pendente</a></li>
	        </ul>
	      </li>
	    <li><a href="dados_usuario.php"><i class="fa fa-users" aria-hidden="true"></i> Dados Pessoais</a></li>
	  </ul>
	</nav>
    
<div class="container-reserva">
  <div class="sub">
    <div class="container-img">
      <img src="img/cabeçalho.png" alt="">
    </div>	
  <label>Objeto</label>
			<div class="box-pesquisa">
        <div class="box-secundary">
          <input type="text" id="input-reserva" name="nameobj" autocomplete="off"  onkeyup="showResult()">
        </div>	
        <div>
          <button class="btn-objeto" onclick="addRowTable()">+ Adicionar</button>
        </div>
      
      </div>
      <div class="pesquisa-search">
			  <div id="livesearch" class="format-livesearch"></div>
      </div>
    <div class="container-table">
      <center><table border='2' class="tabela-descricao" id="tabela">
        <tr>
        <th width="500px">Descrição do objeto</th>
        <th width="300px">Data da reserva</th>  
      </table></center>
    </div>

    <div class="container-tree">
          <div>
            <input type="date" id="date-reserva" class="date-format">
          </div>
          <div>
            <button class="btn-objeto" id="emp">Finalizar Reserva</button>
          </div>
          <div>
            <button type="button" class="btn-objeto">Cancelar</button>
          </div>
    </div>

  </div>
</div>

<script>
let idObjeto = 0;
 let objEmprestimo = {
   objetos: []
 }
  let selecionouitem = false;
function showResult() {
  let str = document.getElementById('input-reserva').value;
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById('livesearch').style.display='block';
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";

    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();

}
function preencheInput(valor, idObj) {
  document.getElementById('input-reserva').value=valor;
  document.getElementById('input-reserva').onkeyup=null;
  limpaDiv();
  selecionouitem = true;
  idObjeto = idObj;

}
function limpaDiv(){
  let divresult = document.getElementById('livesearch');
  divresult.style.display='none';
  document.getElementById('input-reserva').addEventListener('keyup',showResult);

}
function addRowTable() {

  var table = document.getElementById("tabela");
  if (selecionouitem) {
   
    var row = table.insertRow(table.rows.length);
    var cel1 = row.insertCell(0);
    var cel2 = row.insertCell(1);
    cel1.innerHTML = document.getElementById('input-reserva').value;
    cel2.innerHTML = document.getElementById('date-reserva').value;
    
    objEmprestimo.objetos.push({
     idObj: idObjeto,
     nome: cel1.innerHTML,
     dataRes: cel2.innerHTML
    });
      selecionouitem = false;
  } else {
    alert("O objeto não foi encontrado na base de dados!");
  }
}
function realizarReserva() {
  //alert("Funcionou!");
  const urlEmp = "finaliza_reserva.php";
  $.ajax({
    url: urlEmp,
    type:'POST',
    data: {objEmp: JSON.stringify(objEmprestimo)},
    success: sucessoRequisicao,
    error: erroRequisicao
  });
}
function sucessoRequisicao(response) {
    let jsObj = {};
    try {
        jsObj = JSON.parse(response);
    } catch(ex) {
        alert('Opss... Ocorreu uma exceção ao tentar realizar o parse do objeto JSON.\n Mensagem' + ex.message);
    }
    console.log(jsObj);
    alert(jsObj.mensagem + '\n' + jsObj.resultado);
    document.location.reload(true);

}

function erroRequisicao(xhr, statusText, error) {
    console.log(xhr);
    console.log(statusText);
    console.log(error);

}

  let btn = document.getElementById("emp");
  btn.addEventListener('click', realizarReserva);
</script>

  <div class="rodape">
    <p class="complemento">BorrowSys 2020 - Todos os direitos reservados</p>
  </div>
  <script src="jquery.js"></script>
<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
</body>
</html>
