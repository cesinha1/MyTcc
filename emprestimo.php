<?php
include_once("conexao.php");
session_start();
?>

<html  lang="pt-br">
    <head>
	    <meta name="viewport" content="width-device-width, initial-scale-1.0"/> 
		<title>keyTosh </title>
	    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

	</head>
<style type="text/css">
body, ul {
  margin:  0px;
  padding:  0px;
  font-family: 'Roboto', sans-serif;
  list-style-type: none;
}
  .btn-fundo{
    color: white;
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


  .box-principal{
		padding: 0px 20px 20px 20px;
        border: 1px solid #C4C4C4;
        border-radius: 5px;
        width: 100%;
        max-width: 1000px;
        color: #8A8080;
		box-sizing: border-box;
    
	}

	.box-secundary input[type=text], input[type=email], input[type=password] {
		width: 70%;
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
      border: 1px solid green;
      width: 30%;
      border-radius: 5px;
   }
   .link-result {
     cursor: pointer;
   }
   .container {

    display: flex;
    padding: 10px 220px 5px 0px;
    box-sizing: border-box;
    justify-content: space-between;
    flex-wrap: wrap;
    border: red;
    color: black;
}

.format-livesearch {

  width: 678px;
  border-radius: 5px;
}
  span:hover {
  color: black;
  background-color:#DCDCDC;
  border-radius: 5px;
  width: 678px;
}
.ident-user{
  display: flex;
  justify-content: space-around;
  font-size: 20px;
  padding: 20px 10px 20px 10px;
}
#center-block{
  margin: 10% auto;
}
.table-alinha{
  margin-top: 80px;
 
  
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

    <header id="header">
      <p class="sistema">Sistemas de Empréstimo de Objetos</p>
        <nav id="nav">
          <ul id="menu">

            <li><a href="logout_admin.php" id="edit-botao" class="sair">Sair <i class="fa fa-sign-in"></i></a></li>
          </ul>
        </nav>
    </header>

    <!-------------------------------------------------------------------------------------------------->
    <nav class="menu-flutuante">
      <ul>
          <li><a href="area_admin.php"><i class ="fa fa-home"></i> Home</a></li>
          <li><a href=""><i class="fas fa-cubes"></i> Objetos</a>
            <ul>
              <li><a href="cadastro_objetos.php">Cadastrar Objetos</a>
              <li><a href="registros.php">Listar Objetos</a>
            </ul>
          </li>
          <li><a href=""><i class="fa fa-money"></i> Empréstimos</a>
            <ul>
              <li><a href="emprestimousuario.php">Realizar Empréstimo</a></li>
              <li><a href="">Listar Empréstimos</a></li>
            </ul>
          </li>
          <li><a href=""><i class="fa fa-window-restore" aria-hidden="true"></i> Devoluções</a>
            <ul>
              <li><a href="">Realizar Devoluções</a></li>
              <li><a href="">Listar Devoluções</a></li>
            </ul>
          </li>
        <li><a href="dados_admin.php"><i class="fa fa-users" aria-hidden="true"></i> Dados Pessoais</a></li>
      </ul>
    </nav>


<div class="box-principal">
    <div class="ident-user">
		<div class="space-names">Nome do usuário:
    <?php
      $nome = $_GET['Nome'];
    echo "<input type='hidden' name='nome' value='$nome'>$nome";
    echo'</div>';

   echo'<div>Siape/Matrícula:';



    $siape = $_GET['siape'];
    $matricula = $_GET['matricula'];
    $id = $_GET['iduser'];
     $query = " SELECT  * FROM usuario WHERE idUsuario = '$id' && matricula ='0'";
     $result = mysqli_query($conexao,$query);
     $row =mysqli_affected_rows($conexao);
     if ($row == 1) {
       echo "<input type='hidden' name='siape' value='$siape'>$siape";
     } else {
       echo "<input type='hidden' name='matricula' value='$matricula'>$matricula";
     }

     echo '</div>';
    ?>
    </div>
    </p>
    
			<div class="box-secundary">
				<label for="input-nome">Objeto</label>
				<div class="validation" id="nome-validation">


					<input type="text" id="input-login" name="nameobj" autocomplete="off"  onkeyup= "showResult(this.value)">
					<span class="validation-msg" id="msg-input-login">O campo nome não pode ser vazio</span>
					<span class="validation-msg" id="msg-input-login">O campo nome só pode conter letras</span>
				   <button class="btn-objeto" onclick= "addRowTable()">+ Adicionar</button>
         <div id="livesearch" class="format-livesearch" ></div>


        </div>
			</div>

      <div class="table-alinha">

        <table border='2' class="tabela-descricao" id="tabela">
        <tr>
          <th width="60%">Descrição do objeto</th>
          <th width="20%">Data hora empréstimo</th>
          <th width="20%">Devolução prevista</th>
          </table>
        </table>

        <br>
        <div class="btn-table">

        <button class="btn-objeto" id="emp">Finalizar Empréstimo </button>
        <button type="button" class="btn-objeto">Cancelar</button>
        <?php
         echo "<input type='hidden' name='iduser_emprestimo' id='idUsuario' value='$id'>";
        echo "<input type='hidden' name='matricula' value='$matricula'>";
        echo "<input type='hidden' name='siape' value='$siape'>";
        echo "<input type='hidden' name='nome' value='$nome'>";
        ?>



        </div>

      </div>

</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/be8c86c50f.js" crossorigin="anonymous"></script>
<script>
  let idObjeto = 0;
 let objEmprestimo = {
    idUsuario: document.getElementById("idUsuario").value,
   objetos: []
 }
  let selecionouitem = false;
function showResult() {
  let str = document.getElementById('input-login').value;
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
  document.getElementById('input-login').value=valor;
  document.getElementById('input-login').onkeyup=null;
  limpaDiv();
  selecionouitem = true;
  idObjeto = idObj;
}
function limpaDiv(){
  let divresult = document.getElementById('livesearch');
  divresult.style.display='none';
  document.getElementById('input-login').addEventListener('keyup',showResult);

}
function addRowTable() {

  var table = document.getElementById("tabela");
  if (selecionouitem) {
    let dataEmprestimo = new Date();
    let dataDevolucao = new Date();
    dataDevolucao.setDate(dataDevolucao.getDate() + 2);

    var row = table.insertRow(table.rows.length);
    var cel1 = row.insertCell(0);
    var cel2 = row.insertCell(1);
    var cel3 = row.insertCell(2);
    cel1.innerHTML = document.getElementById('input-login').value;
    cel2.innerHTML = dataEmprestimo.toLocaleString();
    cel3.innerHTML = dataDevolucao.toLocaleString();
    objEmprestimo.objetos.push({
     idObj: idObjeto,
     nome: cel1.innerHTML,
     dataEmp: dataEmprestimo.toISOString().slice(0,19).replace('T',' '),
     dataDev: dataDevolucao.toISOString().slice(0,19).replace('T',' ')
    });
      selecionouitem = false;
  } else {
    alert("O objeto não foi encontrado na base de dados!");
  }
}
function realizarEmprestimo() {
  //alert("Funcionou!");
  const urlEmp = "finaliza_emprestimo.php";
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
  btn.addEventListener('click', realizarEmprestimo);
</script>
</body>
</html>
