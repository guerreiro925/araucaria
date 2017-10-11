<?php
include("conexao.php");

	$idUsuario = addslashes($_GET['idUsuario']);
	
	mysql_query("UPDATE usuarios SET deletar = '1' WHERE idUsuario = '$idUsuario'");

	header("location:usuarios.php?msg3=sucesso");

?>