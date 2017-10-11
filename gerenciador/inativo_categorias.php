<?php 
include("conexao.php");

$idCategoria = addslashes($_GET['idCategoria']);
$verifica = mysql_query("SELECT * FROM categorias WHERE idCategoria = '$idCategoria'");
if(mysql_num_rows($verifica) > 0){
	
mysql_query("UPDATE categorias SET status = 'inativo' WHERE idCategoria='$idCategoria'");
header("location:categorias.php?msg3=sucesso");
	
}else{

header("location:categorias.php?msg5=erro");
	
}



?>
