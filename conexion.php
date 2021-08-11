<?php
$mysql = new mysqli("localhost","root","12345678","RegistroUptex");
if ($mysql-> connect_errno) {
}

?>
<?php
$conn = new mysqli("localhost","root","12345678","loginvaidroll7");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>