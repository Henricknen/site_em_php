<?php

    SESSION_START();
    require_once 'conexao.php';
    require_once 'verifica_login.php';
    $postagem = $_POST['postagem'];     // a variavel '$postagem' vai receber o que esta vindo do campo 'textarea' de name 'postagem' do arquivo 'postagem.php'
    
if($postagem) {     // se a variável '$postagem' for verdadeira será feito o cadastramento abaixo
        // campos da tabela 'tb_postagens' que serão preenchidos
    $sql = "insert into tb_postagens(postagem, id_user) VALUES
            ('$postagem', '$id_log')";     // variáveis
            mysqli_query($link, $sql);          // '$link'variável da conexão e variável '$sql' da consulta feita acima
            echo "Dados cadastrados com sucesso...<br>";
            echo "<a href= 'user.php?page=3'>Nova postagem...</a><br>";       // exibindo a pagina de usuario de variável igual a '3'
            echo "<a href= 'user.php?page=2'>Exibir postagens...</a><br>";            // exibindo a pagina de usuario de variável igual a '2'
} else {
    header('location:user.php');        // se a variável não estiver preenchida o usuario será enviado para 'user.php'
}

?>
