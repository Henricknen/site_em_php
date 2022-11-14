<?php

    SESSION_START();        // iniciando a sessão
    require_once 'conexao.php';
    require_once 'verifica_login.php';

    $foto_perfil = "users/$email_log/$perfil_log";      // caminho da imagem que será removida dentro da variável '$foto_perfil'
    unlink($foto_perfil);       // a função 'unlink'pede uma variável com o caminho que ira ser excluido
    echo "<a href= 'user.php'>Voltar a tela principal</a>";

?>