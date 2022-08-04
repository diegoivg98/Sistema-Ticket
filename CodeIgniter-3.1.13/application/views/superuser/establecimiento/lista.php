<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h5 class="mb-0 text-gray-800">Listado Establecimientos</h5>
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
          <a href=" <?php echo base_url();?>mantenimiento/establecimiento/add" type="button" class="btn btn-primary">
            <span class="fa fa-plus"></span> Agregar Establecimiento
          </a>

 
     </div><!-- /.card-header -->
     <br>  
     <div class="col-md-12">   
      <div class="table-responsive">
        <table id="example1" class="table table-bordered">
          <thead>
            <tr style="background-color: #f41e3c">
              <th scope="col">ID</th>
              <th scope="col">CÓDIGO</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">DESCRIPCION</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($Establecimiento)):?>
              <?php foreach($Establecimiento as $estable):?>
                <tr>
                  <td><?php echo $estable->id_estable;?></td>
                  <td><?php echo $estable->cod_estable;?></td>
                  <td><?php echo $estable->nom_estable;?></td>
                  <td><?php echo $estable->descripcion;?></td>
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

<script type="text/javascript">
  function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
</script>