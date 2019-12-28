<?php

$host = "localhost";
$user = "jessica";
$pass = "";
$banco = "crud_bd";

$mysqli = new mysqli($host,$user,$pass,$banco);
if($mysqli->connect_errno)
    echo "Falha na conexão do Banco:(".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>

