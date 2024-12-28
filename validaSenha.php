<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


if(isset($_POST['nome_completo'], $_POST['data_nascimento'], $_POST['senha'], $_POST['confirma_senha'])){



$nome = $_POST['nome_completo'];
$data = $_POST ['data_nascimento'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirma_senha'];


$UmaLetraMaiscula = preg_match('/[A-Z]/', $senha) ;
$QuantidadeLetrasSenhas = strlen($senha) >= 4 ;
$senhasIguais = $senha == $confirmaSenha;


if($UmaLetraMaiscula && $QuantidadeLetrasSenhas && $senhasIguais){
    echo"Senha valida";

}else{
    echo"Senha invalida";
}



}


?>


</body>
</html>