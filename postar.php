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
            header('location:user.php?page=2');     // após nova postagem usuario será redireçionado para tela de exibição
} else {
    header('location:user.php');        // se a variável não estiver preenchida o usuario será enviado para 'user.php'
}

?>
