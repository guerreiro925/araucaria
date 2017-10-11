<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$titulo = addslashes($_POST['titulo']);

	$resultado = mysql_query("SELECT * FROM categorias WHERE deletar != '1' AND titulo='$titulo'");

	if(mysql_num_rows($resultado) > 0 ){
	header("location:categorias_incluir.php?msg=erro");
	}
	else{
	
	mysql_query("INSERT INTO categorias ( titulo, deletar, status ) VALUES ( '$titulo', '0', 'ativo' )");
		
	header("location:categorias_incluir.php?msg=sucesso");
	}	
}

?>