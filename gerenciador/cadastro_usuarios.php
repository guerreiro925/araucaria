<?php
include("conexao.php");
if($_POST['submit'] != NULL){
	
$nome = addslashes($_POST['nome']);
$senha = addslashes($_POST['senha']);
$email = addslashes($_POST['email']);
$senha = base64_encode($senha);

$resultado = mysql_query("SELECT * FROM usuarios WHERE deletar != '1' AND email='$email'");
$resultado2 = mysql_query("SELECT * FROM usuarios WHERE deletar != '1' AND nome='$nome'");

if(mysql_num_rows($resultado) > 0 ){
	header("location:usuarios_incluir.php?msg=erro");
}
else if(mysql_num_rows($resultado2)>0){
	header("location:usuarios_incluir.php?msg2=erro");
}
else{

	mysql_query("INSERT INTO usuarios ( nome, email, senha, deletar, status ) VALUES ( '$nome', '$email', '$senha', '0', 'ativo' )");
		
	header("location:usuarios_incluir.php?msg=sucesso");
	
}
}
?>