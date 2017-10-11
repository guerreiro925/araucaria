<?php
include("conexao.php");


	$idFornecedor = addslashes($_GET['idFornecedor']);

	if($idFornecedor){

	mysql_query("UPDATE fornecedores SET deletar = '1',status = 'inativo' WHERE idFornecedor = '$idFornecedor'");

	header("location:fornecedores.php?msg2=sucesso");

	} else {
		alert('Erro ao excluir o fornecedor!');
		header("location:fornecedores.php");
	}

?>