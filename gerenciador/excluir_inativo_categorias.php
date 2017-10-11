<?php
include("conexao.php");
$idCategoria = addslashes($_GET['idCategoria']);
mysql_query("UPDATE categorias SET status = 'ativo' WHERE idCategoria='$idCategoria' ");
header("location:categorias.php?msg4=sucesso");
?>