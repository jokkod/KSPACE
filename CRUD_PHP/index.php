<?php
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Conexão</title>
</head>
<body>
    <?php
        if ($pdo) {
            echo "<h2 style = 'color: green;' > Conexão estabelecida com sucesso!</h2>";
        }else {
        echo "<h2 style 'color: red;' > Falha na Conexão </h2>";
        if (isset($mensagemErro)) {
            echo "<p><strong>Erro: </strong> {$mensagemErro}</p>";
        }
        }
?>
</body>
</html>