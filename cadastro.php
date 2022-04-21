<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="icon" href="/chilipeppers.png">
    <title>Chili Peppers Form</title>
</head>
<body>
    <!-- ESTE ARQUIVO IRÁ APARECER QUANDO O BOTÃO SUBMIT FOR ACIONADO-->

    <?php
        //SCRIPT UTILIZADO PARA ENVIAR OS DADOS PARA O BANCO DE DADOS

        include("conexao.php");//IMPORT DO ARQUIVO DE CONEXÃO COM O BANCO

        //RECEBE OS DADOS DIGITADOS DA PAG INDEX.HTML
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $idade=$_POST['idade'];
        $telefone=$_POST['telefone'];
        $album=$_POST['album'];
        $integrante=$_POST['integrante'];

        

        $sql = "INSERT INTO cadastro(nome, sobrenome, idade, telefone, album, integrante) 
        VALUES('$nome', '$sobrenome', '$idade', '$telefone', '$album', '$integrante')";

        if(mysqli_query($conexao, $sql)){
            $mensagem = "Usuário Cadastrado com Sucesso";

        }else {
            $mensagem = "Erro".mysqli_connect_error($conexao);
        }
    ?>

    <div class="container">
        <img src="chilipeppers.png" width="100px" style="float: left;">
        <h1><?php echo $mensagem?></h1>
        <a href="index.html"><button class="button">Voltar</button></a>
    </div>
    
</body>
</html>
