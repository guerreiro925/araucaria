<?php
include("conexao.php");
$idBlog = addslashes($_GET['idBlog']);
mysql_query("UPDATE blog SET status = 'ativo' WHERE idBlog='$idBlog' ");
header("location:blog.php?msg4=sucesso");
?>