<?php
include("conexao.php");


	$idFornecedor = addslashes($_GET['idFornecedor']);
	
	mysql_query("UPDATE fornecedores SET deletar = '1' WHERE idFornecedor = '$idFornecedor'");

	header("location:fornecedores.php?msg3=sucesso");


?>