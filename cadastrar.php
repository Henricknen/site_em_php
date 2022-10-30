<?php

    include "conexao.php";
    $nome = $_POST ['nome'];        // armazenando dados do formulario nestas variaveis 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dica  = $_POST['dica'];

    // variaveis com arquivos do upload
    $capa = $_FILES['capa'] ['name'];
    $capa_tipo = $_FILES ['capa'] ['type'];

    $perfil = $_FILES['perfil'] ['name'];
    $perfil_tipo = $_FILES['perfil'] ['type'];
    

    // imprimindo os valores armazenados na variaveis
    echo "Nome".$nome."<br>";
    echo "Email".$email."<br>";
    echo "Senha".$senha."<br>";
    echo "Dica".$dica."<br>";

    echo "Capa".$capa."<br>";
    echo "tipo de arquivo da capa: ".$capa_tipo."<br>";

    echo "Foto de perfil".$perfil."<br>";
    echo "Tipo de arquivo da foto de perfil: ".$perfil_tipo."<br>";

    $sql = "insert into tb_site(nome,email,senha,dica,perfil,capa) values
('$nome','$email','$senha','$dica','$perfil','$capa');";
mysqli_query($link,$sql);     // para cadastrar este dados no banco de dados 'bd_site' dentro da tabela 'tb_site' usa a função 'mysqli_query'

echo "<a href = 'cadastro.php'>Cadastrar outro Cliente</a>";

?>