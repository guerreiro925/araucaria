<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idFornecedor = addslashes($_GET['idFornecedor']);

if($acao === "ativo"){
    mysql_query("UPDATE fornecedores SET status='inativo' WHERE idFornecedor='$idFornecedor'");
    header("location:fornecedores.php?msg3=sucesso");
}
else if($acao === "inativo"){
    mysql_query("UPDATE fornecedores SET status='ativo' WHERE idFornecedor='$idFornecedor'");
    header("location:fornecedores.php?msg4=sucesso");
}
?>