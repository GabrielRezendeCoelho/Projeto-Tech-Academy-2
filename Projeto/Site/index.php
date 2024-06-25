<?php
$base_url = "curl --location 'https://www.cheapshark.com/api/1.0/games?id=612'";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu jogo</title>

    <base href="http://localhost/projeto/site/"> <!-- ALTERAR PARA ENDEREÇO DO NOVO SERVIDOR-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="imagens/foto4.jpg">

</head>

<body>

    <?php
    $url = "https://www.cheapshark.com/api/1.0/games?title=batman";
    $dadosApi = file_get_contents($url);
    $dadosJogos = json_decode($dadosApi)
    ?>

    <header class="header">
        <a href="home" title="home" class="header-logo" data-aos="fade-right">
            <img src="imagens/logo2.png" alt="Jogo" id="logo">
        </a>

        <a href="javascript:showMenu()" title="Mostrar Menu" class="header-menu" data-aos="fade-left">
            <img src="imagens/menu.webp" alt="Menu">
        </a>

        <nav class="header-nav" data-aos="fade-left">
            <ul>
                <li><a href="home" title="Home">Home</a></li>
                <li><a href="sobre" title="Sobre">Sobre</a></li>
                <!--<li><a href="jogos" title="Jogos">Jogos</a></li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Jogos
                    </a>
                    <ul class="dropdown-menu" id="grid-nav">

                        <li><a class="dropdown-item hover" href="meu-jogo">Jornada de Coragem</a></li>
                        <li><a class="dropdown-item hover" href="jogo2">Jogo 1</a></li>
                        <li><a class="dropdown-item hover" href="jogo3">Jogo 2</a></li>

                    </ul>
                </li>
                <li><a href="contato" title="Contato">Contato</a></li>
            </ul>
        </nav>

    </header>

    <main>
        <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            // Separar o parâmetro por /
            $p = explode("/", $param);
        } else {
            $p = ["home"];
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo" && $jogo) {
            $pagina = "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>

    <footer class="footer">
        <p><strong>Copyright © Marca de <i>Gabriel Rezende coelho</i>. Todos os direitos reservados.</strong></p>
    </footer>

    <script>
        src = "js/bootstrap.bundle.min.js"
    </script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();

        function showMenu() {
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>
</body>

</html>