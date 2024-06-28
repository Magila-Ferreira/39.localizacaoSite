<?php 

/* $conteudo = filter_input(INPUT_POST,"comentario", FILTER_SANITIZE_SPECIAL_CHARS); */

include_once "../banco/ConexaoBD.php";
include_once "../banco/Processador.php";
include_once "./leia.php";

if (isset($_POST['action']) == 'salvarComentario') {
    $conexao = conexao();
    $cod_post = $id + 1;

    $comentario = $_POST['comentario'];
    
    $sql = "INSERT INTO comentario(conteudo, fk_cod_post) VALUES('$comentario', $cod_post)";
    $conexao->query($sql);

    header("Location: ../view/leia.php?id=$id");
}
$conexao = null;
//header("Location: ../index.php");
("Location: ../view/leia.php?id=$id");

/* $conexao = conexao();
$cod_post = $id + 1;

$sql = " insert into comentario "
            . " (conteudo, fk_cod_post) "
            . " values ('$conteudo','$cod_post')";
            
try {
    $conexao->beginTransaction();
    $linha = $conexao->exec($sql);
    if ($linhas == 1) {
        $conexao->commit();
    } else {
        $conexao->rollBack();
    }
} catch (Exception $ex) {
    $parametros = "";
    $parametros = bancoErro($ex);

    $parametros .= "&conteudo=$conteudo";
    $parametros .= "&fk_cod_post=$cod_post";
    
    $conexao = null;
    header("location:../index.php?>$parametros");
    die();
}
$conexao = null;
header("location:../index.php");
?>; */