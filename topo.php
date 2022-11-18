<header>
    <h1><?php echo $nome_log; ?></h1>
</header>
<figure id="img_perfil">
                            <!-- <img src="users/email/imagem.png">     caminho da imagem -->
    <img src="<?php
        if($perfil_log == "perfil.png") {       // se '$perfil_log' for igua a 'perfil.jpg' será usada uma imagem padrão da pasta 'img'
            echo "img/$perfil_log";
        } else {                                // se '$perfil_log' for diferente de 'perfil.jpg' será usada a imagem que usuario cadastrou
            echo "users/$email_log/$perfil_log";        // 'users' pasta criada de usuario cadastrado
        }
      ?>" id="perfil">

</figure>

<nav>
    <ul id="mais">
        <li><img src="img/catalogoo.png" id="menu">
            <ul id="pizza_menu">
                <li><a href="atualizar_fotos.php">Atualizar</a></li>
                <?php
                    if($perfil_log != "perfil.png" && $capa_log != "capa.png") {        // verificação
                ?>
                <li><a href="remover_fotos.php">Remover fotos</a></li>
                <?php }  ?>
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