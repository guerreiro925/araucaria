<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idFornecedor = addslashes($_GET['idFornecedor']);
	
	mysql_query("DELETE FROM fornecedor WHERE idFornecedor = '$idFornecedor'");

	header("location:fornecedores.php?msg3=sucesso");
	
}

?>