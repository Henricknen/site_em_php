<?php

    require_once 'conexao.php';     // inclusão do arqquivo de conexão
    SESSION_START();        // iniçiando sessão
    require_once 'verifica_login.php';      // verificando qual usuario está logado

    echo "Arquivos de uploads de fotos para atualização<br>";

    $capa = $_FILES['capa'] ['name'];
    $perfil = $_FILES['perfil'] ['name'];

    echo "Nome: $nome_log<br>";
    echo "Foto da capa: $capa <br>";
    echo "Foto de perfil: $perfil <br>";

?>