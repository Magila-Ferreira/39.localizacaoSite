<?php 
const site = "//localizacaoSite";
const servidor = "localhost";
const local = "http://localhost/localizacaoSite";

function processador($arquivo) {
    $html = lerArquivo($arquivo);
    return $html;
}

function lerArquivo($nome) { 
    $arquivo = file_get_contents($nome);
    return $arquivo;
}