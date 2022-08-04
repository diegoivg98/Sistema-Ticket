<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5 class="mb-0 text-gray-800">Tickets Pendientes</h5>
        </div><!-- /.col -->
        <div class="col-sm-2">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">

          <a href=" <?php echo base_url() ?>ticketfunc/ticket/add" class="btn btn-primary">
            <span class="fa fa-plus">
            </span> Agregar Ticket
          </a>


        </div><!-- /.card-header -->
        <br>  
        <div class="col-md-12">   
          <div class="table-responsive">
            <table id="example1" class="table table-bordered">
              <thead>
               <tr style="background-color: #f41e3c">
                <th scope="col">ID</th>
                <th scope="col">Problema</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
              </tr>

            </thead>
            <tbody>
             <?php if(!empty($ticketf)):?>
                <?php foreach($ticketf as $res4):?>
                  <tr>
                    <td><?php echo $res4->id_ticket;?></td>
                    <td title="<?php echo $res4->descripcion;?>"><?php echo $res4->nom_subcat;?></td>
                    <td><?php echo $res4->nombre;?></td>
                    <td><?php echo $res4->fecha;?></td>
                    <td>
                      <div class="btn-group">
                        <a href=" <?php echo base_url()?>ticketfunc/ticket/edit/<?php echo 
                        $res4->id_ticket;?>" class="btn btn-warning" title="EDITAR">
                          <span class="fa fa-edit"></span>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach;?>
              <?php endif;?>
            </tbody>
          </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.card-default-->
  </div><!-- /.card -->
</div><!-- /.content-wrapper -->