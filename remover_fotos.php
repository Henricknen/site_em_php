<?php

    SESSION_START();        // iniciando a sessão
    require_once 'conexao.php';
    require_once 'verifica_login.php';

    $foto_perfil = "users/$email_log/$perfil_log";      // caminho da imagem que será removida dentro da variável '$foto_perfil'
    $foto_capa = "users/$email_log/$capa_log";


    unlink($foto_perfil);       // fazendo remoção das fotos
    unlink($foto_capa);     // a função 'unlink'pede uma variável com o caminho que ira ser excluido

    $sql = "UPDATE tb_site set perfil = 'perfil.jpg', capa = 'capa.jpg' WHERE id_user = 'id_log'";    // atualização da tabela 'tb_site'
    mysqli_query($link, $sql);

    echo "<br><a href= 'user.php'>Voltar a tela principal</a>";

?>