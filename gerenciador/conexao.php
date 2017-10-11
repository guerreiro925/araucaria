<?php
$server = "localhost";
$database = "araucaria";
$user = "root";
$passowrd = "";

$conexao = mysql_connect($server, $user, $passowrd);
mysql_select_db($database, $conexao);
?>