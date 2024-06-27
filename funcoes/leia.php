<?php

include_once '../funcoes/idiomaView.php';

include_once '../banco/CarregarArquivo.php';
include_once '../banco/Processador.php';
include_once '../banco/ConexaoBD.php';

$conexao = conexao();
$id = $_GET['id'];

switch ($lang) {
    case "pt":
        $sqlPosts = 'select * from post where idioma = "pt" order by cod_post';
        break;
    case "es":
        $sqlPosts = 'select * from post where idioma = "es" order by cod_post';
        break;
    default:
        $sqlPosts = 'select * from post where idioma = "en" order by cod_post';
}

$respostaPosts = $conexao->query($sqlPosts);
$matrizPosts = $respostaPosts->fetchAll();

// Matriz Imagens
$sqlImagens = '
        select nome_arquivo from imagem
        join post
        on imagem.cod_imagem = post.fk_cod_imagem
        and post.idioma = "pt" 
        order by cod_post';
$respostaImagens = $conexao->query($sqlImagens);
$matrizImagens = $respostaImagens->fetchAll();

// Matriz Comentarios
$sqlComentarios = '
    select conteudo from comentario
    where fk_cod_post = "' . $id + 1 . '"
    order by cod_comentario desc';

$respostaComentarios = $conexao->query($sqlComentarios);
$matrizComentarios = $respostaComentarios->fetchAll();
?>;