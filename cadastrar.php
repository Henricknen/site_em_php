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

    // loacal das imagens dos clientes cadastrados
    $pasta = "users";
    

    // imprimindo os valores armazenados na variaveis
    // echo "Nome".$nome."<br>";
    // echo "Email".$email."<br>";      // visualizar se os dados passados estão chegando
    // echo "Senha".$senha."<br>";
    // echo "Dica".$dica."<br>";

    // echo "Capa".$capa."<br>";
    // echo "tipo de arquivo da capa: ".$capa_tipo."<br>";

    // echo "Foto de perfil".$perfil."<br>";
    // echo "Tipo de arquivo da foto de perfil: ".$perfil_tipo."<br>";

// $sql = "insert into tb_site(nome,email,senha,dica,perfil,capa) values        // está comentado para poder fazer testes necessarios e não fazer inserções no 'bd site'
// ('$nome','$email','$senha','$dica','$perfil','$capa');";
// mysqli_query($link,$sql);       // para cadastrar este dados no banco de dados 'bd_site' dentro da tabela 'tb_site' usa a função 'mysqli_query'

// upload das imagens     // entrando na $pasta 'user' e $capa é o 'arquivo'
move_uploaded_file($_FILES['capa']['tmp_name'], $pasta."/".$capa);       // função de pegar as imagens e colocar na variavel "$pasta"

move_uploaded_file($_FILES['perfil']['tmp_name'], $pasta."/".$perfil);

echo "<a href = 'cadastro.php'>Cadastrar outro Cliente</a>";

?>