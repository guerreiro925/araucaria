<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idSlide = addslashes($_GET['idSlide']);
if($acao === "ativo"){
    mysql_query("UPDATE slides SET status='inativo' WHERE idSlide='$idSlide'");
    header("location:slideshow.php?msg3=sucesso");
}
else if($acao === "inativo"){
    mysql_query("UPDATE slides SET status='ativo' WHERE idSlide='$idSlide'");
    header("location:slideshow.php?msg4=sucesso");
}
?>