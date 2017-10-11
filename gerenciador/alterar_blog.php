<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$idBlog = addslashes($_POST['idBlog']);
	$titulo = addslashes($_POST['titulo']);
	$descricao = addslashes($_POST['descricao']);
	$data = addslashes($_POST['data']);
	
	if($descricao != 0 || $descricao != null){
	mysql_query("UPDATE blog SET titulo = '$titulo', descricao = '$descricao', data = '$data' WHERE idBlog = '$idBlog'");
	header("location:blog.php?msg=sucesso");
	}else{
		header("location:blog_editar.php?msg=erro&idBlog=$idBlog");
	}
}


?>