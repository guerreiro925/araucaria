<?php
include("conexao.php");

if($_POST['submit'] != NULL){
	
	$idRegistro = addslashes($_POST['idRegistro']);
	$facebook = addslashes($_POST['facebook']);
	$instagram = addslashes($_POST['instagram']);
	$twitter = addslashes($_POST['twitter']);
	
	mysql_query("UPDATE redes_sociais SET facebook = '$facebook', instagram = '$instagram', twitter = '$twitter' WHERE idRegistro = '$idRegistro'");
	
	header("location:redes_sociais.php?msg1=sucesso"); 
	
}


?>