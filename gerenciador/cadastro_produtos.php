<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idCategoria = addslashes($_POST['idCategoria']);
	$titulo = addslashes($_POST['titulo']);
	$descricao = addslashes($_POST['descricao']);
	$data = addslashes($_POST['data']);
	
	if( $descricao != null || $descricao  != 0){
	mysql_query("INSERT INTO produtos ( idCategoria, titulo, descricao, data, deletar, status ) VALUES ( '$idCategoria', '$titulo', '$descricao', '$data', '0', 'ativo' )");
	$idProduto = mysql_insert_id();
	header("location:produtos_incluir_fotos.php?idProduto=$idProduto");
	}else{
		header("location:produtos_incluir.php?msg=erro");
	}
}


?>