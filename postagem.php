<?php

    require_once 'verifica_login.php';      // para acessar esta página o usuario tem que estar logado
    header('content-type: text/html; charset=utf-8');

?>
<form action="postar.php" method="post">
    <label>
        Postagem:<br><br>
        <textarea name="postagem" rows="10" cols="50" required></textarea><br><br>
        <input type="submit" value="Publicar">
    </label>
</form>

    
    