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
      <h1>CREAR REGISTRO<small>Seguro</small></h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>
    <div class="row">
      <div class="col-md-8">
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                  <h3 class="box-title">PRESIONE UNA SOLA VEZ EL BOTON GUARDAR</h3><p> (En caso presionó por equivocación, elimine y vuelva a editar)</p>
            </div>
            <div class="box-body">
              <!-- form start -->
              <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-registrado.php">
                <div class="box-body">
                  <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                        <label for="apellido">Apellido: </label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido ">
                  </div>
                  <div class="form-group">
                        <label for="procedencia">Procedencia: </label>
                        <select name="procedencia" id="procedencia" class="form-control">
                          <option value="Externo">Externo</option>
                          <option value="Samaria">Samaria</option>
                        </select>
                  </div> 
                  <div class="form-group">
                        <label for="edad">Edad: </label>
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="edad">
                  </div>
                  <div class="form-group">
                        <label for="sexo">Sexo: </label>
                        <select name="sexo" id="sexo" class="form-control">
                          <option value="Mujer">Mujer</option>
                          <option value="Hombre">Hombre</option>
                        </select>
                  </div> 
                  <div class="form-group">
                        <label for="telefono">Telefono: </label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono ">
                  </div> 
                  <div class="form-group">
                    <label for="talla">Talla de polo: </label>
                    <select name="talla-polo" id="talla" class="form-control">
                      <option value="14">14</option>
                      <option value="16">16</option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                    </select>
                  </div> 

                  <div class="form-group">
                    <label for="pagado">Pagado: </label>
                    <select name="pagado" id="pagado" class="form-control">
                      <option value="1">SI</option>
                      <option value="0">NO</option>
                    </select>
                  </div> 
                </div><!-- /.box-body -->
                <div class="box-footer">
                      <input type="hidden" name="registro" value="nuevo">
                      <button type="submit" class="btn btn-primary" id="btnRegistro">Guardar</button>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </section><!-- /.content -->        
      </div>
    </div>
  </div><!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?> 


