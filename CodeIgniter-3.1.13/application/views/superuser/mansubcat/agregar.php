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
      <?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error");?></p>
        </div>
      <?php endif;?>
      <form action=" <?php echo base_url(); ?>mantenimiento/mansubcat/store " method="post">



      <div class="form-group col-sm-6">
        <label for="Categoria">Categoria:</label>
        <select name="id_cat" id="Categoria" class="form-control" required>
          <option value="">Selecciona una categoria</option>

          <?php 
          foreach ($Categoria as $row) {
            echo '<option value="'.$row->id_cat.'">'.$row->nom_cat.'</option>';
          }
          ?>
        </select>
      </div>

      <div class="form-group col-sm-6">
        <label for="Subcategoria">Subcategoria:</label>
        <select name="id_subcat" id="Subcategoria" class="form-control" required>
          <option value="">Selecciona una subcategoria</option>
        </select>
      </div>

       <div class="form-group col-sm-3">
            <label for="Pefil">Perfil:</label>
            <select name="id_perfil" id="id_perfil" class="form-control">
              <?php foreach($Perfil as $perfiles):?>
                <option value=" <?php echo $perfiles->id_perfil;?> "><?php echo $perfiles->nom_perfil;?></option>
              <?php endforeach;?>
            </select>
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