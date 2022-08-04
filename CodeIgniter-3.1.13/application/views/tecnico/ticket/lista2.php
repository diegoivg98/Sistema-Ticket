<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h5 class="mb-0 text-gray-800">Tickets pendientes</h5>
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
        <br>  
        <div class="col-md-12">   
          <div class="table-responsive">
            <table id="example1" class="table table-bordered">
              <thead>
               <tr style="background-color: #f41e3c">
                 <th scope="col">ID</th>
                 <th scope="col">ESTABLECIMIENTO</th>
                 <th scope="col">ESTADO</th>
                 <th scope="col">FECHA</th>
                 <th scope="col">OPCIONES</th>
               </tr>

             </thead>
             <tbody>
              <?php if(!empty($tickettec2)):?>
                <?php foreach($tickettec2 as $res3):?>
                  <tr>
                    <td title="SOLICITANTE: <?php echo $res3->nombres;?> <?php echo $res3->apaterno;?> <?php echo $res3->amaterno;?>"><?php echo $res3->id_ticket;?></td>
                    <td title="<?php echo $res3->nom_estable?> "><?php echo $res3->cod_estable;?></td>
                    <td><?php echo $res3->nombre;?></td>
                    <td><?php echo $res3->fecha;?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?php echo base_url()?>tickettec/ticket/ticketsol/<?php echo 
                        $res3->id_ticket;?>" class="btn btn-success" title="SOLUCIONAR">
                        <span class="fa fa-check-square"></span>
                      </a>
                    </div>

                    <div class="btn-group">
                      <a href="<?php echo base_url()?>tickettec/ticket/ticketcancel/<?php echo 
                      $res3->id_ticket;?>" class="btn btn-danger" title="CANCELAR">
                      <span class="fa fa-window-close"></span>
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