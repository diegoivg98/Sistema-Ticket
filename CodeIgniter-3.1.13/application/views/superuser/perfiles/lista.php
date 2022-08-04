<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
                  <h5 class="mb-0 text-gray-800">Listado Perfiles</h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
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
       
        <!-- /.card-header -->
        <!-- /.card-body -->
        <br>  
        <div class="col-md-12">   
          <div class="table-responsive">

            <table class="table table-bordered">
              <thead>
                <tr style="background-color: #f41e3c">
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripcion</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($Perfil)):?>
                  <?php foreach($Perfil as $perfiles):?>
                    <tr>
                      <td><?php echo $perfiles->id_perfil;?></td>
                      <td><?php echo $perfiles->nom_perfil;?></td>
                      <td><?php echo $perfiles->descripcion;?></td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.content-wrapper -->