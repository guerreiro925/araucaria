<?php
include("conexao.php");

	$idBlog = addslashes($_GET['idBlog']);
	
if($idBlog){ // if adicionado para tentar corrigir erro da porra do deletar 1 e status inativo
	mysql_query("UPDATE blog SET deletar = '1', status = 'inativo' WHERE idBlog = '$idBlog'");

	header("location:blog.php?msg2=sucesso");
}
else{
	alert('Erro ao excluir a notícia');
	header('location:blog.php');
}
?>

