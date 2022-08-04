<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
                  <h5 class="mb-0 text-gray-800">Listado Subcategorias</h5>
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
      <!-- /.card-header -->
      <a href=" <?php echo base_url() ?>mantenimiento/subcategoria/add" class="btn btn-primary">
            <span class="fa fa-plus">
           </span> Agregar Subcategoria
          </a>
          </div>
      <br>  
      <div class="col-md-12">   
        <div class="table-responsive">
          <table id="example1" class="table table-bordered">
            <thead>
              <tr style="background-color: #f41e3c">
                <th scope="col">Nombre Categoria</th>
                <th scope="col">Nombre Subcategoria</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($query)):?>
                <?php foreach($query as $res):?>
                  <tr>
                    <td><?php echo $res->nom_cat;?></td>
                    <td><?php echo $res->nom_subcat;?></td>
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