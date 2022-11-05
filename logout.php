<?php 

    SESSION_START();        // recuperando a sessão
    $email = $_SESSION["login_user"];

    unset($_SESSION["login_user"]);     // 'unset' remove(limpa) o que foi definido para esta variaveis de sessão
    unset($_SESSION["senha_user"]);
    header('location:index.php');

?>