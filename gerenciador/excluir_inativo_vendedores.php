<?php
include("conexao.php");
$idVendedor = addslashes($_GET['idVendedor']);
mysql_query("UPDATE vendedores SET status = 'ativo' WHERE idVendedor='$idVendedor' ");
header("location:vendedores.php?msg4=sucesso");
?>