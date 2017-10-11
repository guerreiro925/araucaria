<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idVendedor = addslashes($_GET['idVendedor']);

if($acao === "ativo"){
    mysql_query("UPDATE vendedores SET status='inativo' WHERE idVendedor='$idVendedor'");
    header("location:vendedores.php?msg3=sucesso");

} else if ($acao === "inativo") {
    mysql_query("UPDATE vendedores SET status='ativo' WHERE idVendedor='$idVendedor'");
    header("location:vendedores.php?msg4=sucesso");

}
?>