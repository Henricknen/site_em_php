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

    <section id="form">
            <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Digite o nome" class="entradas" required><br>
                <label>E-mail:</label>
                    <input type="text" name="email" placeholder="Digite o e-mail" class="entradas" required><br>
                <label>Senha:</label>
                    <input type="password" name="senha" placeholder="Digite uma senha" class="entradas" required><br>
                <label>Dica:</label>
                    <input type="password" name="dica" placeholder="Digite uma dica" class="entradas" required><br>
                <label>Imagem de Capa:</label>
                    <input type="file" name="capa" placeholder="" class="entradas" required><br>
                <label>Imagem do perfil</label>
                    <input type="file" name="perfil" placeholder="" class="entradas" required><br>
                <label>
                    <input type="submit" value="Cadastrar" class="bt_form">
                </label>
            </form>
            <a href="index.php">Logar</a>
    </section>
    
</body>
    </html>