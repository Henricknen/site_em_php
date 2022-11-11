<?php

    require_once 'conexao.php';
    // include "conexao.php";
    $sql = "select * from tb_postagens where id_user = '$id_log'";      // selecionando todos os campos da tabela 'tb_postagens' onde o 'id_user' é igual ao a 'id_log'
    $postagens = mysqli_query($link, $sql);        // o que está consulta será guadado em '$postagens' criada
    echo "<br>";
    while($dados = mysqli_fetch_array($postagens)) {        // fazendo uma varedura na variável '$postagens' e armazenando dentro de '$dados'
        echo "<p class='posts'>$dados[id_postagem]: $dados[postagem]
        <a href= 'update.php?id_post=$dados[id_postagem]'>Atualizar postagens...</a>
        </p>";
    }
?>