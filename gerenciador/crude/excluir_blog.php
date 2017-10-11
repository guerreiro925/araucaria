<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idBlog = addslashes($_GET['idBlog']);
	
	mysql_query("UPDATE blog SET deletar = '1' WHERE idBlog = '$idBlog'");

	header("location:blog.php?msg=sucesso");
	
}

?>