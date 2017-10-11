<?php 
include("conexao.php");

$idBlog = addslashes($_GET['idBlog']);
$verifica = mysql_query("SELECT * FROM blog WHERE idBlog = '$idBlog'");
if(mysql_num_rows($verifica) > 0){
	
mysql_query("UPDATE blog SET status = 'inativo' WHERE idBlog='$idBlog'");
header("location:blog.php?msg3=sucesso");
	
}else{

header("location:blog.php?msg5=erro");
	
}



?>
