<?php
include("conexao.php");

	$idProduto = addslashes($_GET['idProduto']);
	$idRegistro = addslashes($_GET['idRegistro']);
	
	if($idProduto && $idRegistro){

		$consulta = mysql_query("SELECT * FROM produtos_images WHERE idRegistro = '$idRegistro'");
		while($dados = mysql_fetch_array($consulta)) {
			unlink($dados['imagem']);
			mysql_query("DELETE FROM produtos_images WHERE idRegistro = '$idRegistro'");
		}

		header("location:produtos_editar.php?idProduto=$idProduto");

	} else {
		alert('Erro ao excluir a foto do produto!');
		header("location:produtos_editar.php");
	}

	

?>