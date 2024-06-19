<!DOCTYPE html lang="pt-BR">
<?php
include_once './funcoes/idioma.php';
?>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensIndex["nome_pagina"]; ?></title>

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
            <a href="index.php">
                <img class="logo_green" src="img/8679752_recycle_line_icon (1).png">
            </a>
        </section>
        <aside class="menu">
            <a href="index.php"><?= $mensNavBar["home"] ?></a>
            <a href="view/publicar.php"><?= $mensNavBar["publicar"]?></a>
            <a href="view/sobreNos.php"><?= $mensNavBar["sobreNos"]?></a>
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
        <h1 class="logo"><?= $mensIndex["nome_pagina"]?></h1>

        <div class="posts">
            <!-- Post 1 -->
            <section class="postagem">
                <div class="texto_post" id="post">
                    <h2 class="titulo"><?= $mensIndex["titulo_post1"]?></h2>
                    <p class="texto">
                    <?= $mensIndex["texto_post1"]?>
                    </p>
                    <a class="link_post" href="view/leia.php"><?= $mensIndex["bt_leia-mais"]?></a>
                </div>
                <div class="imagem" id="imagem">
                    <img class="imagem_post" src="img/reciclagem.png">
                </div>
            </section>

            <!-- Post 2 -->
            <section class="postagem">
                <div class="texto_post" id="post">
                    <h2 class="titulo"><?= $mensIndex["titulo_post2"]?></h2>
                    <p class="texto"><?= $mensIndex["texto_post2"]?>
                    </p>
                    <a class="link_post" href="./view/leia.php"><?= $mensIndex["bt_leia-mais"]?></a>
                </div>
                <div class="imagem" id="imagem">
                    <img class="imagem_post" src="img/RSU.jpg">
                </div>
            </section>

            <!-- Post 3 -->
            <section class="postagem">
                <div class="texto_post" id="post">
                    <h2 class="titulo"><?= $mensIndex["titulo_post3"]?></h2>
                    <p class="texto">
                    <?= $mensIndex["texto_post3"]?>
                    </p>
                    <a class="link_post" href="./view/leia.php"><?= $mensIndex["bt_leia-mais"]?></a>
                </div>
                <div class="imagem" id="imagem">
                    <img class="imagem_post" src="img/GR.jpg">
                </div>
            </section>
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
        <p class="text-center composição"><?= $mensFooter["copyright"]?></p>
    </footer>
</body>

</html>