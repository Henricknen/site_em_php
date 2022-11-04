<?php

require_once 'conexao.php';

SESSION_START();        // recuperando sessão

//'$l' de login
$l = isset($_SESSION["login_user"])?$_SESSION["login_user"]:"";     // verificando se 'login_user' esta gravado no banco de dados

// '$s' de senha
$s = isset($_SESSION["senha_user"])?$_SESSION["senha_user"]:"";

if($l != "" && $s != "") {
    $dados = mysqli_query($link, "select * from tb_site WHERE email = '$l'");       // selecionando todos os campos da tabela 'tb_site' on o 'email' é igual a '$l'
    while($d = mysqli_fetch_array($dados)) {      // 'mysqli_fetch_array' faz uma varredura dentro de um array '$dados'
        $nome_log = $d['nome'];
        $email_log = $d['email'];       // o que for encontrado na varredura será guardado dentro do array '$d'
        $senha_log = $d['senha'];
        $dica_log = $d['dica'];
    }
    
} else {
    header('location: index.php');    
}

?>