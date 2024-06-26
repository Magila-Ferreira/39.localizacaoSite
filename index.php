<!DOCTYPE html5>

<?php
ob_start();
// Arquivo define o idioma do post
include_once './funcoes/definePostIndex.php';
ob_end_clean();
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensIndex["titulo_pagina"]; ?></title>

    <!-- BootsTrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- myCSS -->
    <link defer rel="stylesheet" type="text/css" href="style/geral.css">
    </link>
</head>

<body>
    <header class="header">
        <section class="logotipo">
            <a href="#">
                <img class="logo_green" src="img/8679752_recycle_line_icon (1).png">
            </a>
        </section>
        <aside class="menu">
            <a class="menu-navBar disabled" href="#"><?= $mensNavBar["home"] ?></a>
            <a class="menu-navBar" href="view/publicar.php"><?= $mensNavBar["publicar"] ?></a>
            <a class="menu-navBar" href="view/sobreNos.php"><?= $mensNavBar["sobreNos"] ?></a>
        </aside>

        <aside>

        </aside>

        <section class="icons">
            <!-- ADICIONAR ICONES DAS MÍDIAS SOCIAIS -->
            <a href="https://www.instagram.com/?hl=pt-br">
                <img class="icone_rede_social" src="img/instagram_icon.png">
            </a>
            <a href="https://pt-br.facebook.com/">
                <img class="icone_rede_social" src="img/facebook_icon.png">
            </a>
            <a href="https://www.youtube.com/">
                <img class="icone_rede_social" src="img/youtube_icon.png">
            </a>
        </section>
    </header>

    <main class="container">
        <h1 class="logo"><?= $mensNavBar["nome_pagina"] ?></h1>

        <div class="posts">
            <!-- POSTS DINÂMICOS -->
            <?php

            for ($linha = 0; $linha < (count($matrizPosts)%6); $linha++) {
            ?>
                <section class="postagem">
                    <div class="texto_post" id="post">
                        <h2 class="titulo">
                            <?= $matrizPosts[$linha][1] ?>
                        </h2>
                        <p class="texto">
                            <?= $textoReduzido[$linha][0]?>[...]
                        </p>
                        <div>
                            <a class="link_post" href="view/leia.php?id=<?= $linha ?>"><?= $mensIndex["bt_leia-mais"]?></a>
                        </div>
                    </div>
                    <div class="imagem" id="imagem">
                        <img class="imagem_post" src="<?= carregarImagem('img/' . $matrizImagens[$linha][0])?>">
                    </div>
                </section>
            <?php
            }
            ?>
        </div>
    </main>
    <footer class="footer">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2">Gabriel Álvarez</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Gustavo S. Bragion</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Ian Pereira</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Jairo Ulloa</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Mágila M. S. Ferreira</a></li>
        </ul>
        <p class="text-center composição"><?= $mensFooter["copyright"] ?></p>
    </footer>
</body>

</html>