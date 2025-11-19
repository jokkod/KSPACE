<?php include 'conexao.php' ; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuários</title>
</head>
<body>
<h2>Cadastrar Usuários<h2>
<form method= "POST" action="salvar.php">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone"><br><br>

    <label>Endereço:</label><br>
    <input type="text" name="endereço"><br><br>

    <label>Email:</label><br>
    <input type= "text" name="email"><br><br>

    <button type="submit">Salvar</button>
</form>
</body>
</html>