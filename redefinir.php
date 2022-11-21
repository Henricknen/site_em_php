<?php

    require_once 'conexao.php';

    $email = $_POST['email'];
    $dica = $_POST['dica'];

    $sql = mysqli_query($link, "select * from tb_site where email = '$email'");        // fazendo vrificsç~so se email existe no banco de dados
    while($dados =mysqli_fetch_array($sql)) {       // a variavel '$dados' funcionará como um array
        $e = $dados['email'];
    }

    if($e == $email) {
        echo "email existe";
    } else {
        echo "<a href='redefinr_senha.php'>Voltar a tela de refinição</a>";
    }

?>