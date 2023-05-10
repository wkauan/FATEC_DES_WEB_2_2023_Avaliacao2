<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
    <h2>Dados do Candidato</h2>

<?php
    $nome = $_POST['nome'];
    $dados = $_POST['dados'];
    $telefone = $_POST['telefone'];
    $oriundo = $_POST['oriundo'];

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['nome'])){
    echo '<br><br>';
    echo 'Nome: '.$nome;
    echo '<br><br>';
    echo 'RG ou CPF: '.$dados;
    echo '<br><br>';
    echo 'Telefone: '.$telefone;
    echo '<br><br>';
    echo 'Oriundo: '.$oriundo;
}
?>

</body>
</html>