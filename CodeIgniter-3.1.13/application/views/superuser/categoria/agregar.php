<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
     
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


     <form action=" <?php echo base_url(); ?>mantenimiento/categorias/almacenar " method="post">

       <div class="form-group">
        <label for="">Nombre</label>
        <input placeholder="Ingrese nombre de la categoria" onkeypress="return sololetras(event)" type="text" id="nom_cat" class="form-control">
        <?php echo form_error("nom_cat","<span class='help-block'>","</span>");?>
      </div>

      <div class="form-group">
        <label for="">Descripcion</label>
        <input placeholder="Ingrese una descripcion" type="text" id="descripcion" class="form-control">
      <?php echo form_error("descripcion","<span class='help-block'>","</span>");?>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-flat">Guardar</button>
      </div>

    </form>
  </div>
</div>
</div>
<!-- /.card -->
</div>
  <!-- /.content-wrapper -->