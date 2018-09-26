<?php /*
 if(!isset($_POST['submit'])) {
   exit("hubo un error");
 } */?>
<?php if (isset($_POST['submit'])) :
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $talla_polo = $_POST['talla-polo'];
    $procedencia = $_POST['procedencia'];
    $fecha = date('Y-m-d H:i:s');
      $regalo = 1;
      $pagado = 0;
        try {
            require_once('includes/funciones/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, procedencia, edad_registrado, telefono_registrado, sexo_registrado, talla_polo_registrado, fecha_registro,  pagado) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssiisssi", $nombre, $apellido, $procedencia, $edad, $telefono, $sexo, $talla_polo, $fecha, $pagado);
            $stmt->execute();
            $ID_registro = $stmt->insert_id; 
            $stmt->close();
            $conn->close();
            header('Location: guardar_registro.php?exitoso=1'); //prevenir reinsercion de datos
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
   endif; ?>

<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>REGISTRO EXITOSO</h2>
    <?php if (isset($_GET['exitoso'])):
      if ($_GET['exitoso']=="1") {
        echo "Registro Exitoso";
      }
    endif; ?>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>