<?php

    session_start();    
    require_once 'verifica_login.php';

    $atualizar = $_POST['atualiza'];
    if($atualizar) {

    } else {
        header('location:user.php');
    }

?>