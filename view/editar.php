<!DOCTYPE html>

<?php
include_once '../funcoes/idiomaView.php';
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensEditar["titulo_pagina"] ?></title>

    <!-- BootsTrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- myCSS -->
    <link defer rel="stylesheet" type="text/css" href="../style/geral.css">
    </link>
    <link defer rel="stylesheet" type="text/css" href="../style/publicar.css">
    </link>
</head>

<body>
    <header class="header">
        <section class="logotipo">
            <a href="../index.php">
                <img class="logo_green" src="../img/8679752_recycle_line_icon (1).png">
            </a>
        </section>
        <aside class="menu">
            <a class="menu-navBar" href="../index.php"><?= $mensNavBar["home"] ?></a>
            <a class="menu-navBar disabled" href="#"><?= $mensNavBar["publicar"] ?></a>
            <a class="menu-navBar" href="sobreNos.php"><?= $mensNavBar["sobreNos"] ?></a>
        </aside>
        <section class="icons">
            <!-- ADICIONAR ICONES DAS MÍDIAS SOCIAIS -->
            <a href="https://www.instagram.com/?hl=pt-br">
                <img class="icone_rede_social" src="../img/instagram_icon.png">
            </a>
            <a href="https://pt-br.facebook.com/">
                <img class="icone_rede_social" src="../img/facebook_icon.png">
            </a>
            <a href="https://www.youtube.com/">
                <img class="icone_rede_social" src="../img/youtube_icon.png">
            </a>
        </section>
    </header>

    <main class="container">
        <h1 class="logo"><?= $mensNavBar["nome_pagina"] ?></h1>
        <form id="publicacao" action="../index.php" method="post">

            <h5 class="sub-titulo"><?= $mensPublicar["sub-titulo_pagina"] ?></h5>
            <div class="linha"></div>   

            <div class="cabeçalho_post">
                
                <div class="campo_imagem">
                    <h6 class="imagem_post"><?= $mensPublicar["imagem_post"] ?> </h6>
                    <input id="imagem" name="imagem" type="file">
                </div>

                <div class="campo_titulo">
                    <h6> <?= $mensPublicar["titulo_post"] ?> </h6>
                    <input type="text" name="titulo" id="titulo">
                </div>
            </div>

            <div class="corpo_post">
                <h6> <?= $mensPublicar["texto_post"] ?> </h6>
                <textarea id="texto" name="texto"></textarea>
            </div>

            <div class="footer_post">
                <h6> <?= $mensPublicar["autor_post"] ?> </h6>
                <input class="autor_post" type="text" name="autor" id="autor" autocomplete="on">

                <h6> <?= $mensPublicar["data_post"] ?> </h6>
                <input class="data_post" type="text" name="data" id="data" autocomplete="on">

                <h6> <?= $mensPublicar["email_post"] ?> </h6>
                <input class="email_post" type="text" name="email" id="email" autocomplete="on">

                <div class="button_post">
                    <button type="submit" name="Enviar" id="enviar"><?= $mensEditar["bt_editar"] ?></button>
                </div>
            </div>
        </form>
    </main>
    <footer class="footer">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2">Gabriel Álvarez</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Gustavo B. Segur</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Ian Pereira</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Jairo Ulloa</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Mágila M. S. Ferreira</a></li>
        </ul>
        <p class="text-center composição"><?= $mensFooter["copyright"] ?></p>
    </footer>
</body>
</html>