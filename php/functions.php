<?php
/************************
 *Loga no banco de dados*
 ************************/
function logaBanco()
{
	$servidor = 'localhost';
	$banco = 'tcc';
	$usuario = 'root';
	$senha = '';
	$link;
	$link = mysqli_connect($servidor, $usuario, $senha, $banco);
	$name="";
	$code="";
	if($link)
	{
		echo "conectado <br />";
	}
	else
	{
		echo "erro ao conectar ao banco de dados! <br />";exit();
	}
	return $link;
}

function fazLogin($link,$usu,$sen)
{
	$query= "SELECT * FROM login HAVING usuario='".$usu."' AND senha='".$sen."';";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result, MYSQLI_NUM);
	return($row);
}
?>