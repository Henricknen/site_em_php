<header>
    <h1><?php echo $nome_log; ?></h1>
</header>
<figure>
    <!-- <img src="users/email/imagem.png">     caminho da imagem -->
    <img src="<?php echo "users/$email_log/$perfil_log" ?>">
</figure>

<nav>
    <ul id="mais">
        <li><img src="img/catalogoo.png" id="menu">
            <ul id="pizza_menu">
                <li><a href="comprar.php">Upload de foto</a></li>
                <li><a href="pagamento.php">Remover foto</a></li>
            </ul>
        </li>
    </ul>
</nav>

<section id="menu_perfil">
    <a href="user.php?page=1">Sobre</a>
    <a href="user.php?page=2">Atividades</a>
    <a href="user.php?page=3">Nova postagem</a>
    <a href="logout.php">Sair</a>
</section>