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
     <form action=" <?php echo base_url(); ?>mantenimiento/establecimiento/store" method="post">

      <div class="form-group">
        <input onkeypress="return validaNumericos(event)" placeholder="Ingrese el codigo del establecimiento" type="text" id="cod_estable" name="cod_estable" class="form-control" maxlength="6" value="<?php echo set_value("cod_estable");?>" >
        <?php echo form_error("cod_estable","<span class='help-block'>","</span>");?>
      </div>

      <div class="form-group">
        <input onkeypress="return sololetras(event)" placeholder="Ingrese el nombre del establecimiento" type="text" id="nom_estable" name="nom_estable" class="form-control" maxlength="100">
        <?php echo form_error("nom_estable","<span class='help-block'>","</span>");?>
      </div>

      <div class="form-group">
        <input onkeypress="return sololetras(event)" placeholder="Ingrese una descripcion del establecimiento" type="text" id="descripcion" name="descripcion" class="form-control">
        <?php echo form_error("descripcion","<span class='help-block'>","</span>");?>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-flat">GUARDAR</button>
      </div>

    </div>
  </form>
</div>
</div>
</div>
<!-- /.card -->
</div>
  <!-- /.content-wrapper -->