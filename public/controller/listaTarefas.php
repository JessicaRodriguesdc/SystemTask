<?php
    include('../model/conexao.php');

    $sql ="select id, nomeTarefa, status, dataInicio, dataTermino from tarefa";
    $prod = $mysqli->query($sql);
?>