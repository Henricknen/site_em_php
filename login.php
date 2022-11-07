<?php

// arquivo de login
require_once 'conexao.php';     // fazendo a inclusão do arquivo de 'conexao.php'

$login = $_POST["login"];       // variavel '$login' recebe o que vem do campo que tem name 'login'
$senha = $_POST["senha"];                // a variavel '$senha' recebe o que vem do campo name 'senha'

if(isset($login) && isset($senha)) {       // se comparando estás variaveis e derem verdadeiro ai faz a consulta
    $sql =mysqli_query($link, "select * from tb_site WHERE email = '$login'");     // selecionando todos os campos da tabela 'tb_site' e verificando se o que tem no campo 'email' é igual ao que está dentro de '$login'
    while($dados = mysqli_fetch_array($sql)) {      // 'mysqli_fetch_array' faz uma varredura dentro de um array
        $email = $dados['email'];       // guardando email do banco em '$email'
        $pass = $dados['senha'];    // guardando senh do banco em '$pass'
    }

    //inicio da verifição: se os dados batem com o que tem na tabela do banco de dados
    if($login == $email && $senha == $pass) {       // se o 'email' e senha que o usuario forneçeu for igual o 'email' e 'senha' do banco de dados 
        // inicia a 'sesssion'
        SESSION_START();
        // variaveis de sessão
        $_SESSION['login_user'] = $login;       // está variável será preenchida
        $_SESSION['senha_user'] = $senha;   // se as variáveis do formulario forem igual a do banco de dados será redireçionado para 'user.php'
        header('location: user.php');
    } else {
        header('location: index.php');
    }
    // fim da verificação

} else {
    header('location: index.php');       // se tentarem acesso direto será redirecionado para 'index.php' 
}

?>