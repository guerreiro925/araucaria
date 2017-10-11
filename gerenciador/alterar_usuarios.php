<?php 
include("conexao.php");

if($_POST['submit'] != NULL){
	
$idUsuario = addslashes($_POST['idUsuario']);
$nome = addslashes($_POST['nome']);
$senha = addslashes($_POST['senha']);
$email = addslashes($_POST['email']);

$senha = base64_encode($senha);
	


	mysql_query("UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE idUsuario = '$idUsuario'");
	header("location:usuarios.php?msg=sucesso");		
	
}



?>