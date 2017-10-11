<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idRegistro = addslashes($_GET['idRegistro']);
	
	mysql_query("UPDATE blog_images SET deletar = '1' WHERE idRegistro = '$idRegistro'");

	header("location:blog_images.php?msg=sucesso");
	
}

?>