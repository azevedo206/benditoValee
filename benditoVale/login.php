<?php
// se usuario clicou no botão entrar
if (count($_POST) > 0) {

    //iniciar sessão
    session_start();


    //conectar com BD
    require_once "conexao.php";
    $conexao = novaConexao();




    $sql = "SELECT * FROM cadastro
where email = :ul and senha = :us";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':ul', $_POST['email']);
    $stmt->bindValue(':us', $_POST['senha']);
    $stmt->execute();

    //Armazena o resultado da consulta no vetor resultado
    $resultado_consulta = $stmt->fetch();
    // caso consulta retorne uma linha
    //email e senha estao correto
    if ($stmt->rowCount() == 1) {
        //busca o nome de usuario
        $nome_usuario = $resultado_consulta[3];
        //armazena na session
        $_SESSION['nome_usuario'] = $nome_usuario;
        //direciona a pag  index.php
        header('location:IndexTCC.php');
    } else {

        echo 'dados incorretos! Email ou senha incorretos';

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
    defer></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Font Awesome - Icones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

<!-- CSS-->
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>Bendito Vale</title>

<head>
    <style>
        .conteudo_faleconosco {
            border-radius: 25px;
            /* deixa redondo */
            background-color: #2460b9;
            margin-top: 150px;
            margin-left: 450px;
            margin-right: 450px;
            padding: 20px;
            /* é o espaçamento dentro da div */
            color: #fff;
            text-align: center;
        }

        .conteudo_faleconosco h1 {
            text-align: center;
            padding-bottom: 20px;
            font-size: 35px;

        }

        .naocadastro {
            color: white;
        }
    </style>

</head>

<body>
    <!--CABECALHO-->
    <nav class="navbar navbar-expand-md navbar-light ">

        <a href="index.php">
            <img src="imagem/LogoBendita.png" class="navbar-brand" width="142">
        </a>

        <!-- configurar a responsividade: usar o botão-->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#barra-principal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- cria os itens da barra de navegação -->
        <div class="collapse navbar-collapse" id="barra-principal">
            <ul class="navbar-nav ml-auto">
                <!--ml-auto: alinhamento margem esquerda-->
                <li class="nav-item">
                    <a href="#" class="nav-link">INICIOㅤㅤ|</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SOBREㅤㅤ|ㅤㅤ</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <div class="conteudo_faleconosco">
        <h1>Login </h1>
        <form action="#" method="post">
            Email:
            <input type="text" size="50" placeholder="Digite o email" required  name="email">
            <br><br>
            Senha:
            <input type="password" size="50" placeholder="Digite sua senha" required  name="senha">
            <br><br>

            <br><br>
            <a href="indexTCC.html"><button class="btn btn-primary" type="submit">Entrar</button></a>
        </form>
        <br>
        <button class="btn" type="submit">
            <div class="col-12" id="link-container">
                <a href="cadastro.php" class="naocadastro"> Não possui uma conta ?</a>
            </div>
        </button>
    </div>
</body>