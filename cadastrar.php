<?php

    // armazenando dados do formulario nestas variaveis
    require_once 'conexao.php';
    $nome = $_POST ['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dica  = $_POST['dica'];
    $cadastrar = false;


    // variaveis com arquivos do upload
    $capa = $_FILES['capa'] ['name'];
    $capa_tipo = $_FILES ['capa'] ['type'];

    $perfil = $_FILES['perfil'] ['name'];
    $perfil_tipo = $_FILES['perfil'] ['type'];

    // verificar se é possivel cadastrar
    if($nome != "" && $email != "" && $senha != "" && $dica != "" && $capa != "" && $perfil != "") {
        $cadastrar = true;      // se as variaveis de cima estiver prenchidas o cadastro estará habilitado
        
    } else {
        echo "Não pode deixar os campos vazios...<br>";
        echo "<a href=cadastro.php>Voltar</a><br>";
    }

    // loacal das imagens dos clientes cadastrados
    $pasta = $email;
    
    // criar pasta em php com base em uma verificação
    if(file_exists("users/".$pasta)) {
        // header("location:cadastro.php");        // se a pasta ja existir a variável cadastrar será 'false' impedindo novo cadastramento 
        $cadastrar =false;
        echo "Está pasta de cadastro já existe<br>";
        echo "<a href='cadastro.php'>Voltar a tela de cadastro<br></a>";
    } else {
        $cadastrar = true;
        mkdir("users/" .$pasta, 0777);     // função 'mkdir' permite a criação das pastas
        
    // imprimindo os valores armazenados na variaveis
    echo "Nome".$nome."<br>";
    echo "Email".$email."<br>";      // visualizar se os dados passados estão chegando
    echo "Senha".$senha."<br>";
    echo "Dica".$dica."<br>";

    echo "Capa".$capa."<br>";
    echo "tipo de arquivo da capa: ".$capa_tipo."<br>";

    echo "Foto de perfil".$perfil."<br>";
    echo "Tipo de arquivo da foto de perfil: ".$perfil_tipo."<br>";
    }


if($cadastrar) {     // se 'cadastrar' estiver hablitado será permitido o cadastro na tabela 'tb_site'do banco de dados 'bd_site'
    $sql = "insert into tb_site(nome,email,senha,dica,perfil,capa) values
    ('$nome','$email','$senha','$dica','$perfil','$capa');";
    mysqli_query($link, $sql);       // para cadastrar este dados no banco de dados 'bd_site' dentro da tabela 'tb_site' usa a função 'mysqli_query'
    echo "<a href='index.php'>Ir para tela de login</a><br>";
    echo "<a href = 'cadastro.php'>Cadastrar outro Cliente</a>";

    // upload das imagens     // entrando na $pasta 'user' e $capa é o 'arquivo'
    move_uploaded_file($_FILES['capa']['tmp_name'], "users/" .$pasta."/" .$capa);       // função de pegar as imagens e colocar na variavel "$pasta"

    move_uploaded_file($_FILES['perfil']['tmp_name'], "users/" .$pasta."/" .$perfil);       // inserindo imagem dentro da 'pasta de email' que está dentro da pasta 'users'
    echo "<a href= 'cadastro.php'>Cadastrar outro usuario...</a>";

} 




?>