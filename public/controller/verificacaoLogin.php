<?php
include('../model/conexao.php');
    session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
        header("Location: ../login.php");
        exit;
    }else{
        echo"Seja bem vind@  ".$_SESSION["email"]." ";
    }
?>