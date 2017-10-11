<?php 
include("conexao.php");
$idSlide = addslashes($_GET['idSlide']);

mysql_query("UPDATE slides SET deletar = '1', status = 'inativo' WHERE idSlide = '$idSlide'");

header("location:slideshow.php?msg2=sucesso");
?>