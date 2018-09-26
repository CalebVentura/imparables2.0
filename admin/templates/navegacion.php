  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"><!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="info">
          <p> <?php echo $_SESSION['nombre']; ?> </p>
          <a href="#"><i class="fa fa-circle text-success" aria-hidden="true"></i> En Linea</a>
        </div>
      </div><!-- search form -->

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form><!-- /.BUSCAR EN NAVEGACION-->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Administración</li>

        <li class="treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard" aria-hidden="true"></i> <span>Resumen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right" aria-hidden="true"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard.php"><i class="fa fa-circle-o" aria-hidden="true"></i> Resumen</a></li>
          </ul>
        </li>

        <!-- REGISTRADOS -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <span>Registrados</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-registrados.php"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="crear-registro.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>


      <?php if($_SESSION['nivel']==1): ?>
       
        <!-- ADMINISTRADORES -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Administradores</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>

      <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>