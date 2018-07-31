<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('PASSWORD', '');
define('DB', 'loginsystem');

$conexao = mysqli_connect(HOST, USUARIO, PASSWORD, DB) or die ("Erro na conexão.");

?>
