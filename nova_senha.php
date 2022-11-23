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
            <form action="cadastrar_nova_senha.php" method="post">
                <label>Nova Senha:</label>
                    <input type="password" name="senha" placeholder="Digite a nova senha" class="entradas" required><br>
                <label>
                <!-- <label>Confirmar senha:</label>
                    <input type="password" name="confirmar" placeholder="Repeitir senha" class="entradas" required><br> -->
                <label>
                    <input type="submit" value="Nova Senha" class="bt_form">
                </label>
            </form>
    </section>
    
</body>
    </html>