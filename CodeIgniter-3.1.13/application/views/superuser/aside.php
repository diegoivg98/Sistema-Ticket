      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" 
      style="background-color: #f41e3c">
      
      <!-- Sidebar -->
      <div class="sidebar">

       <div class="row">
          <div class="logo">
            <img src="<?php echo base_url()?>assets/bootstrap/img/logo horizontal fondo rojo.png" class="rounded float-left" alt="150" width="99%"> 
          </div>
          
        </div>
              <!-- Sidebar Menu -->
              <nav class="mt-1">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Mantenimiento
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  class="nav-link" href="<?php echo base_url();?>mantenimiento/categorias">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorias </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>mantenimiento/subcategoria">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>mantenimiento/establecimiento">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Establecimientos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>mantenimiento/usuario" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" <?php echo base_url();?>mantenimiento/perfiles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perfiles</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" <?php echo base_url();?>mantenimiento/mansubcat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Control Perfil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ticket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href=" <?php echo base_url();?>ticket/ticket" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver pendientes</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url();?>ticket/ticket/lsol" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver solucionados</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url();?>ticket/ticket/lcancel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver cancelados</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="<?php echo base_url();?>ticket/ticket/lderiv" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver derivados</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>