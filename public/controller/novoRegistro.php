<?php
include('../model/conexao.php');

if($_POST){
    if(!$mysqli){
        echo " Não connectado ";
    }

    $nome = $_POST['nomeTarefa'];
    $status = $_POST['status'];
    $dataI = $_POST['dataI'];
    $dataF = $_POST['dataF'];


    $sql = "INSERT INTO tarefa(nomeTarefa,status,dataInicio,dataTermino) VALUES ('".$nome."','".$status."','".$dataI."','".$dataF."')";

    if(!mysqli_query($mysqli,$sql)){
        echo "<script>
                window.alert('Tarefa não inserido')
            </script>";
    }
    else{
        echo "<script>
                window.alert('Tarefa inserido')
            </script>";
    }

    header('refresh:0; url=../view/painel.php');
}
?>