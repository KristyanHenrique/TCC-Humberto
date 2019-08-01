<?php 
session_start();
$_SESSION['usuario'];
$_SESSION['senha'];

echo $_SESSION['usuario']."<br />";
echo $_SESSION['senha'];
?>