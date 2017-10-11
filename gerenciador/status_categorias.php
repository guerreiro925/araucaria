<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idCategoria = addslashes($_GET['idCategoria']);

if($acao === "ativo"){
    mysql_query("UPDATE categorias SET status='inativo' WHERE idCategoria='$idCategoria'");
    header("location:categorias.php?msg3=sucesso");

} else if ($acao === "inativo") {
    mysql_query("UPDATE categorias SET status='ativo' WHERE idCategoria='$idCategoria'");
    header("location:categorias.php?msg4=sucesso");

}
?>