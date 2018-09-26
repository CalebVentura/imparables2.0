  <?php // jamas volvere a olvidarte, querido espacio >:
    include_once 'funciones/sesiones.php';
    include_once 'funciones/funciones.php';  
    include_once 'templates/header.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Registrados
        <small>Tu equipo</small>
      </h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ten cuidado al eliminar</h3><p>(si lo presionas se eliminará, no hay vuelta atras)</p>

          </div><!-- /.box-header --> 
            <div class="box-body">

              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Procedencia</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Telefono</th>
                  <th>Talla de polo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    try {
                      $sql = "SELECT * FROM  registrados";
                      $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }

                   while ($registrado = $resultado->fetch_assoc() ) { ?>
                     <tr>
                       <td>
                        <?php 
                          echo $registrado['nombre_registrado']."  ".$registrado['apellido_registrado']; 
                          $pagado = $registrado['pagado'];
                          if ($pagado) {
                            echo '<br><span class="badge bg-green">Pagado</span>';
                          }else{
                            echo '<br><span class="badge bg-red">No pagado</span>';
                          }
                        ?>
                       </td>
                       <td><?php echo $registrado['procedencia']; ?></td>
                       <td><?php echo $registrado['edad_registrado']; ?></td>
                       <td><?php echo $registrado['sexo_registrado']; ?></td>
                       <td><?php echo $registrado['telefono_registrado']; ?></td>
                       <td><?php echo $registrado['talla_polo_registrado']; ?></td>
                       <td>
                        <a href="editar-registro.php?id=<?php echo $registrado['ID_Registrado']; ?>" class="btn bg-orange btn-flat margin">
                           <i class="fa fa-pencil"></i>
                         </a>
                         <a href="#" data-id="<?php echo $registrado['ID_Registrado']; ?>" data-tipo="registrado" class="btn bg-maroon btn-flat margin borrar_registro">
                           <i class="fa fa-trash"></i>
                         </a>
                       </td>
                    
                     </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Procedencia</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Telefono</th>
                  <th>Talla de polo</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section>
  </div><!-- /.content-wrapper -->
  <?php include_once 'templates/footer.php'; ?> 


