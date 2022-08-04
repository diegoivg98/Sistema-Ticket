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
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-eye" aria-hidden="true"></i>
              <p>
                Ver Funcionarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>ticketadmin/ticket" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Funcionarios</p>
                </a>
              </li>
            </ul>
          </li>


           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ticket Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?php echo base_url();?>ticketadmin/ticket/ladmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administrador</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="<?php echo base_url();?>ticketadmin/ticket/ladminsol" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Solucionados</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="<?php echo base_url();?>ticketadmin/ticket/ladmincancel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cancelados</p>
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