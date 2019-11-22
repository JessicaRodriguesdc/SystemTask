<?php
include('../model/conexao.php');
    session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
        header("Location: ../login.php");
        exit;
    }else{
        echo"<br><br><center> Seja bem vind@ ".$_SESSION["email"]."</center><br>";
    }
?>