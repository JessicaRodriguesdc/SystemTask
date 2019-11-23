<?php
    include('../model/conexao.php');

    $sql ="select id, nomeTarefa, status, dataInicil, dataTermino from tarefa";
    $prod = $mysqli->query($sql);
?>