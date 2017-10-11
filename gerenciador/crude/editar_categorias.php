<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idCategoria = addslashes($_POST['idCategoria']);
	$titulo = addslashes($_POST['titulo']);
	
	mysql_query("UPDATE categorias SET titulo = '$titulo' WHERE idCategoria = '$idCategoria'");
	
	header("location:categorias.php?msg2=sucesso"); 
	
}


?>