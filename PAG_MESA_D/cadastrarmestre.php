<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mesa_d";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário HTML
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Inserir dados no banco de dados
$sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
