<?php
include("conexao.php");

	$idBlog = addslashes($_GET['idBlog']);
	$idRegistro = addslashes($_GET['idRegistro']);
	
	if($idBlog && $idRegistro){

	$consulta = mysql_query("SELECT * FROM blog_images WHERE idRegistro = '$idRegistro'");
	while($dados = mysql_fetch_array($consulta)) {
		unlink($dados['imagem']);
		mysql_query("DELETE FROM blog_images WHERE idRegistro = '$idRegistro'");
	}

	header("location:blog_editar.php?idBlog=$idBlog");
	} else {
		alert('Erro ao excluir a foto da notícia');
		header('location:blog.php');
	}

?>