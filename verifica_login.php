<?php

require_once 'conexao.php';

SESSION_START();        // recuperando sessão

//'$l' de login
$l = $_SESSION["login_user"];       // a variavel '$l' recebe o que sta dentro da sessao 'user'

// '$s' de senha
$s = $_SESSION["senha_user"];

echo "login: $l<br>";
echo "senha: $s<br>";

?>