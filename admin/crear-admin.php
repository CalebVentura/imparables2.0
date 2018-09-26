  <?php // jamas volvere a olvidarte, querido espacio >:
    include_once 'funciones/sesiones.php';
    include_once 'templates/header.php';
    include_once 'funciones/funciones.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>CREAR ADMINISTRADOR<small></small></h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>

      <div class="row">
        <div class="col-md-8">
          <!-- Main content -->
          <section class="content">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                    <h3 class="box-title">Elija bien a quien darle privilegios</h3><p>El que tiene privilegio total puede crear, editar y eliminar administradores</p>
              </div>
              <div class="box-body">
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                  <div class="box-body">
                        <div class="form-group">
                              <label for="usuario">Usuario: </label>
                              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Anonimo">
                        </div>
                        <div class="form-group">
                              <label for="nombre">Tu nombre: </label>
                              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>

                        <div class="form-group">
                              <label for="password">Contraseña: </label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        </div>
                        <div class="form-group">
                              <label for="password">Reptite Contraseña: </label>
                              <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="repetir password">
                              <span id="resultado_password" class="help-block"></span>
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
                    <input type="hidden" name="registro" value="nuevo">
                    <button type="submit" class="btn btn-primary" id="crear_registro_admin">Guardar</button>
                  </div>
                </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->        
        </div>
      </div>
  </div><!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?> 


