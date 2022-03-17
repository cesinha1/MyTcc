<?php
include_once("conexao.php");
 
    $resultAllQueries = false;
    // decodiWficando a string json correspondente ao objeto empréstimo
    $objetoEmpDecode = json_decode($_POST['objEmp'], true); 
    
    // pegando o id do Usuário
    $idUsuario = $objetoEmpDecode['idUsuario'];

    // pegando os objetos 
    $objetos = $objetoEmpDecode['objetos'];

    // Para pegar cada objeto e seus atributos, pode-se percorrer o array como está mostrado abaixo.
        
    $queryEmp = "INSERT INTO reserva(idUsuario, dataHoraEmprestimo, 
    dataHoraDevolucao) VALUES (".$idUsuario.", '".$objetos[0]['dataEmp']."')";
    mysqli_query($conexao, $queryEmp);
    $last_id = $conexao->insert_id;
    $rows = mysqli_affected_rows($conexao);
    if ( $rows > 0) {
        $resultAllQueries = true;
    }

    foreach($objetos as $obj) { 
        $queryEmp = "INSERT INTO objetoreserva(idUsuario, idObjeto) VALUES ($last_id, ".$obj['idObj'].")";
        mysqli_query($conexao, $queryEmp);
        $linhas = mysqli_affected_rows($conexao);

        if ($rows > 0) {
            $resultAllQueries = true;
            
        } else {
            $resultAllQueries = false;
            break;
        }

   } 
     
   if ($resultAllQueries) {
    echo json_encode(array('mensagem' => 'Empréstimo realizada com sucesso'));
   } else {
    echo json_encode(array('mensagem' => 'Ocorreu um erro ao realizar o empréstimo: '));
   }
   

?>
