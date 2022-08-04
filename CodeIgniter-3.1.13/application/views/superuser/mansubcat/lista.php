<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h5 class="mb-0 text-gray-800">Listado Control Perfil</h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
    
         <a href=" <?php echo base_url(); ?>mantenimiento/mansubcat/add " class="btn btn-primary">
            <span class="fa fa-plus">
           </span> Nuevo Control Perfil
          </a>
      </div><!-- /.card-header -->

      <br>  
      <div class="col-md-12">   
        <div class="table-responsive">
          <table id="example1" class="table table-bordered">
            <thead>
              <tr style="background-color: #f41e3c">
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col">Subcategoria</th>
                <th scope="col">Perfil</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($query2)):?>
                <?php foreach($query2 as $res2):?>
                  <tr>
                    <td><?php echo $res2->id_mansub;?></td>
                    <td><?php echo $res2->nom_cat;?></td>
                    <td><?php echo $res2->nom_subcat;?></td>
                    <td><?php echo $res2->nom_perfil;?></td>
                  </td>
                </tr>

              <?php endforeach;?>
            <?php endif;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div><!-- /.card -->
</div><!-- /.content-wrapper -->