<?php

require_once 'conexao.php';

SESSION_START();        // recuperando sessão

//'$l' de login
$l = isset($_SESSION['login_user'])?$_SESSION['login_user']:"";     // verificando se 'login_user' esta gravado no banco de dados

// '$s' de senha
$s = isset($_SESSION['senha_user'])?$_SESSION['senha_user']:"";

if($l != "" && $s != "") {
    
} else {
    header('location:index.php');    
}

?>