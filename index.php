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
        <title><?= $mensagem["tit_index"];?></title>
    </head>
    <body>
        <h1><?= $mensagem["bem_vindo"]?></h1>
        <h2><?= $mensagem["apresentacao"]?></h2>
        <div>
            <form action="login.php" method="post">
                <div>
                    <label><?= $mensagem["usuario"]?></label>
                    <br>
                    <input type="text" name="usuario"/>
                </div>
                <div>
                    <label><?= $mensagem["senha"]?></label>
                    <br>
                    <input type="password" name="senha"/>
                </div>
                <input type="submit" value="<?= $mensagem['autenticar']?>">
            </form>
        </div>
        
        
    </body>
</html>
