<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$titulo = addslashes($_POST['titulo']);
	$descricao = addslashes($_POST['descricao']);
	$data = date('Y-m-d');
	
	if( $descricao != null || $descricao  != 0){
	mysql_query("INSERT INTO blog ( titulo, descricao, data, deletar, status ) VALUES ( '$titulo', '$descricao', '$data', '0', 'ativo' )");
		$idBlog = mysql_insert_id();
		header("location:blog_incluir_fotos.php?idBlog=$idBlog");
	}
	else{
		header("location:blog_incluir.php?msg=erro");
	}
	
	
	
	
}


?>