<?php
include('../model/conexao.php');

$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
$sql = "delete from tarefa where id =$id;";

if(!mysqli_query($mysqli,$sql)){
    echo "<script>
                window.alert('Registro não deletado')
            </script>";
}
else{
    echo "<script>
                window.alert('Registro deletado')
            </script>";     
}  
header('refresh:0; url=../view/painel.php');
?>
