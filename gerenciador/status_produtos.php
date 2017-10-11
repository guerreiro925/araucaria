<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idProduto = addslashes($_GET['idProduto']);

if($acao === "ativo"){
$consulta = mysql_query("UPDATE produtos SET status='inativo' WHERE idProduto='$idProduto'");
header("location:produtos.php?msg7=sucesso");

} else if ($acao === "inativo") {
$consulta = mysql_query("UPDATE produtos SET status='ativo' WHERE idProduto='$idProduto'");
header("location:produtos.php?msg8=sucesso");

}
?>