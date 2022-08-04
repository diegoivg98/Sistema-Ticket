<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h5 class="mb-0 text-gray-800">Listado Categorias</h5>
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

          <a href=" <?php echo base_url();?>mantenimiento/categorias/add " class="btn btn-primary"><span class="fa fa-plus">
           </span> Agregar Categoria</a>
        
    
        </div><!-- /.card-header -->

        <br>  
        <div class="col-md-12">   
          <div class="table-responsive">

            <table class="table table-bordered">
              <thead>
                <tr style="background-color: #f41e3c">
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripcion</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($Categoria)):?>
                  <?php foreach($Categoria as $categoria):?>
                    <tr>
                      <td><?php echo $categoria->id_cat;?></td>
                      <td><?php echo $categoria->nom_cat;?></td>
                      <td><?php echo $categoria->descripcion;?></td>
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

