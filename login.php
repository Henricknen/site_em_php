<?php

// arquivo de login
require_once "conexao.php";     // fazendo a inclusão do arquivo de 'conexao.php'

$login = $_POST["login"];
$senha = $_POST["senha"];

echo "Login do Usuario: $login<br>";
echo "Senha do usuario: $senha";

?>