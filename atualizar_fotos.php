<?php

    require_once 'conexao.php';     // inclusão do arqquivo de conexão
    SESSION_START();        // iniçiando sessão
    require_once 'verifica_login.php';      // verificando qual usuario está logado


    $capa = $_FILES['capa'] ['name'];
    $perfil = $_FILES['perfil'] ['name'];


    mysqli_query($link, "update tb_site set capa = '$capa', perfil = '$perfil' where id_user = '$id_log'");      // fazendo um a atualização na 'tb_site' e setando os campos 'capa' e 'perfil'

?>