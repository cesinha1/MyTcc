<?php
include("conexao.php");
if(isset($_POST[ok])){

    $email = $msqli->escape_string($_POST['email']);
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro[] = "E-mail inválido";
    }

    if(count($erro) == 0 && $total > 0){
$novasenha = substr(md5(time()), 0, 6);
$nscriptografada = md5(md5($novasenha));


if(mail($email, "Sua nova senha", "Sua nova senha:".$novasenha)){

$sql_code = "UPDATE usuario SET senha = 'nscriptografada' WHERE email = '$email'";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    }
}
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recupera senha</title>
</head>
<body>
    <form action="">
        <input type="text" name="email" placeholder="Seu e-mail">
        <input type="submit" value="Recuperar senha" name="ok">
    </form>
</body>
</html>