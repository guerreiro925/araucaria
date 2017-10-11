<?php
include("conexao.php");

	
	$idVendedor = addslashes($_GET['idVendedor']);
	
	mysql_query("UPDATE vendedores SET deletar = '1' WHERE idVendedor = '$idVendedor'");

	header("location:vendedores.php?msg3=sucesso");
	

?>