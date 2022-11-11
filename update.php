<?php

    SESSION_START();
    require_once 'verifica_login.php';      // para acessar esta página o usuario tem que estar logado
    $id_update = $_GET['id_post'];
    echo "id da postagem que será atualizada $id_update<br>";

?>
<form action="atualizar.php" method="post">
    <label>
        Atualizar:<br><br>
        <textarea name="atualiza" rows="10" cols="50" required></textarea><br><br>
        <input type="hidden" name="id" value="<?php echo $id_update; ?>">
        <input type="submit" value="Atualizar">
    </label>
</form>

    
    