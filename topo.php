<header>
    <h1><?php echo $nome_log; ?></h1>
</header>
<figure id="img_perfil">
    <!-- <img src="users/email/imagem.png">     caminho da imagem -->
    <img src="<?php
        if($perfil_log == "perfil.png") {       // se '$perfil_log' estiver este valor será apresebntada a imagem abaixo
            echo "img/$perfil_log";
        } else {                                // caso conttrario exibirá a imagem abaixo
            echo "users/$email_log/$perfil_log";        // caminho da pasta do usuario
        }
      ?>" id="perfil">
</figure>

<nav>
    <ul id="mais">
        <li><img src="img/catalogoo.png" id="menu">
            <ul id="pizza_menu">
                <li><a href="atualizar_fotos.php">Atualizar</a></li>
                <li><a href="remover_fotos.php">Remover fotos</a></li>
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