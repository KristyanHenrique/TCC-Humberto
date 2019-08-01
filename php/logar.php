<?php
session_start();
/************************
 *Loga no banco de dados*
 ************************/
require_once 'functions.php';

$usu=$_POST['nome'];
$sen=$_POST['senha'];
$row=fazLogin(logaBanco(),$usu,$sen);

if (isset($row)) {
	switch ($row[2]) {
		case '6':
			$_SESSION["usuario"]=$row[0];
			$_SESSION["senha"]=$row[1];
			$_SESSION["permissao"]=$row[2];
			header("location: ../html/segurança.html");
			break;
		
		default:
			# code...
			break;
	}
}
?>