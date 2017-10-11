<?php
include("conexao.php");

	
	$idSlide = addslashes($_GET['idSlide']);
	
	mysql_query("UPDATE slides SET deletar = '1' WHERE idSlide = '$idSlide'");

	header("location:slide.php?msg3=sucesso");
	

?>