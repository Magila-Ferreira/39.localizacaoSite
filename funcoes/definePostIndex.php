<?php

/* Arquivo tradução */
include_once './funcoes/idioma.php';

/* Arquivos banco de dados */
include_once './banco/CarregarArquivo.php';
include_once './banco/Processador.php';
include_once './banco/ConexaoBD.php';

$conexao = conexao();

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

for ($linha = 0; $linha < (count($matrizPosts) % 6); $linha++) {
    $textoReduzido[$linha] = (str_split($matrizPosts[$linha][2], "650"));
};

?>;