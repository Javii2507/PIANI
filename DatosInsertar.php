 <?php
	include('conexion.php');

	$dno = $_POST['vno'];
	$dma = $_POST['vma'];
	$ddi = $_POST['vdi'];
	$dte = $_POST['vte'];
	$dco = $_POST['vco'];
	
	//echo $dno." ".$dma;

	$sentence = "call Insertar_Alumno('$dno','$dma','$ddi','$dte','$dco')";
	//echo $sentence;
	$resultado = $mysql->query($sentence);

	if ($resultado) {
		echo "Resgistrado correctamente";
	}else
	{
		echo "No resgistrado";
	}

?>

