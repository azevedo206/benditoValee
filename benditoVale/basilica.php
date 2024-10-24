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

<head>
    <title>Bendito Vale</title>
</head>

<body>
    <!--CABECALHO-->
    <nav class="navbar navbar-expand-md navbar-light ">

        <a href="IndexTCC.php">
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
                    <a href="IndexTCC.php" class="nav-link">INICIOㅤㅤ|ㅤㅤ</a>
                </li>
                <li class="nav-item">
                    <a href="sobre.php" class="nav-link">SOBREㅤㅤ|ㅤㅤ</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">LOGINㅤㅤ|ㅤㅤ</a>
                </li>
            </ul>
        </div>
    </nav>

    <hr>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 col-md-12 col-sm-12 borda2">
                <img class="basi img-fluid" src="imagem/basilicaAnoite.jpg"></a>
                <p class="texto_base">
                    CIDADE DE APARECIDA
                </p>

            </div>

            <div class="col-xl-4 col-md-12 col-sm-12 borda">
                <p class="titulo">
                    SANTUARIO NACIONAL <br> DE NOSSA SENHORA APARECIDA
                </p>
                <h3 class="horarios">Horários de Funcionamento</h3>
                <p class="horas">
                    Segunda a Sexta-Feira: 6h45 | 9h | 10h30
                </p>
                <p class="horas">
                    Sábado: 6h | 9h | 10h30 | 12h | 14h | 16h | 20h |
                </p>
                <p class="horas">
                    Domingo: 5h30 | 8h | 10h | 12h | 14h | 16h | 18h |
                </p>

                <a class="btn btn-primary avaliarbutton" href="avaliar.php">AVALIAR</a>

            </div>


            <div class="col-xl-4 col-md-12 col-sm-12 borda">
                <p class="Sobre"> História da Basilica</p>
                <p class="historia">
                    Considerada a maior Igreja Mariana do mundo, com capacidade de acolher mais de 30.000 a 45.000
                    pessoas em seu interior. O Santuario Nacional de Nossa Senhora da Conceição Aparecida teve sua
                    construção iniciada em 11 de novembro de 1955
                </p>

                <p class="Descricao"> Descrição:</p>
                <p class="historia">
                    Uma pequena capela foi erguida na região em que o primeiro milagre aconteceu para receber os
                    visitantes e fiéis. Só em 1930, ou seja, mais de 200 anos depois do ocorrido, o Vaticano, por meio
                    do Papa Pio XI, proclemou Nossa Senhora Aparecida como padroeira do Brasil.
                </p>
            </div>
        </div>

    </div>

    <footer>
        <div class="container-fluid rodape">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                    <p class="copyright">
                        &copy; 2024 Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>