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
            <form action="atualizar_fotos.php" method="post" enctype="multipart/form-data">

                <label>Imagem de Capa:</label>
                    <input type="file" name="capa" placeholder="" class="entradas" required><br>
                <label>Imagem do perfil</label>
                    <input type="file" name="perfil" placeholder="" class="entradas" required><br>
                <label>
                    <input type="submit" value="Atualizar" class="bt_form">
                </label>
            </form>
    </section>
    
</body>
    </html>