<?php 
	include_once 'funciones/funciones.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $talla_polo = $_POST['talla-polo'];
    $procedencia = $_POST['procedencia'];
    $fecha = date('Y-m-d H:i:s');
    $pagado = $_POST['pagado'];
    $id_registro = $_POST['id_registro'];
    
if ($_POST['registro'] == 'nuevo'){
	
	try {
		 $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, procedencia, edad_registrado, telefono_registrado, sexo_registrado, talla_polo_registrado, fecha_registro, pagado) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssiisssi", $nombre, $apellido, $procedencia, $edad, $telefono, $sexo, $talla_polo, $fecha, $pagado);
		$stmt->execute();

		$id_registrado = $stmt->insert_id; 

		if ($stmt->affected_rows) {
			$respuesta = array(
				'respuesta' => 'exito',
				'id_registrado' => $id_registrado
			);
		}else{
			$respuesta = array(
				'respuesta' => 'error'
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

if ($_POST['registro'] == 'actualizar'){

	try {
		$stmt = $conn->prepare('UPDATE registrados SET nombre_registrado = ?, apellido_registrado = ?, procedencia = ?, telefono_registrado = ?, sexo_registrado = ?, edad_registrado = ?, talla_polo_registrado = ?, pagado = ? WHERE ID_Registrado = ? ');
		$stmt->bind_param('sssisisii', $nombre, $apellido, $procedencia, $telefono, $sexo, $edad, $talla_polo, $pagado, $id_registro );
		$stmt->execute();
		if ($stmt->affected_rows) {
			$respuesta = array(
				'respuesta' => 'exito',
				'id_actualizado' => $id_registro
			);
		}else{
			$respuesta = array(
				'respuesta' => 'error'
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
		$stmt = $conn->prepare('DELETE FROM registrados WHERE ID_Registrado = ? ' );
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
