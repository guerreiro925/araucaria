<?php 
include("conexao.php");

if($_POST['submit'] != NULL){
	
$idUsuario = addslashes($_POST['idUsuario']);
$nome = addslashes($_POST['nome']);
$senha = addslashes($_POST['senha']);
$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);
	$email = addslashes($_POST['email']);
	
	mysql_query("UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE idUsuario = '$idUsuario'");
	header("location:usuarios.php?msg2=sucesso");		
		
}


?>