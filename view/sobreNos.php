<!DOCTYPE html>

<?php include_once '../funcoes/idiomaView.php'; ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensSobreNos["titulo_pagina"] ?></title>

    <!-- BootsTrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- myCSS -->
    <link defer rel="stylesheet" type="text/css" href="../style/geral.css">
    </link>
    <link defer rel="stylesheet" type="text/css" href="../style/sobreNos.css">
    </link>

    <!-- myJS -->
    <script defer src="../script/meuScript.js" type="text/script"></script>

</head>

<body>
    <header class="header">
        <section class="logotipo">
            <a href="../index.php">
                <img class="logo_green" src="../img/8679752_recycle_line_icon (1).png">
            </a>
        </section>
        <aside class="menu">
            <a href="../index.php"><?= $mensNavBar["home"] ?></a>
            <a href="publicar.php"><?= $mensNavBar["publicar"] ?></a>
            <a href="quemSomos.php"><?= $mensNavBar["sobreNos"] ?></a>
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
        <div class="sobreNos">
            <?php 
                if ($lang == 'pt') { ?>
                
                    <section class="br">
                        <h4> <?=$mensSobreNos["titulo_sobre"]?> </h4>
                        <h5> 
                            <?=$mensSobreNos["sobre"]?>
                        </h5>
                        <div class="mt-5">
                            <h4><?=$mensSobreNos["contatos"]?></h4>
                            
                            <a class="contato" style="color: #000" href="#">
                                <?=$mensSobreNos["contatoGSB"]?>
                            </a>
                            <br>
                            <a class="contato" style="color: #000" href="https://www.linkedin.com/in/magilamorgana/">
                                <?=$mensSobreNos["contatoMMSF"]?>
                            </a>
                        </div>
                    </section>
            <?php 
                } else if ($lang == 'es') { 
            ?>
                    <section class="sp">
                        <h4> <?=$mensSobreNos["titulo_sobre"]?> </h4>
                        <h5>
                            <?=$mensSobreNos["sobre"]?>
                        </h5>
                        <div class="mt-5">
                            <h4><?=$mensSobreNos["contatos"]?></h4>
                            
                            <a class="contato" style="color: #000" href="#">
                                <?=$mensSobreNos["contatoGSB"]?>
                            </a>
                            <br>
                            <a class="contato" style="color: #000" href="https://www.linkedin.com/in/magilamorgana/">
                                <?=$mensSobreNos["contatoMMSF"]?>
                            </a>
                        </div>
                    </section>
            <?php 
                } else { 
            ?>
                    <section class="en">
                        <h4> <?=$mensSobreNos["titulo_sobre"]?> </h4>
                        <h5>
                            <?=$mensSobreNos["sobre"]?>
                        </h5>
                        <div class="mt-5">
                            <h4><?=$mensSobreNos["contatos"]?></h4>
                            
                            <a class="contato" href="#">
                                <?=$mensSobreNos["contatoGSB"]?>
                            </a>
                            <br>
                            <a class="contato" href="https://www.linkedin.com/in/magilamorgana/">
                                <?=$mensSobreNos["contatoMMSF"]?>
                            </a>
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
            <li class="nav-item"><a href="https://www.linkedin.com/in/magilamorgana/" class="nav-link px-2">Mágila M. S. Ferreira</a></li>
        </ul>
        <p class="text-center composição">© 2024 Projeto Integrador, FATEC</p>
    </footer>
</body>

</html>