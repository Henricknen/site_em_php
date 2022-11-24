<?php

    SESSION_START();
    require_once 'verifica_login.php';      // para acessar esta página o usuario tem que estar logado
    $id_update = $_GET['id_post'];
    echo "id da postagem que será atualizada $id_update<br>";
    header('content-type: text/html; charset=utf-8');

    require_once('conexao.php');        // pegar os dados do formulario de postagem
    $sql  = "select * from tb_postagens where id_postagem = '$id_update'";       // fazebdo consulta na tabela 'tb_postagens' do banco de dados
    $result = mysqli_query($link, $sql);     // '$link' é o link da conexão com o banco de dados e '$sql' é a variável que seleciona os dados da tabela do banco de dados
    while($text_update = mysqli_fetch_array($result)) {
        $text = $text_update['postagem'];
    }

?>

        <form action="atualizar.php" method="post">
            <label>
                Atualizar:<br><br>
                <textarea name="atualiza" rows="10" cols="50" required><?php echo $text; ?></textarea><br><br>
                <input type="hidden" name="id" value="<?php echo $id_update;?>">
                <input type="submit" value="Atualizar">
            </label>
        </form>

    
    