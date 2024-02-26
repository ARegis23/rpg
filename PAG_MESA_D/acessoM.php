<?php
include('conexao.php');

if (isset($_POST["email"]) || isset($_POST["senha"])) {
    // Obter o email e a senha enviados pelo formulário
    if(strlen($_POST['email'])==0){
        echo "email vazio!";
    }
    if(strlen($_POST['senha'])==0){
        echo "senha vazio!";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST["senha"]);

        $sql_code = "select * from usuario where email='$email' and senha = '$senha'";
        $sql_query = $mysqli->Query($sql_code ) or die ("falha" .$mysqli->error);

        $quatidade = $sql_query->num_rows;
        if ($quatidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['user'] = $usuario['nome'];
            header("Location: VCad.html");

        }else {
            echo ("Falha email ou senha incoreto!");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="StyleAcessoMP.css">
        <title> Mesa D </title>
    </head>

    <body>
        <div class="mestre">
            <div class="login">
                <h1> Bem - Vindo Mestre </h1>
                <br>
                <h2> Faça seu login </h2>
            </div>
    
            <div class="login">
                <form action='' method="post">
    
                    <div class="">
                        <label for="username"> Email </label>
                        <input type="text" id="email" name="email" placeholder="email@example.com" required>
                    </div>
    
                    <div class="">
                        <label for="senha"> Senha </label>
                        <input type="password" id="senha" name="senha" placeholder="********" required>
                    </div>
                    
                    <input type="submit" value="Login">
                
                </form>
    
                <div>
                    <button onclick="togglePopup()"> Novo Aqui? Cadastra-se! </button>
                </div>

                <div class="popup" id="popup">
                    <div class="popup-content">
                        <span class="close" onclick="togglePopup()">&times;</span>
                        <h2>Cadastre-se</h2>
                        <form action="cadastrarmestre.php" method="post">
                            <!-- Seus campos de formulário aqui -->
                            <label for="nome"> Nome </label>
                            <input type="text" id="nome" name="nome">
                            <label for="email"> Email </label>
                            <input type="text" id="email" name="email">
                            <label for="senha"> Senha </label>
                            <input type="password" id="senha" name="senha">
                            <button type="submit"> Cadastrar </button>
                        </form>
                    </div>
                </div>

                <script>
                    function togglePopup() {
                        var popup = document.getElementById("popup");
                        popup.style.display = popup.style.display === "none" ? "block" : "none";
                    }
                </script>
                
            </div>
    
            <div class="voltar">
                <footer>
                    <a href="Home.html"><strong> Voltar </strong></a>
                </footer>
            </div>

            <div class="rodape">
                <p> Desenvolvido por Regis23 </p>
            </div>
        </div>
    </body>

</html>