<?php

require_once('DBConnect.php');

$db = new Candidato('localhost', 'root', '', 'vestibular');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['dados']) && isset($_POST['telefone'])) {
        $nome = $_POST['nome'];
        $dados = $_POST['dados'];
        $telefone = $_POST['telefone'];
        $oriundo = isset($_POST['oriundo']) && $_POST['oriundo'] === 'on';

        $db->insert($nome, $dados, $telefone, $oriundo);
    }
}

    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        $db->delete($id);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar ou Deletar</title>
</head>
<body>
    <h2>Atulizar</h2>

    <div>
        <form method="post">
            <label for="nome">Nome completo:</label> <br>
            <input type="text" name="nome" id="nome">
            <br><br>
            <label for="dados">RG ou CPF:</label> <br>
            <input type="text" name="dados" id="dados">
            <br><br>
            <label for="telefone">Telefone:</label> <br>
            <input type="text" name="telefone" id="telefone">
            <br><br>
            <label for="oriundo">Você é oriundo de escola pública?:</label> <br>
            <input type="checkbox" name="oriundo">

            <br><br>

            <button>Atualizar</button>
        </form>
    </div>

    <div>
        <form method="post">
            <label for="id">Informe seu ID:</label> <br>
            <input type="text" name="id" id="id">
            <br><br>
            <button>Deletar</button>
        </form>
    </div>
</body>
</html>