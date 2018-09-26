<?php
    include_once 'funciones/sesiones.php';
    include_once 'templates/header.php';
    include_once 'funciones/funciones.php';
    $id = $_GET['id'];
    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        die("Error...!");
    }
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>EDITAR REGISTRO<small>Seguro</small></h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>

      <div class="row">
            <div class="col-md-8">
                  <!-- Main content -->
                  <section class="content">
                        <!-- Default box -->
                        <div class="box">
                              <div class="box-header with-border">
                                    <h3 class="box-title">Editar Usuario </h3><p>Para realizar el cambio tiene que agregar por lo menos una letra al nombre o apellido</p>
                              </div>
                              <div class="box-body">
                                <?php 
                                  $sql = "SELECT * FROM registrados WHERE ID_Registrado = $id ";// ==
                                  $resultado = $conn->query($sql);
                                  $registrado = $resultado->fetch_assoc();
                                 ?>
                                    <!-- form start -->
                                    <form  class="editar-registrado" role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-registrado.php">
                                          <div class="box-body">
                                                <div class="form-group">
                                                      <label for="nombre">Nombre: </label>
                                                      <input value="<?php echo $registrado['nombre_registrado']; ?>" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                                </div>
                                                <div class="form-group">
                                                      <label for="apellido">Apellido: </label>
                                                      <input value="<?php echo $registrado['apellido_registrado']; ?>" type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido ">
                                                </div>

                                                <div class="form-group">
                                                      <label for="procedencia">Procedencia: </label>
                                                      <select name="procedencia" id="procedencia" class="form-control" value="<?php echo $registrado['procedencia']; ?>">
                                                        <option value="Externo">Externo</option>
                                                        <option value="Samaria">Samaria</option>
                                                      </select>
                                                </div> 
                                                <div class="form-group">
                                                      <label for="edad">Edad: </label>
                                                      <input type="number" value="<?php echo $registrado['edad_registrado']; ?>" class="form-control" id="edad" name="edad" placeholder="edad">
                                                </div>
                                                <div class="form-group">
                                                      <label for="sexo">Sexo: </label>
                                                      <select name="sexo" id="sexo" class="form-control" value="<?php echo $registrado['sexo_registrado']; ?>">
                                                        <option value="Mujer">Mujer</option>
                                                        <option value="Hombre">Hombre</option>
                                                      </select>
                                                </div> 
                                                <div class="form-group">
                                                      <label for="telefono">Telefono: </label>
                                                      <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono " value="<?php echo $registrado['telefono_registrado']; ?>">
                                                </div> 
                                                <div class="form-group">
                                                  <label for="talla">Talla de polo: </label>
                                                  <select name="talla-polo" id="talla" class="form-control" value="<?php echo $registrado['talla_polo_registrado']; ?>">
                                                    <option value="14">14</option>
                                                    <option value="16">16</option>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                  </select>
                                                </div> 

                                                <div class="form-group">
                                                  <label for="pagado">Pagado: </label>
                                                  <select name="pagado" id="pagado" class="form-control" value="<?php echo $registrado['pagado']; ?>">
                                                    <option value="1">SI</option>
                                                    <option value="0">NO</option>
                                                  </select>
                                                </div>                                                 
                                          </div><!-- /.box-body -->



                                          <div class="box-footer">
                                            <input type="hidden" name="registro" value="actualizar">
                                            <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                                            <button type="submit" class="btn btn-primary" id="btnRegistro">GUARDAR CAMBIOS</button>
                                          </div>
                                    </form>
                              </div><!-- /.box-body -->
                        </div><!-- /.box -->
                  </section><!-- /.content -->        
            </div>
      </div>
  </div><!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?> 


