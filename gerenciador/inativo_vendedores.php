<?php 
include("conexao.php");

$idVendedor = addslashes($_GET['idVendedor']);
$verifica = mysql_query("SELECT * FROM vendedores WHERE idVendedor = '$idVendedor'");
if(mysql_num_rows($verifica) > 0){
	
mysql_query("UPDATE vendedores SET status = 'inativo' WHERE idVendedor='$idVendedor'");
header("location:vendedores.php?msg3=sucesso");
	
}else{

header("location:vendedores.php?msg5=erro");
	
}



?>
