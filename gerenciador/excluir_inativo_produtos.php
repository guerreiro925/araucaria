<?php
include("conexao.php");
$idProduto = addslashes($_GET['idProduto']);
mysql_query("UPDATE produtos SET status = 'ativo' WHERE idProduto='$idProduto' ");
header("location:produtos.php?msg8=sucesso");
?>