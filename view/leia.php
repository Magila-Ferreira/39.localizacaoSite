<!DOCTYPE html>

<?php
ob_start();
include_once '../funcoes/leia.php';
ob_end_clean();

$comentario = filter_input(INPUT_GET, "comentario");
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensLeia["titulo_pagina"] ?></title>

    <!-- BootsTrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- myCSS -->
    <link defer rel="stylesheet" type="text/css" href="../style/geral.css">
    </link>
    <link defer rel="stylesheet" type="text/css" href="../style/leia.css">
    </link>

    <!-- myScript -->
    <script defer src="../js/ativarFocus.js"></script>
    <script defer src="../js/comentario.js"></script>
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
            <a class="menu-navBar" href="publicar.php"><?= $mensNavBar["publicar"] ?></a>
            <a class="menu-navBar" href="quemSomos.php"><?= $mensNavBar["sobreNos"] ?></a>
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

        <div class="posts">
            <h2 class="titulo_postagem">
                <?= $matrizPosts[$id][1] ?>
            </h2>

            <img class="imagem_post" src="<?= carregarImagem('../img/' . $matrizImagens[$id][0]) ?>">

            <p class="texto">
                <?= $matrizPosts[$id][2] ?>
            </p>

            <div class="referencias">
                <h5 class="data">
                    <?= $mensLeia["data_post"] ?>
                </h5>
                <p> 
                    <?= $matrizPosts[$id][4] ?>
                </p>

                <h5 class="autor">
                    <?= $mensLeia["autor_post"] ?>
                </h5>
                <p>
                    <?= $matrizPosts[$id][3] ?>
                </p>

                <h5 class="email">
                    <?= $mensLeia["contato_post"] ?>
                </h5>
                <p>
                <?= $matrizPosts[$id][5] ?>
                </p>
            </div>
            <div class="link_funcionalidades">
                <a class="editar_publicacao" href="../view/editar.php">
                    <?= $mensLeia["bt_editar"] ?>
                </a>
                <a class="excluir_publicacao" href="#"> 
                <?= $mensLeia["bt_excluir"] ?> 
                </a>
            </div>
            <section>
                <h4 class="titulo_comentarios_salvos">
                    <?= $mensLeia["comentar"] ?>
                </h4>
                <?php
                for ($linha = 0; $linha < count($matrizComentarios); $linha++) {
                    ?>
                        <span class="comentarios_salvos">
                            <p class="texto_comentario">
                                <?= $matrizComentarios[$linha][0] ?>
                            </p>
                        </span>
                    <?php
                }
                ?>
                </span>
            </section>
            <div class="comentarios">
                <h4 class="comentario">
                    <?= $mensLeia["comentario"] ?>
                </h4>
                <!-- href="view/leia.php?id=<?= $linha ?>" -->
                <form method="post" action="../funcoes/salvarComentario.php?id=<?=$id?>">
                    <textarea name="comentario" id="comentario" type="text" class="txtArea_comentario">
                    </textarea>
                    <!-- onclick="salvarComentario()" -->
                    <button id="enviar" name="action" type="submit" value="salvarComentario">
                        <?= $mensLeia["bt_enviar"] ?>
                    </button>
                </form>
                <?php
                $resultado = null;
                $conexao = null;
                ?>
            </div>
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
        <p class="text-center composição">© 2024 Projeto Integrador, FATEC</p>
    </footer>
</body>

</html>