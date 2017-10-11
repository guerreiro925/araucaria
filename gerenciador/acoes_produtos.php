<?php
include("conexao.php");
$acao = $_GET['acao'];
$idProduto = addslashes($_GET['idProduto']);
if($acao == 'padrao'){
  mysql_query("UPDATE produtos SET destaque = '0', promocao = '0' WHERE idProduto = '$idProduto'");
  mysql_query("DELETE FROM produtos_destaque WHERE idProduto = '$idProduto'");
  mysql_query("DELETE FROM produtos_promocao WHERE idProduto = '$idProduto'");
  header("location:produtos.php?msg6=sucesso");
} else if ($acao == 'destaque'){
  mysql_query("UPDATE produtos SET destaque = '1', promocao = '0' WHERE idProduto = '$idProduto'");
  mysql_query("INSERT INTO produtos_destaque (idProduto, deletar) VALUES ('$idProduto', '0')");
  header("location:produtos.php?msg5=sucesso");
} else if ($acao == 'promocao'){
  mysql_query("DELETE FROM produtos_destaque WHERE idProduto = '$idProduto'");
  mysql_query("UPDATE produtos SET destaque = '0', promocao = '1' WHERE idProduto = '$idProduto'");
  mysql_query("INSERT INTO produtos_promocao (idProduto) VALUES ('$idProduto')");
  $idUltimaPromocao = mysql_insert_id();
  //header("location:produtos.php?msg4=sucesso");
  header("location:cadastro_promocao_descricao.php?idPromocao=" . $idUltimaPromocao . "");
} else if ($acao == 'descricao_promocao') {
  $descricaoPromocao = addslashes(trim($_POST['descricao_promocao']));
  $idPromocao = addslashes(trim($_POST['idPromocao']));
  mysql_query("UPDATE produtos_promocao SET descricaoPromocao = '$descricaoPromocao' WHERE idPromocao = '$idPromocao'");
  header("location:produtos.php?msg4=sucesso");
}


?>