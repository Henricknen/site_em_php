<?php

    require_once 'conexao.php';

    $email = $_POST['email'];
    $dica = $_POST['dica'];


    if($email != "") {        // criando uma verificação de variáveis prenchidas
        // verificando 'select' se '$email' for diferente de vazio
        $sql = mysqli_query($link, "select * from tb_site where email = '$email'");        // fazendo verificsção se email existe no banco de dados
    while($dados = mysqli_fetch_array($sql)) {       // a variavel '$dados' funcionará como um array
        $e = $dados['email'];
        $d = $dados['dica'];
        $s = $dados['senha'];
    }
        // verificando se '$mail' e '$dica' são iguais aos dados cadastrados
        if($e == $email && $dica == $d) {
            echo "Senha: $s<br>";
            echo "<a href='nova_senha.php'>Criar nova senha</a>";
        } else {
            echo "<a href='redefinir_senha.php'>Voltar a tela de refinição</a>";
        }
    } else {
        header('location: redefinir_senha.php');
    }



?>