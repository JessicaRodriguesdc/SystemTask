<?php

include('../model/conexao.php');

if($_POST){
    if(!$mysqli){
        echo " Não connectado ";
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone =  $_POST['telefone'];
    $Cpf =  $_POST['Cpf'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuario(nome,Email,Cpf,telefone,senha) VALUES ('".$nome."','".$email."','".$Cpf."','".$telefone."','".$password."')";

    if(!mysqli_query($mysqli,$sql)){
        echo "<script>
                window.alert('Usuario não foi cadastrado')
            </script>";
        header('refresh:0; url=../view/cadastro.php');
    }
    else{
        echo "<script>
                window.alert('Usuario cadastrado')
            </script>";

        header('refresh:0; url=../index.php');
    }
}
?>