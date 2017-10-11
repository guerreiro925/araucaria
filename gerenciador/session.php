<?php

include('conexao.php');
$acao = $_GET['acao'];

if($acao == 'acessar'){
$usuario = addslashes($_POST['nome']);
$senha = addslashes($_POST['senha']);

$senha = base64_encode($senha);
$queryAtivo = mysql_query("SELECT * FROM usuarios WHERE nome = '$usuario' AND senha = '$senha' AND deletar != 1 AND status != 'ativo'");
$query = mysql_query("SELECT * FROM usuarios WHERE nome = '$usuario' AND deletar != 1 AND status != 'inativo'");
if(mysql_num_rows($queryAtivo) > 0){
	header("location:login.php?msg2=erro");
} else {
	while($rs = mysql_fetch_array($query)){

	$senha_banco = $rs['senha'];
	$senha_banco_hs = $rs['senha'];
	}




	if($senha != $senha_banco OR $senha_banco == NULL){
		echo "<script>window.location.href='login.php?msg=error';</script>";
		session_destroy();
	} else {
		$query = mysql_query("SELECT * FROM usuarios WHERE nome = '$usuario' AND senha = '$senha_banco_hs' AND deletar != 1 AND status != 'inativo'");
		while($result = mysql_fetch_array($query)){
		session_start();
		$_SESSION['usuario'] = $result['nome'];
		echo "<script>window.location.href='index.php';</script>";
		}
	}
}
//sair//
} else if($acao == 'sair'){

session_start();
session_destroy();	
echo "<script>window.location.href='../index.php';</script>";
	
} 

?>