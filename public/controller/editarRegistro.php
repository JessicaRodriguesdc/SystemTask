<?php

include('../model/conexao.php');

if($_POST){
    if(!$mysqli){
        echo " Não connectado ";
    }
    
    $id = $_POST['id'];
    $nome = $_POST['nomeTarefa'];
    $status = $_POST['status'];
    $dataI = $_POST['dataI'];
    $dataF = $_POST['dataF'];


    $sql = "UPDATE tarefa SET  nomeTarefa = '".$nome."',status = '".$status."',dataInicio = '".$dataI."',dataTermino = '".$dataF."'  WHERE id = ".$id."";

    if(!mysqli_query($mysqli,$sql)){
        echo "<script>
                window.alert('Tarefa não alterado')
            </script>";
    }
    else{
        echo "<script>
                window.alert('Tarefa alterado')
            </script>";
    }

    header('refresh:0; url=../view/painel.php');
}
?>