<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - candidato</title>
</head>
<body>
    <h2>Cadastre-se</h2>

    <div>
        <form action="candidato.php" method="post">
            <label for="nome">Nome completo:</label> <br>
            <input type="text" name="nome" id="nome" required>
            <br><br>
            <label for="dados">RG ou CPF:</label> <br>
            <input type="text" name="dados" id="dados" required>
            <br><br>
            <label for="telefone">Telefone:</label> <br>
            <input type="text" name="telefone" id="telefone" required>
            <br><br>
            <label for="oriundo">Você é oriundo de escola pública?:</label> <br>
            <input type="text" name="oriundo" id="oriundo" required>
            <br><br>

            <button>Cadastrar</button>
        </form>
    </div>
</body>
</html>