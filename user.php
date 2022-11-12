<?php 

    SESSION_START();
    require_once 'verifica_login.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>      <!-- cabeçalho -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="css/stylo.css">
</head>
<body>      <!-- seção principal -->

    <section id="principal">
        <section id="topo" style="background-image:url(<?php echo "users/$email_log/$capa_log"; ?>); background-size: cover;">     <!-- header, a propriedade 'background-image' permite iserir uma imagem como plano de fundo -->
            <?php require_once 'topo.php'; ?>        <!-- fazendo a inclusão do arquivo 'topo.php' -->
        </section>

        <section id="conteudo">
            <?php require_once 'conteudo.php'; ?>        <!-- fazendo a inclusão do arquivo 'conteudo.php' -->
        </section>

        <section id="rodape">       <!-- footer -->
            <?php require_once 'rodape.php'; ?>        <!-- fazendo a inclusão do arquivo 'rodape.php' -->
        </section>
    </section>
    
</body>
    </html>