<?php
    include('../model/conexao.php');

    $sql ="select nomeTarefa, status, dataInicil, dataTermino from tarefa";
    $prod = $mysqli->query($sql);
?>