<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mesa_d";

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($mysqli->error) {
    die("Conexão falhou: " . $mysqli->error);
}

?>
