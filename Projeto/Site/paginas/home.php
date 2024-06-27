<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="banner" data-aos="fade-up">
        </div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-aos="fade-down">
                <div class="carousel-item active">

                    <a href="meu-jogo" title="Meu jogo" id="carousel-inner">
                        <img src="imagens/novobanner.jpg" class="d-block w-100" alt="Banner do jogo" id="formatar-carossel">
                    </a>
                </div>

                <div class="carousel-item">
                    <img src="imagens/bannerforza.jpg" class="d-block w-100" alt="Banner do jogo" id="formatar-carossel">
                </div>
                <div class="carousel-item">
                    <img src="imagens/bannerlenhador.jpg" class="d-block w-100" alt="Banner do jogo" id="formatar-carossel">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h4 class="text-center">outros jogos</h4>
        <div class="row justify-content-center font">
            <div class="card m-3 centro" style="width: 22rem;" id="gridJogos" data-aos="fade-right">
                <img src="imagens/novobanner.jpg" class="card-img-top" alt="..." id="imagem-logo">
                <div class="card-body">
                    <h4 class="card-title">Jogo 1</h4>
                    <a href="meu-jogo" class="btn btn-secondary" id="margin">Informações</a>
                </div>
            </div>

            <div class="card m-3 centro" style="width: 22rem;" id="gridJogos" data-aos="fade-up">
                <img src="imagens/bannerforza.jpg" class="card-img-top" alt="..." id="imagem-logo">
                <div class="card-body">
                    <h4 class="card-title">Jogo 2</h4>
                    <a href="jogo2" class="btn btn-secondary" id="margin">Informações</a>
                </div>
            </div>

            <div class="card m-3 centro" style="width: 22rem;" id="gridJogos" data-aos="fade-left">
                <img src="imagens/bannerlenhador.jpg" class="card-img-top" alt="..." id="imagem-logo">
                <div class="card-body">
                    <h4 class="card-title">Jogo 3</h4>
                    <a href="jogo3" class="btn btn-secondary" id="margin">Informações</a>
                </div>
            </div>
        </div>


        <!--</div> API
        <h2>Outros jogos</h2>
        <div class="row">
            <?php
            $url = "https://www.cheapshark.com/api/1.0/games?title=batman";
            $dados = file_get_contents($url);
            $dados = json_decode($dados);

            foreach ($dados as $jogo) {
            ?>
                <div class="col-12 col-md-2 text-center">
                    <div class="card">
                        <img src="<?php echo $jogo->thumb; ?>" alt="<?php echo $jogo->title; ?>" class="text-center" class="w-100">
                        <p class="title">
                            <strong>
                                <?php echo $jogo->external; ?>
                            </strong>
                        </p>
                        <p class="btn btn-success">Preço: $<?php echo $jogo->cheapest; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>