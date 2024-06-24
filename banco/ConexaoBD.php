<?php
function conexao() {
    $user = "root";
    $senha = "";
    $dns = "mysql:host=localhost;dbname=posts";

    $conexao = new PDO($dns, $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conexao;
}

function dataBr($data) {
    return date("d/m/Y", strtotime($data));
}

function bancoErro($erro) {
    $parametros = "";

    if (str_contains($erro,"1062")) {
        $parametros = "erro = " . "Chave duplicada";
    }
    if (str_contains($erro,"1064")) {
        $parametros = "erro = " . "Campo numérico com texto";
    }
    if (str_contains($erro,"1451")) {
        $parametros = "erro = " . "Este registro está em outras tabelas";
    }
    return $parametros;
}