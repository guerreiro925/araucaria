<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$facebook = addslashes($_POST['facebook']);
	$instagram = addslashes($_POST['instagram']);
	$twitter = addslashes($_POST['twitter']);
	
	mysql_query("UPDATE redes_sociais SET facebook = '$facebook', instagram = '$instagram', twitter = '$twitter'");
	
	header("location:redes_sociais_editar.php?msg=sucesso"); 
	
}

else{
	
	header("location:redes_sociais_editar.php?msg=erro"); 
	
}


?>