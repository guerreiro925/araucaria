<?php
include("conexao.php");
$acao = addslashes($_GET['acao']);
$idUsuario = addslashes($_GET['idUsuario']);

if($acao === "ativo"){
    mysql_query("UPDATE usuarios SET status='inativo' WHERE idUsuario='$idUsuario'");
    header("location:usuarios.php?msg3=sucesso");

} else if ($acao === "inativo") {
    mysql_query("UPDATE usuarios SET status='ativo' WHERE idUsuario='$idUsuario'");
    header("location:usuarios.php?msg4=sucesso");

}


?>