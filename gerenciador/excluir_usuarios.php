<?php
include("conexao.php");

	$idUsuario = addslashes($_GET['idUsuario']);
	
	if($idUsuario){

		mysql_query("UPDATE usuarios SET deletar = '1', status = 'inativo' WHERE idUsuario = '$idUsuario'");

		header("location:usuarios.php?msg2=sucesso");

	} else {
		alert('Erro ao excluir o usuário!');
		header("location:usuarios.php");
	}
?>