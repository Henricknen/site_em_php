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
    $pasta = $email;
    
    // criar pasta em php com base em uma verificação
    if(file_exists("users/" .$pasta)) {
        // header("location:cadastro.php");        // se a pasta ja existir o usuario retornará para página de cadastro  
        echo "Está pasta de cadastro já existe<br>";
        echo "<a href='cadastro.php'>Voltar a tela de cadastro<br></a>";
    } else {
        mkdir("users/" .$pasta, 0777);     // função 'mkdir' permite a criação das pastas
    }

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
move_uploaded_file($_FILES['capa']['tmp_name'], "users/" .$pasta."/" .$capa);       // função de pegar as imagens e colocar na variavel "$pasta"

move_uploaded_file($_FILES['perfil']['tmp_name'], "users/" .$pasta."/" .$perfil);       // inserindo imagem dentro da 'pasta de email' que está dentro da pasta 'users'

echo "<a href = 'cadastro.php'>Cadastrar outro Cliente</a>";

?>