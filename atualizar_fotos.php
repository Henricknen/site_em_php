<?php

    require_once 'conexao.php';     // inclusão do arqquivo de conexão
    SESSION_START();        // iniçiando sessão
    require_once 'verifica_login.php';      // verificando qual usuario está logado e pega informações so usúario


    $capa = $_FILES['capa'] ['name'];
    $perfil = $_FILES['perfil'] ['name'];
    
    $foto_perfil = "users/$email_log/$perfil_log";      // caminho da imagem que será atualizada dentro da variável '$foto_perfil'
    $foto_capa = "users/$email_log/$capa_log";              // adiçionando o caminho da foto que será atualizada na variável '$foto_capa'

    if($perfil_log != "perfil.png" && $capa_log != "capa.png") {      // fazendo uma verificação
        unlink($foto_perfil);       // se existir foto gravadas na pasta serâo apagadas para depois fazer o upload
        unlink($foto_capa);
        
        mysqli_query($link, "update tb_site set capa = '$capa', perfil = '$perfil' where id_user = '$id_log'");      // fazendo um a atualização na 'tb_site' e setando os campos 'capa' e 'perfil'
        move_uploaded_file($_FILES['capa']['tmp_name'], "users/" .$email_log. "/" .$capa);       // função de pegar as imagens e colocar na pasta do usuario logado 
        move_uploaded_file($_FILES['perfil']['tmp_name'], "users/" .$email_log. "/" .$perfil);
        header('location: user.php');       // depois da atualização retornará para a página do usúario 'user.php'
    } else {        // caso contrario será feito apenas o upload das fotos
        mysqli_query($link, "update tb_site set capa = '$capa', perfil = '$perfil' where id_user = '$id_log'");      // fazendo um a atualização na 'tb_site' e setando os campos 'capa' e 'perfil'
        move_uploaded_file($_FILES['capa']['tmp_name'], "users/" .$email_log. "/" .$capa);       // função de pegar as imagens e colocar na pasta do usuario logado 
        move_uploaded_file($_FILES['perfil']['tmp_name'], "users/" .$email_log. "/" .$perfil);
        header('location: user.php');       // depois da atualização retornará para a página do usúario 'user.php'

    }

    

?>