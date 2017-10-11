<?php
include("conexao.php");

	
	$idVendedor = addslashes($_GET['idVendedor']);
	
	if($idVendedor){

		mysql_query("UPDATE vendedores SET deletar = '1', status = 'inativo' WHERE idVendedor = '$idVendedor'");

		header("location:vendedores.php?msg2=sucesso");
	} else {
		alert('Erro ao excluir o vendedor');
		header("location:vendedores.php");
	}

?>