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
    <title>TCC</title>
</head>
 
<body>


    <!--CABECALHO-->

    <nav class="navbar navbar-expand-md navbar-light ">

        <a href="indexTCC.php">
            <img  src="imagem/LogoBendita.png" id="img_logo" height="110px" >
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
                    <a href="IndexTCC.php" class="nav-link">INICIOㅤㅤ|</a>
                </li>
                <li class="nav-item">
                    <a href="FaleConosco.php" class="nav-link">FALE CONOSCOㅤㅤ|</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">LOGINㅤㅤ</a>
                </li>
            </ul>
        </div>
    </nav>

    <hr>

    <div class="container-fluid mb-4" id="borda">
        <div class="col-12">
            <div class="carousel slide" id="carouselExampleAutoplaying" 
            data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagem/santaCeia.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item active">
                        <img src="imagem/MOSTEIRO.PNG" class="d-block w-100">
                    </div>
                    <div class="carousel-item active">
                        <img src="imagem/imagemSanta.jpg" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="P"> Qual cidade você gostaria de visitar do vale?</p>
    <br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 texto-ci">
                <a href="Aparecida.php" class="btn btn-outline-primary local">Aparecida</a>
            </div>

            <div class="col-2 texto-ci">
                <a href="roseira.php" class="btn btn-outline-primary local">Roseira</a>
            </div>

            <div class="col-2 texto-ci">
                <a href="lorena.php" class="btn btn-outline-primary local">Lorena</a>
            </div>

            <div class="col-2 texto-ci">
                <a href="saoJose.php" class="btn btn-outline-primary local">São José</a>
            </div>

            <div class="col-2 texto-ci">
                <a href="taubate.php" class="btn btn-outline-primary local">Taubaté</a>
            </div>

            <div class="col-2 texto-ci">
                <a href="cachoeiraP.php" class="btn btn-outline-primary local">Cachoeira P.</a>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-3 texto-ci">
                <a href="guaratingueta.php" class="btn btn-outline-primary local">Guaratinguetá</a>
            </div>

            <div class="col-3 texto-ci">
                <a href="pinda.php" class="btn btn-outline-primary local">Pindamonh...</a>
            </div>

            <div class="col-3 texto-ci">
                <a href="cacapava.php" class="btn btn-outline-primary local">Santa Branca</a>
            </div>

            <div class="col-3 texto-ci">
                <a href="tremembe.php" class="btn btn-outline-primary local">Tremembé</a>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-3 borda-img">
                <a href="basilica.php"><img class="img-um" src="imagem/basilica.jpg"></a>
                <p class="textoA">
                    Santuario Nacional
                </p>
                <p class="texto1">
                    Aparecida
                </p>
            </div>


            <div class="col-3 borda-img">
                <a href="roseira.php"><img class="img-um" src="imagem/mosteiro.webp"></a>
                <p class="textoB">
                    Mosteiro
                </p>
                <p class="texto2">
                    Roseira
                </p>
            </div>


            <div class="col-3 borda-img">
                <a href="basilica.php"> <img class="img-um" src="imagem/igrejaMatriz.jpg"></a>
                <p class="textoC"> Igreja Matriz</p>
                <p class="texto3">
                    São José dos Campos
                </p>
            </div>

            <div class="col-3 borda-img">
                <a href="basilica.php"> <img class="img-um" src="imagem/morroDoCruzeiro.webp"></a>
                <p class="textoD"> Morro do Cruzeiro</p>
                <p class="texto4">
                    Aparecida
                </p>
            </div>
        </div>
    </div>
    </div>



    <div class="jumbotram cor">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-6 borda-img">
                    <p class="p-vale-img">
                        Vale do Paraíba
                    </p>
                    <p class="p-img">

                        O Vale do Paraíba foi povoado a partir do final do século XVI,
                        com a chegada de colonos a procura de pedras preciosas e índios para escravizar,
                        que acabaram ali se fixando. Estes desbravadores foram embrenhando-se pelos vales e grotas,
                        abrindo caminhos, plantando roças e assinalando a presença colonizadora.
                        <br>
                        <br>
                        A situação geográfica da Região Metropolitana do Vale do Paraíba e Litoral Norte –
                        localizada entre os dois maiores centros produtores e consumidores do Brasil –
                        e as facilidades de acesso representados, principal e inicialmente, pela Rodovia Presidente Dutra e,
                        depois, pelas rodovias Ayrton Senna, Governador Carvalho Pinto e Dom Pedro I – foram fatores decisivos para 
                        a industrialização e o avanço tecnológico do Vale do Paraíba.
                        <br>
                        Caracterizada pela alta diversidade produtiva, especialmente industrial, e pelo alto potencial turístico,
                        a região está estrategicamente situada entre as duas regiões metropolitanas mais importantes do país: São Paulo e Rio de Janeiro.
                        <br>
                        <br>
                        Abriga um dos mais modernos complexos aeroespaciais do mundo, que tem como núcleo a Empresa Brasileira de Aeronáutica (Embraer),
                        e um conjunto de centros de pesquisa de alto nível, como o Centro Tecnológico da Aeronáutica (CTA),
                        o Instituto Tecnológico da Aeronáutica (ITA) e o Instituto Nacional de Pesquisas Espaciais (INPE).

                    </p>
                </div>

                <div class="col-6 borda-img">
                    <img class="img-dois" src="imagem/morro.webp">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid" id="tres-img">
        <div class="row">
            <div class="col-4 borda-img">
                <img class="img-tres" src="imagem/GrutaDELusdes.jpg">
                <p class="p-img-trio">Gruta de Nossa Senhora de Lourdes</p>
                <p class="texto-tres"> Localizado em Guaratinguetá,
                    Instalada em 1924 no pátio da Casa do Puríssimo Coração de Maria,
                    é obra de Monsenhor João Filippo, que erigiu esta gruta para Nossa Senhora de Lourdes (de quem era devoto).
                    <br>
                    Ele pediu à Santa “que fossem atendidos todos os pedidos de quem por ali passasse”.
                    Seus grandes atrativos são a Gruta de Nossa Senhora de Lourdes e o Rio Paraíba que passa ao lado.
                    Ponto turístico religioso de grande atração e numerosa frequência de romeiros.
                    <br>
                    Foi no dia 11 de fevereiro de 1858 que a jovem Bernadette Soubirous viu a Virgem Maria pela primeira vez,
                    na gruta de Massabielle, em Lourdes, na França. A primeira de dezoito aparições,
                    que se repetiram pelos dias que seguiram. Na última delas, a Boa Mãe se identificou, dizendo “Eu sou a Imaculada Conceição”.
                </p>
            </div>


            <div class="col-4 borda-img">
                <img class="img-tres" src="imagem/santuarioSaoTadeu.jpg">
                <p class="p-img-trio">ㅤ Santuário de São Judas Tadeu</p>
                <p class="texto-tres">
                O dia de São Judas Tadeu é comemorado em 28 de outubro, data de seu falecimento no ano 70.
                Judas Tadeu era primo de Jesus Cristo e foi um dos doze apóstolos. 
                O Santo é invocado nos momentos de angústia e desespero, sendo o padroeiro das causas perdidas e também do funcionário público. <br>
                São Judas Tadeu ressurgiu por volta do século XIV, com Santa Brígida, santa sueca, teóloga e mística. 
                Ela contou que teve um sonho em que Jesus disse que São Judas Tadeu resolveria qualquer causa impossível. 
                "Através dela, São Judas [Tadeu] ficou conhecido como o santo das causas impossíveis. <br>
                Foi com Ele que Judas e Simão conversaram longamente pelo caminho e somente reconheceram Jesus quando esse sentou-se e repartiu o pão da forma que Ele fizera anteriormente com eles, quando encarnado.
                </p>
            </div>

            <div class="col-4 borda-img">
                <img class="img-tres" src="imagem/CaminhoRosario.jpg">
                <p class="p-img-trio">ㅤ ㅤ ㅤCaminho do Rosario</p>
                <p class="texto-tres">
                O caminho do Rosário fica próximo ao Hotel Rainha do brasil e se constitui em uma trilha de 1.300 metros, 
                que liga a Basílica de Aparecida ao Porto de Itaguaçu, todo o trajeto margeia o Rio Paraíba do Sul, 
                local onde foi encontrada a imagem de Nossa Senhora, no ano de 1717 e ao longo do percurso existem 20 cenários.
                Começando o turismo religioso pela cidade, o Caminho do Rosário é uma parada obrigatória. Ligando a Cidade do Romeiro ao Porto Itaguaçu, 
                o trajeto, que foi revitalizado recentemente, conta a história da vida de Jesus Cristo com cenários que retratam os Mistérios do Rosário.
                As 38 placas, também instaladas nas rodovias, auxiliam na localização dos motoristas ao longo de 600 km, além de convidá-los 
                a conhecer os atrativos dessa importante rota que fomenta o turismo religioso no Estado.
                </p>
            </div>
        </div>
    </div>



    <div class="container">
        <h2>
            O Bendito Vale é para você!
        </h2>
        <p class="color">
            Conheça lugares incriveis pelo vale!
        </p>
   
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