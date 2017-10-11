<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idBlog = addslashes($_GET['idBlog']);

if($acao === "ativo"){
    mysql_query("UPDATE blog SET status='inativo' WHERE idBlog='$idBlog'");
    header("location:blog.php?msg3=sucesso");

} else if ($acao === "inativo") {
    mysql_query("UPDATE blog SET status='ativo' WHERE idBlog='$idBlog'");
    header("location:blog.php?msg4=sucesso");

}
?>