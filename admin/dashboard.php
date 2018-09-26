  <?php // jamas volvere a olvidarte, querido espacio >:
    include_once 'funciones/sesiones.php';
    include_once 'funciones/funciones.php';  
    include_once 'templates/header.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>RESUMEN<small>Imparables 2018</small></h1>
        <a href="admin-area.php">Ir a inicio</a>
      </section>

      <!-- Main content -->
      <section class="content">

        <h2 class="page-header"> Estadisticas </h2>
        <div class="row">

          <!--Total registrados-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>Total registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Mas informacion <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>    

          <!--Total pagados-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado = 1";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>Total Pagados</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Mas informacion <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total NO pagados-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado = 0 ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>Total NO pagados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-times"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total MUJERES INSCRITAS-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE sexo_registrado = 'Mujer' ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>MUJERES INSCRITAS</p>
              </div>
              <div class="icon">
                <i class="fa fa-female"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total VARONES INSCRITOS-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE sexo_registrado = 'Hombre' ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>HOMBRES INSCRITOSS</p>
              </div>
              <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total ADOLESCENTES INSCRITOS-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE edad_registrado <= 16 ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>ADOLESCENTES (menores a 17 años)</p>
              </div>
              <div class="icon">
                <i class="fa fa-child"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total JOVENES INSCRITOS-->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE edad_registrado >= 17 ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>JOVENES (Mayores a 17 años)</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-circle"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total INSCRITOS EXTERNOS -->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE procedencia = 'Externo' ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>EXTERNOS</p>
              </div>
              <div class="icon">
                <i class="fa fa-rocket"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  

          <!--Total INSCRITOS SAMARIA -->
          <div class="col-lg-3 col-xs-6">
            <?php 
              $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE procedencia = 'Samaria' ";
              $resultado = $conn->query($sql);
              $registrados = $resultado->fetch_assoc();
             ?>

            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?> </h3>

                <p>SAMARIA</p>
              </div>
              <div class="icon">
                <i class="fa fa-home"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  
        </div>
      </section><!-- /.content -->
      
    </div><!-- /.content-wrapper -->
  <?php include_once 'templates/footer.php'; ?> 
