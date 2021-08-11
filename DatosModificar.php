<?php
	include('conexion.php');
	$dno = $_POST['vno'];
	$dma = $_POST['vma'];
	$ddi = $_POST['vdi'];
	$dte = $_POST['vte'];
	$dco = $_POST['vco'];

	$sentence = "call Modificar_Alumno('$dno','$dma','$ddi','$dte', '$dco')";
	$resultado = $mysql->query($sentence);

	if ($resultado) {
		echo "Modificado correctamente";
	}else
	{
		echo "No Modificado";
	}
?>