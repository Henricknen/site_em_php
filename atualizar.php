<?php

    require_once 'conexao.php';     // para ter acesso ao banco de dados
    header('content-type: text/html; charset=utf-8');
    SESSION_START();
    require_once 'verifica_login.php';

    $atualizar = $_POST['atualiza'];
    $id_postagem = $_POST['id'];

    if($atualizar) {
        $sql = mysqli_query($link, "UPDATE tb_postagens SET postagem  = '$atualizar' WHERE id_postagem = '$id_postagem'");        // criando atualização em 'tb_postagens' do banco de dados 'bd_site'
        header("location:user.php?page=2");     // depois da alteração o usuario será redirecionado para tela de exibição
    } else {
        header("location:user.php");
    }

?>