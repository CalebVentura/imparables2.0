<?php 
	$conn = new mysqli('localhost','ukmmbjkl_caleb','SamariaADP.2018','ukmmbjkl_imparables2018');
	if ($conn->connect_errno) {
		echo "fallo en la conexion";
	}else{
		echo "conectado";
	}
 ?>

 <?php 
	$conn = new mysqli('localhost', 'ukmmbjkl_caleb', 'SamariaADP.2018', 'ukmmbjkl_imparables2018');
	if ($conn->$connect_error) {
		echo $error = $conn->connect_error;
	}
 ?>