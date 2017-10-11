<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$idProduto = addslashes($_POST['idProduto']);
	$idCategoria = addslashes($_POST['idCategoria']);
	$titulo = addslashes($_POST['titulo']);
	$descricao = addslashes($_POST['descricao']);
	$data = addslashes($_POST['data']);
	$descricao_promocao = addslashes($_POST['descricao_promocao']);
	
	if($descricao != 0 || $descricao != null){
		mysql_query("UPDATE produtos SET idCategoria = '$idCategoria', titulo = '$titulo', descricao = '$descricao', data = '$data' WHERE idProduto = '$idProduto'");
		
		$consultaPromocao = mysql_query("SELECT * FROM produtos_promocao WHERE idProduto = '$idProduto'");
        while ($dadosPromocao = mysql_fetch_array($consultaPromocao)) {
			$idPromocao = addslashes($dadosPromocao['idPromocao']);
		}
		mysql_query("UPDATE produtos_promocao SET descricaoPromocao = '$descricao_promocao' WHERE idPromocao = '$idPromocao'");		
		header("location:produtos.php?msg=sucesso");
	} else {
		header("location:produtos_editar.php?msg=erro&idProduto=$idProduto");
	}
}


?>