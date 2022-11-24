<?php

    $senha = isset($_GET['s'])?$_GET['s'] : "";     // se 's' estiver definido a variável 's' passada pela URL e guardando a em '$senha'
    // echo $senha;
    $email =isset($_GET['email_user'])?$_GET['email_user'] : "";        // verificando se variável 'email_user' está setada e atribuindo o valor dela na variável 'email'
    // echo $email;
    if($email == "") {      // se 'email_user' for vazio não terá acesso a 'nova_senha.php'
        header('location: index.php');
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
            <form action="cadastrar_nova_senha.php" method="post">
                <label>Nova Senha:</label>
                    <input type="password" name="senha" placeholder="Digite a nova senha" class="entradas" required
                     value="<?php if($senha != "") { echo $senha;}?>"><br>
                <label>
                <label>Confirmar senha:</label>
                    <input type="password" name="confirmar" placeholder="Repetir senha" class="entradas" required><br>
                    <input type="hidden" name="email" value="<?php echo $email;?>">     <!-- campo estará invisivel -->
                    

                <label>
                    <input type="submit" value="Cadastrar Senha" class="bt_form">
                </label>
            </form>
    </section>
    
</body>
    </html>