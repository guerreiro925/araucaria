<?php
include("conexao.php");
if($_POST['submit'] != NULL){
	
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
	
		mysql_query("INSERT INTO usuarios ( nome, email, senha, deletar ) VALUES ( '$nome', '$email', '$senha', '0' )");
		
		header("location:usuarios.php?msg1=sucesso");		

}
?>