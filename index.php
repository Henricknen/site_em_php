<?php 

    require_once 'conexao.php';
    SESSION_START();        // recupendo a sessão
    if(isset($_SESSION["login_user"]) && isset($_SESSION["senha_user"])) {        // verificando se 'login_user' e 'senha_user' esta gravado no banco de dados
        header('location: user.php');       // se estas variaveis estiver setada o usuario se manterá na tela de 'user.php'
    } 
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>      <!-- cabeçalho -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="css/stylo.css">
</head>
<body>      <!-- seção principal -->

    <section id="form">
            <form action="login.php" method="post">
                <label>Login:</label>
                    <input type="text" name="login" placeholder="Ex: .henrick@live.com" class="entradas" required><br>
                <label>Senha:</label>
                    <input type="password" name="senha" placeholder="Ex: Ola_Mundo123" class="entradas" required><br>
                <label>
                    <input type="submit" value="Logar" class="bt_form">
                </label>
            </form>
            <a href="cadastro.php">Cadastrar Usuario</a>
    </section>
    
</body>
    </html>