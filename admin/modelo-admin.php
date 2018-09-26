<?php 
	include_once 'funciones/funciones.php';
	$usuario = $_POST['usuario'];
 	$nombre = $_POST['nombre'];
 	$password = $_POST['password'];
 	$id_registro = $_POST['id_registro'];
	$nivel = $_POST['privilegio'];

if ($_POST['registro'] == 'nuevo'){
	$editado = date('Y-m-d H:i:s');
	$opciones = array(
		'cost' => 12
	);
	$password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
	
	try {	
		$stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password, editado, nivel) VALUES (?,?,?,?,?)");
		$stmt->bind_param("ssssi", $usuario, $nombre, $password_hashed, $editado, $nivel);
		$stmt->execute();

		$id_registro = $stmt->insert_id;

		if ($stmt->affected_rows) {//stmt->affected_rows
		 	$respuesta = array(
		 		'respuesta'=> 'exito',
		 		'id_admin'=> $id_registro
		 	);
		}else{
		 	$respuesta = array(
		 		'respuesta'=> 'error'
		 	);
		}
		$stmt->close();
		$conn->close();
	} catch (Exception $e) {
		 echo "Error: " . $e->getMessage();
	}
	die(json_encode($respuesta)); 	
}

if ($_POST['registro'] == 'actualizar'){
	$editado = date('Y-m-d H:i:s');
	try {
		if (empty($_POST['password'])) {
			$stmt = $conn->prepare("UPDATE admins SET  usuario = ?, nombre = ?, editado = ?, nivel = ?  WHERE id_admin = ?");
			$stmt->bind_param("sssii", $usuario, $nombre, $editado, $nivel, $id_registro);
		}else{
			$opciones = array(
				'cost' => 12
			);		
			$hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
			$stmt = $conn->prepare("UPDATE admins SET usuario = ?, nombre = ?, password = ?, editado = ?, nivel = ?  WHERE id_admin = ?");
			$stmt->bind_param("ssssii", $usuario, $nombre, $hash_password, $editado, $nivel, $id_registro);	
		}

		$stmt->execute();
		$id_actualizado = $stmt->insert_id;

		if ($stmt->affected_rows) {
			$respuesta = array(
				'respuesta' => 'exito',
				'id_actualizado' => $id_actualizado
			);
		}else{
			$respuesta = array(
				'respuesta'=> 'error'
			);
		}
		$stmt->close();
		$conn->close();

	} catch (Exception $e) {
		$respuesta = array(
			'respuesta' => $e->getMessage()
		);
	}
	die(json_encode($respuesta));
}

if ($_POST['registro'] == 'eliminar'){
	$id_borrar = $_POST['id'];
	try {
		$stmt = $conn->prepare('DELETE FROM admins WHERE id_admin = ? ');
		$stmt->bind_param('i', $id_borrar);
		$stmt->execute();
		if($stmt->affected_rows){
			$respuesta = array(
				'respuesta' => 'exito',  
				'id_eliminado' => $id_borrar
			);
		}else{
			$respuesta = array(
				'respuesta' => 'error'
			);
		}
	} catch (Exception $e) {
		$respuesta = array(
			'respuesta' => $e->getMessage()
		);
	}
	die(json_encode($respuesta));
}
