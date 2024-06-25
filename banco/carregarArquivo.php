<?php

function carregarArquivo($arquivo)
{
    switch ($arquivo["erro"]) {
        case UPLOAD_ERR_OK:
            return true;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
        case UPLOAD_ERR_PARTIAL:
        case UPLOAD_ERR_NO_FILE:
        case UPLOAD_ERR_NO_TMP_DIR:
        case UPLOAD_ERR_CANT_WRITE:
        case UPLOAD_ERR_EXTENSION:
            return false;
        default:
            break;
    }
}

function moverArquivo($arquivo, $nome) {
    $uploaddir = '/../img/';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
        $uploaddir = $uploaddir . $_FILES['userfile']['name'];
    } else {
        echo "Não foi possível concluir o upload da imagem.";
    }
}

function carregarImagem($nome) {
    $arquivo = "img\padrao.png";

    if (file_exists($nome)) {
        $arquivo = $nome;
    }
    return $arquivo;
}