<?php

$host = "localhost";
$user = "root";
$password = "";
$banco = "bd_site";

$link = mysqli_connect($host, $user, $password, $banco);        // esta variavel guarda o 'link' de conexão

if(!$link) {        // teste que será removido verifica se está realmente conectando com o banco de dados
    die ("Erro no arquivo de conexão: " . mysqli_connect_errno());
} 
echo "Não tem erro";
mysqli_close($link);

?>