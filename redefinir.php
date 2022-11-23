<?php

    require_once 'conexao.php';

    $email = $_POST['email'];
    $dica = $_POST['dica'];


    if($email != "") {        // criando uma verificação de variáveis prenchidas
        // verificando 'select' se '$email' for diferente de vazio
        $sql = mysqli_query($link, "select * from tb_site where email = '$email'");        // fazendo verificação se email existe no banco de dados
    while($dados = mysqli_fetch_array($sql)) {       // a variavel '$dados' funcionará como um array
        $e = $dados['email'];
        $d = $dados['dica'];
        $s = $dados['senha'];
    }

        $contagem = mysqli_num_rows($sql);       // verificando a quantiade de linhas guardada dentro de '$sql'
        echo "Quantidade de registros localizados: $contagem<br>";

        if($contagem) {     // 1 true 2 true 3 true.... 0 false
            echo "E-mail existe<br>";

                   // verificando se '$mail' e '$dica' são iguais aos dados cadastrados
            if($e == $email && $dica == $d) {
                echo "Senha: $s<br>";
                echo "<a href='nova_senha.php?email_user=$e'>Criar nova senha</a>";       // '?' passa a varável 'email_user' junto com endereço 'nova_senha.php'
            } else {
                header('location: redefinir_senha.php');
            }

        } else {
            echo "Nada foi encontrado";
        } 
    } else {
        header('location: redefinir_senha.php');
    }

?>