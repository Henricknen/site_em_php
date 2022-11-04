<?php

// arquivo de login
include 'conexao.php';     // fazendo a inclusão do arquivo de 'conexao.php'

// iniciar 'sesssion'
SESSION_START();

$login = $_POST["login"];       // variavel '$login' recebe o que vem do campo que tem name 'login'
$senha = $_POST["senha"];                // a variavel $senha recebe o que vem do campo name 'senha'

// variaveis de sessão
$_SESSION['login_user'] = $login;
$_SESSION['senha_user'] = $senha;

if(isset($_SESSION['login_user']) && isset($_SESSION['senha_user'])) {       // verificando se a variavel esta cadastrada no banco de dados
    $sql =mysqli_query($link, "select * from tb_site WHERE email = '$login'");     // selecionando todos os campos da tabela 'tb_site' 
    while($dados = mysqli_fetch_array($sql)) {      // 'mysqli_fetch_array' faz uma varredura dentro de um array
        $email = $dados['email'];
        $pass = $dados['senha'];
    }

    //inicio da verifição: se os dados batem com o que tem na tabela do banco de dados
    if($login == $email && $senha == $pass) {
        header('location: user.php');
    } else {
        header('location: index.php');
    }
    // fim da verificação

} else {
    header('location: index.php');       // se tentarem acesso direto será redirecionado para 'index.php' 
}

?>