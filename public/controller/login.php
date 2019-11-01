<?php

include('../model/conexao.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
	header('Location: ../../index.php');
	exit();
}

$user = mysqli_real_escape_string($mysqli, $_POST['email']);
$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

$query = "select Email from usuario where Email = '{$user}' and senha = '{$pass}'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $user;
	header('Location: ../view/home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../../index.php');
	exit();
}
?>