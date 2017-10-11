<?php 
include("conexao.php");

$idProduto = addslashes($_GET['idProduto']);
$verifica = mysql_query("SELECT * FROM produtos WHERE idProduto = '$idProduto'");
if(mysql_num_rows($verifica) > 0){
	
mysql_query("UPDATE produtos SET status = 'inativo' WHERE idProduto='$idProduto'");
header("location:produtos.php?msg7=sucesso");
	
}else{

header("location:produtos.php?msg9=erro");
	
}



?>
