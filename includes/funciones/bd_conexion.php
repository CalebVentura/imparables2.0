<?php 
	$conn = new mysqli('localhost','root','123456','imparables2');
	if ($conn->connect_errno) {
		echo "fallo en la conexion";
	}
 ?>
