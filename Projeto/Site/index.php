<?php
$base_url = "curl --location 'https://www.cheapshark.com/api/1.0/games?id=612'";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site - Projeto Tech Academy 2º modulo</title>

    <base href="http://www.gabrielrezendecoelho.x10.mx">
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
                <li><a href="home" title="Home" id="negrito">Home</a></li>
                <li><a href="sobre" title="Sobre" id="negrito">Sobre</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="negrito">
                        Jogos
                    </a>
                    <ul class="dropdown-menu" id="grid-nav">

                        <li><a class="dropdown-item hover" href="meu-jogo" id="negrito2">Jornada de Coragem</a></li>
                        <li><a class="dropdown-item hover" href="jogo2" id="negrito2">Forza Horizon 5</a></li>
                        <li><a class="dropdown-item hover" href="jogo3" id="negrito2">Lenhador da Redenção</a></li>
                        <li><a class="dropdown-item hover" href="api" id="negrito2">API de jogos</a></li>

                    </ul>
                </li>
                <li><a href="contato" title="Contato" id="negrito">Contato</a></li>
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