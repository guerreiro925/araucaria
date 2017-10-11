<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$titulo = addslashes($_POST['titulo']);

	mysql_query("INSERT INTO categorias ( titulo, deletar ) VALUES ( '$titulo', '0' )");
		
	header("location:categorias.php?msg1=sucesso");
		
}

?>