<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MdR</title>

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

    <!-- myJS -->
    <script defer src="../script/comentario.js"></script>

</head>

<body>
    <header class="header">
        <section class="logotipo">
            <a href="../index.php">
                <img class="logo_green" src="../img/8679752_recycle_line_icon (1).png">
            </a>
        </section>
        <aside class="menu">
            <a href="../index.php"> HOME </a>
            <a href="publicar.php"> PUBLISH </a>
            <a href="quemSomos.php"> WHO WE ARE? </a>
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
        <h1 class="logo"> WASTE MANAGEMENT </h1>

        <div class="posts">
            <h2 class="titulo_postagem"> TEXT 1 – How to develop waste management in universities? </h2>

            <img class="imagem_post" src="../img/reciclagem.png">

            <p class="texto">
                Little by little, we have been perceiving in the media and social networks an increase in the commitment
                of society, companies and institutions in relation to concern for the environment. Population growth is
                directly linked to this manifestation, in which urbanization brings with it the unbridled generation of
                waste.
            </p>
            <p class="texto">
                With technology and the advancement of civil construction and the pharmaceutical industry, for example,
                we can observe a significant change in the compositions, characteristics and increase in the
                hazardousness of solid waste used in university courses. This growth reflects the development of the
                population's consumption patterns and the way in which the waste generated in universities is disposed
                of.
            </p>
            <p class="texto">
                In order to obtain a more dynamic view of the generation of solid waste in universities, we reflect on
                the number of university courses offered at the Institution in the most diverse areas of action in the
                labor market. This triggers a large flow of people and the generation of various types of solid waste,
                whether they are hazardous or not.
            </p>
            <p class="texto">
                In the university environment, as well as in any company, when waste is not well managed, it is possible
                that it is inappropriately conducted to landfills, causing pollution of both soil and groundwater.
            </p>
            <p class="texto">
                In addition, improper disposal can pollute nearby waterways, which are used to collect water for
                treatment and subsequent human consumption.
            </p>
            <p class="texto">
                In order to obtain a broad knowledge of the amount and types of solid waste generated in universities,
                it is necessary to implement a management action plan with the respective Solid Waste Management Plan
                (SGRP), with the aim of analyzing the generation at the source, the separation and proper destination
                for this waste. These plans must be made with the use of specific strategies for each type of
                organization and require the direct support of management tools to support control and optimize
                processes.
            </p>

            <h4 class="sub_titulo_postagem">
                Waste Management and Environmental Preservation in Universities
            </h4>
            <p class="texto">
                In order to practice environmental awareness of the preservation and proper disposal of solid waste
                generated by universities, it is necessary to organize management strategies in all sectors of the
                Institution.
                One of the plausible actions to be taken by students, employees, and the community at large, is the
                inclusion of larger dumpsters that add various types of categories, such as plastic, metals, and glass,
                among others. In addition to the use of bags in the colors of the CONAMA standard so that waste is
                stored correctly.
            </p>
            <p class="texto">
                It is also possible to implement compost bins for organic waste, which can be used by students in
                practical classes on sustainability and the environment.
                In relation to waste considered hazardous (waste and effluents from sanitary services or civil
                construction laboratories), care must be duplicated and collected and stored in appropriate places
                within the Institution. Preferably, this type of material should be collected by specialized and
                licensed companies that use waste management systems for proper disposal and compliance with legal
                requirements.
            </p>
            <p class="texto">
                On the other hand, materials that are considered recyclable must be stored specifically in a dry and
                closed place, until their correct destination, so that they do not have contact with other substances
                that alter their composition.
            </p>
            <p class="texto">
                More than strengthening the image of the university as a sustainable organization, it is of utmost
                importance to implement an Environmental Management System within each sector. In this way, the
                awareness and attitude of environmental preservation has an impact on the consumption and destination of
                waste, bringing benefits for the well-being of the environment, through the optimization of materials,
                energy reduction and the reuse of natural resources, as well as, with the different conscious and
                responsible practices.
            </p>

            <div class="referencias">
                <h5 class="data"> POST DATE: </h5>
                <p>06/07/2017</p>

                <h5 class="autor">Author:</h5>
                <p>Admin</p>

                <h5 class="email">Contact:</h5>
                <p>meuresiduo@meuresiduo.com</p>
            </div>
            <div class="link_funcionalidades">
                <a class="editar_publicacao" href="../view/editar.php"> EDIT POST</a>
                <a class="excluir_publicacao" href="#"> DELETAR POST </a>
            </div>
            <section>
                <h4 class="titulo_comentarios_salvos">
                    Comments section
                </h4>
                <span class="comentarios_salvos">

                </span>
            </section>
            <div class="comentarios">
                <h4> WRITE A COMMENT </h4>
                <textarea type="text" class="txtArea_comentario">
                </textarea>
                <button onclick="salvarComentario()" class="enviar_comentario">
                    Send
                </button>
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