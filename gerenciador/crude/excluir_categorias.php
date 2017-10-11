<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idCategoria = addslashes($_GET['idCategoria']);
	
	mysql_query("DELETE FROM categorias WHERE idCategoria = '$idCategoria'");

	header("location:categorias.php?msg1=sucesso");
	
}

?>