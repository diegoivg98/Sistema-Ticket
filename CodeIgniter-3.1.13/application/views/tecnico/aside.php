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
            <a class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ticket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="<?php echo base_url();?>tickettec/ticket" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver pendientes</p>
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url();?>tickettec/ticket/ticketderiv" class="nav-link">
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