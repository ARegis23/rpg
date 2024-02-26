<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "id21925437_regis";
$password = "Rpg@12345";
$dbname = "rpg";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário HTML
$nome = $_POST['nome'];
$level = $_POST['level'];
$vida = $_POST['vida'];
$genero = $_POST['genero'];
$origem = $_POST['origem'];
$historiadefundo = $_POST['historia'];
//atributos
$forca = $_POST['forca'];
$agilidade = $_POST['agilidade'];
$inteligencia = $_POST['inteligencia'];
$carisma = $_POST['carisma'];
$somaatributos = $_POST['somaatributos'];
//habilidas
$vidaferro = $_POST['vidaferro'];
$poderataque = $_POST['poderataque'];
$arremessodearma = $_POST['arremessodearma'];
$poderdetensao = $_POST['poderdetensao'];
$maestriadearmas = $_POST['maestriadearmas'];
$escudos = $_POST['escudos'];
$atletismo = $_POST['atletismo'];
$cavalgar = $_POST['cavalgar'];
$arqueariamontada = $_POST['arqueariamontada'];
$saquear = $_POST['saquear'];
$treinamento = $_POST['treinamento'];
$rastrear = $_POST['rastrear'];
$taticas = $_POST['taticas'];
$exploracao = $_POST['exploracao'];
$visao = $_POST['visao'];
$cargainventario = $_POST['cargainventario'];
$tratarferidas = $_POST['tratarferidas'];
$cirurgia = $_POST['cirurgia'];
$primeirossocorros = $_POST['primeirossocorros'];
$engenharia = $_POST['engenharia'];
$persuasao = $_POST['persuasao'];
$gestaodeprisioneiros = $_POST['gestaodeprisioneiros'];
$lideranca = $_POST['lideranca'];
$comercio = $_POST['comercio'];
$somahabilidades = $_POST['somahabilidades'];
//pericias
$umamao = $_POST['umamao'];
$duasmao = $_POST['duasmao'];
$lancas = $_POST['lancas'];
$arco = $_POST['arco'];
$besta = $_POST['besta'];
$armadearremesso = $_POST['armadearremesso'];
$somapericia = $_POST['somapericia'];

// Inserir dados no banco de dados
$sql = "INSERT INTO fichas (nome, level, vida, genero, origem, historiadefundo, forca, agilidade, inteligencia, carisma, somaatributos, vidaferro, poderataque, arremessodearma, poderdetensao, maestriadearmas, escudos, atletismo, cavalgar, arqueariamontada, saquear, treinamento, rastrear, taticas, exploracao, visao, cargainventario, tratarferidas, cirurgia, primeirossocorros, engenharia, persuasao, gestaodeprisioneiros, lideranca, comercio, somahabilidades, umamao, duasmao, lancas, arco, besta, armadearremesso, somapericia)
VALUES ('$nome', '$level', '$vida', '$genero', '$origem', '$historiadefundo', '$forca', '$agilidade', '$inteligencia', '$carisma', '$somaatributos', '$vidaferro', '$poderataque', '$arremessodearma', '$poderdetensao', '$maestriadearmas', '$escudos', '$atletismo', '$cavalgar', '$arqueariamontada', '$saquear', '$treinamento', '$rastrear', '$taticas', '$exploracao', '$visao', '$cargainventario', '$tratarferidas', '$cirurgia', '$primeirossocorros', '$engenharia', '$persuasao', '$gestaodeprisioneiros', '$lideranca', '$comercio', '$somahabilidades', '$umamao', '$duasmao', '$lancas', '$arco', '$besta', '$armadearremesso', '$somapericia')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
