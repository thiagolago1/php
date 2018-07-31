<?php



session_start();
set_include_path(ini_get("include_path").".;C:\xampp\php\htdocs\php7\login_system\verifica_login.php");

?>

<h2>VOCÊ ESTÁ LOGADO, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logoff.php">Deslogar</a></h2>