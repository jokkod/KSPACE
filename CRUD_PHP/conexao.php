<?php
$host = "localhost";

$dbname = "Cadastro_Usuarios";

$user = "root";

$pass = "";

try {
    $pdo = new pdo("mysql: host=$host;dbname=$dbname", $user,$pass);

    $pdo->setAttribute(PDO: :ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION);
}catch (PDOEXception $e) {
    die("Erro na conexão:" . $e -> getMessage ());
}
?>