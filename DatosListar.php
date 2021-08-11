<?php
include("conexion.php");

$tabla = $mysql->query("SELECT * FROM datos");

echo "<h1>Listado de Registros</h1>";

echo "<table border = '1'>
		<th>Nombre</th>

		<th colspan='2'>Opciones</th>
		<tbody>
";

	while ($row = mysqli_fetch_array($tabla)) {
		echo "<tr>";
		echo "<td>" .$row['Nombre'] ."</td>";


		echo "<td><a style='cursor:pointer' onclick =' Modificar(" .$row['Matricula'] .");'>Modificar</a></td>";
		echo "<td><a style='cursor:pointer' onclick =' Eliminar(" .$row['Matricula'] .");'>Eliminar</a></td>";

		echo "</tr>";
	}

	echo "</tbody></table>";
?>