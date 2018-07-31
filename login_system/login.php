<?php

session_start();

//Pegar a conexão
include('conexao.php');

//Verificar o login
if(empty($_POST['usuario']) || empty($_POST['password'])) {
    header('location: index.php');
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST['usuario']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select usuario_id , usuario from usuario where usuario = '{$usuario}' and password = ('{$password}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

//Se retornar 1, quer dizer que a conexão foi efetuada.

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: C:\xampp\php\htdocs\php7\login_system\telainicial.php');
    exit();

} else {
    $_SESSION['sem_autenticacao'] = true;
    header('Location: index.php');
    exit();
}

?>