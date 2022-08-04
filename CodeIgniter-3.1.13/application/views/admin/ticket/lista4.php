<!-- Content Wrapper -->
<div class="content-wrapper">
  <!-- Content Header -->
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
      <div class="card card-default">

        <br>  
        <div class="col-md-12">   
          <div class="table-responsive">
            <table id="example1" class="table table-bordered">
              <thead>
               <tr style="background-color: #f41e3c">
                <th scope="col">ID</th>
                <th scope="col">RUT</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha</th>
              </tr>

            </thead>
            <tbody>
             <?php if(!empty($ticketcanc)):?>
                <?php foreach($ticketcanc as $canc):?>
                  <tr>
                    <td><?php echo $canc->id_ticket;?></td>
                    <td><?php echo $canc->rut_user;?></td>
                    <td><?php echo $canc->estado_ticket;?></td>
                    <td><?php echo $canc->fecha;?></td>
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