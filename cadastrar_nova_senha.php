<?php

    require_once('conexao.php');

    // valores vindo do formulario
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];
    $email = $_POST['email'];

    echo "arquivo cadastrar_nova_senha";
    echo "<br>Senha: $senha<br> Confirmar: $confirmar<br>E-mail: $email<br>";

    if($senha == $confirmar) {      // verificando se '$senha' e '$confirmar' sao iguais 
        mysqli_query($link, "UPDATE tb_site SET senha = '$senha' WHERE email = '$email'");      // atualizando tabela 'tb_site'
        echo "Se qquiser troca novamente click no link abaixo<br>";
        echo "<a href='nova_senha.php?email_user='$email'>Cadastrar nova senha</a>";
    } else {
        echo "<br><a href='nova_senha.php?s=$senha&&email_user=$email'>Voltar ao Formulario de nova senha</a>";        // '?' indica que a variável 's' será passada junto com 'nova_senha.php'
    }

?>