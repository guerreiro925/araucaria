<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$titulo = addslashes($_POST['titulo']);
	$descricao = addslashes($_POST['descricao']);
	$data = addslashes($_POST['data']);
	
	mysql_query("INSERT INTO blog ( titulo, descricao, data, deletar ) VALUES ( '$titulo', '$descricao', '$data', '0' )");
		
	header("location:blog.php?msg1=sucesso");
	
}


?>