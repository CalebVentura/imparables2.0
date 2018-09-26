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
      <h1>EDITAR ADMINISTRADOR<small>Seguro</small></h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>
      <div class="row">
        <div class="col-md-8">
          <!-- Main content -->
          <section class="content">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                    <h3 class="box-title">Editar Administrador</h3>
              </div>
              <div class="box-body">
                <?php 
                  $sql = "SELECT * FROM `admins` WHERE `id_admin` = $id ";// ==
                  $resultado = $conn->query($sql);
                  $admin = $resultado->fetch_assoc();
                 ?>
                  <!-- form start -->
                  <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                    <div class="box-body">

                      <div class="form-group">
                        <label for="usuario">Usuario: </label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php echo $admin['usuario']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="nombre">Tu nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $admin['nombre']; ?>"><!--para rellenar el los campos antes en la edicion -->
                      </div>

                      <div class="form-group">
                        <label for="password">Contraseña: </label>
                        <input type="password" class="form-control" id="password" name="password"  value=" " placeholder="********">
                      </div>

                      <div class="form-group">
                        <label for="privilegio">Privilegio: </label>
                        <select name="privilegio" id="privilegio" class="form-control">
                          <option value="1">Total</option>
                          <option value="0">Reducido</option>
                        </select>
                      </div>    

                    </div><!-- /.box-body -->


                    <div class="box-footer">
                          <input type="hidden" name="registro" value="actualizar">
                          <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                          <button type="submit" class="btn btn-primary"">Guardar cambios</button>
                    </div>
                  </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->        
        </div>
      </div>
  </div><!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?> 


