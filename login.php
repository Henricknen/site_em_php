<?php

// arquivo de login
require_once "conexao.php";     // fazendo a inclusão do arquivo de 'conexao.php'

// iniciar 'sesssion'
SESSION_START();

$login = $_POST["login"];       // variavel '$login' recebe o que vem do campo que tem name 'login'
$senha = $_POST["senha"];                // a variavel $senha recebe o que vem do campo name 'senha'

// variaveis de sessão
$_SESSION['login_user'] = $login;
$_SESSION['senha_user'] = $senha;

if(isset($_SESSION['login_user']) && isset($_SESSION['senha_user'])) {       // verificando se a variavel esta setada
    echo "Sim";
} else {
    header('location:index.php');       // se tentarem acesso direto será redirecionado para 'index.php' 
}

echo "Login do Usuario: $login<br>";
echo "Senha do usuario: $senha";

?>