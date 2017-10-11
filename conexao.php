<?php
$server = "localhost";
$database = "mhsde823_araucaria";
$user = "mhsde823_ab_team";
$passowrd = "local13@";

$conexao = mysql_connect($server, $user, $passowrd);
mysql_select_db($database, $conexao);
?>