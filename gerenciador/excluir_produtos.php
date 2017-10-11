<?php
include("conexao.php");

	$idProduto = addslashes($_GET['idProduto']);
	
	if($idProduto){

		mysql_query("UPDATE produtos SET deletar = '1', status = 'inativo' WHERE idProduto = '$idProduto'");

		header("location:produtos.php?msg2=sucesso");

	} else {
		alert('Erro ao excluir o produto');
		header("location:produtos.php");
	}

?>