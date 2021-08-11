<?php

	include('conexion.php');
	
	$dno =$_POST["vno"];


	$resultado = $mysql->query("call Eliminar_Alumno('$dno')");

	if ($resultado) {
		echo "Eliminado correctamente";
	}else
	{
		echo "No Eliminado";
	}


?>