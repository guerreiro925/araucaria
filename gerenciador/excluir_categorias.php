<?php
include("conexao.php");

	$idCategoria = addslashes($_GET['idCategoria']);

	if($idCategoria){
	
		mysql_query("UPDATE categorias SET deletar = '1', status = 'inativo' WHERE idCategoria = '$idCategoria'");

		header("location:categorias.php?msg2=sucesso");

	} else {
		alert("Erro ao excluir a categoria!");
		header("location:categorias.php");
	}
	
?>