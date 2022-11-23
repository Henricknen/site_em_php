<?php

    require_once('conexao.php');

    // valores vindo do formulario
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];

    echo "arquivo cadastrar_nova_senha";
    echo "<br>Senha: $senha<br> Confirmar: $confirmar<br>";

    if($senha == $confirmar) {      // verificando se '$senha' e '$confirmar' sao iguais 
        echo "<br>Posso cadastrar no banco<br>";
    } else {
        echo "<br><a href='nova_senha.php?s=$senha&email_user=\"adm@gmail.com\"'>Voltar ao Formulario de nova senha</a>";        // '?' indica que a variável 's' será passada junto com 'nova_senha.php'
    }

?>