<?php
	include('conexion.php');
	// $dma = $_POST["vma"];
	$dma = "13181105003";
	$consulta = "SELECT * FROM RegistroUptex WHERE id=$dma";


	$datos = $mysql->query($consulta);

	$fila = $datos-> fetch_array();

	$dno = $fila['Nombre'];
	$dma = $fila['Matricula'];
	$ddi = $fila['Direccion'];
	$dte = $fila['Telefono'];
	$dco = $fila['Correo_Electronico'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/Funciones.js"></script>
</head>
<body>
	<div id="contenedor">
	<h1>Modificar Registro</h1>
	<form>
<input type="hidden" id="Matricula" value="<?php echo $dma; ?>">	
<input type="text" id="Nombre" value="<?php echo $dno; ?>">
<input type="text" id="Direccion" value="<?php echo $ddi; ?>">
<input type="text" id="Telefono" value="<?php echo $dte; ?>">
<input type="text" id="Correo_Electronico" value="<?php echo $dco; ?>">


<button>Cancelar</button>
<button onclick=" ModificarRegistro(); ">Aceptar</button>


</form>


</div>

</body>
</html>




