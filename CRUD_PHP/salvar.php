<?php
include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

$sql = "INSERT INTO pessoas (nome, telefone, endereco, email)";

if ($con->query($sql) === TRUE) {
    echo "Registro salvo com sucesso! <a href='listar.php'>Voltar</a>";
}else{
    echo "Erro: ". $con->error;
}
?>