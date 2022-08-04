<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

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
                  <th scope="col">Estado</th>
                  <th scope="col">Fecha</th>
                </tr>
          </thead>
          <tbody>
            <?php if(!empty($ticket)):?>
                <?php foreach($ticket as $res3):?>
                  <tr>
                    <td><?php echo $res3->id_ticket;?></td>
                    <td><?php echo $res3->nombre;?></td>
                    <td><?php echo $res3->fecha;?></td>
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