<?php 
include("conexao.php");

$idProduto = addslashes($_GET['idProduto']);
$verifica = mysql_query("SELECT * FROM produtos_destaque WHERE idProduto = '$idProduto' ");
if(mysql_num_rows($verifica) <= 0){
	
mysql_query("INSERT INTO produtos_destaque (idProduto, deletar) VALUES ( '$idProduto', '0' )");
mysql_query("UPDATE produtos SET destaque = '1' WHERE idProduto='$idProduto'");
header("location:produtos.php?msg5=sucesso");
	
}else{

header("location:produtos.php?msg6=erro");
	
}



?>
