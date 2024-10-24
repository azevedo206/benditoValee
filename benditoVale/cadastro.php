<?php

if (count($_POST) > 0) {

    require_once "conexao.php";
    $conexao = novaConexao();

    try {

        $sql = "INSERT INTO cadastro (nome, email, telefone, cpf, senha) VALUES (:n, :e, :t, :c, :s)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':n', $_POST['nome']);
        $stmt->bindValue(':e', $_POST['email']);
        $stmt->bindValue(':t', $_POST['telefone']);
        $stmt->bindValue(':c', $_POST['cpf']);
        $stmt->bindValue(':s', $_POST['senha']);
        $stmt->execute();
        echo "Registro cadastrado com sucesso";

    } catch (PDOException $e) {

        echo 'Erro ao inserir registro' . $e->getMessage();

    }

    if ($stmt->rowCount() == 1) {
        //busca o nome de usuario
        $nome_usuario = $resultado_consulta[3];
        //armazena na session
        $_SESSION['nome_usuario'] = $nome_usuario;
        //direciona a pag  index.php
        header('location:login.php');
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

        .form-label {
            color: black;
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
        <h1>Cadastro </h1>

        <form action="#" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" name="nome" required  placeholder="Digite seu nome">
                <label for="nome" class="form-label">Digite seu nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" required  placeholder="Digite seu email">
                <label for="email" class="form-label">Digite seu email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefone" name="telefone" required  placeholder="Digite seu telefone">
                <label for="telefone" class="form-label">Digite seu Telefone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cpf" name="cpf" required  placeholder="Digite seu Cpf">
                <label for="cpf" class="form-label">Digite seu CPF</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="senha" name="senha" required  placeholder="Digite sua senha">
                <label for="senha" class="form-label">Digite sua Senha</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirmarsenha" required  name="confirmarsenha"
                    placeholder="confirmarsenha">
                <label for="confirmarsenha" class="form-label">Confirmar Senha</label>
            </div>

            <div class="form-check md-2">
                <input type="checkbox" class="form-check-input" value="termo" id="termo" name="termo">
                <label for="termo" class="form-check-label">
                    Você aceita os <a href="termos.html"></a> Termos de Serviços</label>
            </div>

            <br><br>
            <a href="login.php">
                <button class="btn btn-secondary" type="submit">
                    Cadastrar
                </button>
            </a>
            <br><br>
            <div class="col-12" id="link-container">
                <a href="login.php" class="naocadastro"> Já possui uma conta ?</a>
            </div>
        </form>
    </div>
</body>