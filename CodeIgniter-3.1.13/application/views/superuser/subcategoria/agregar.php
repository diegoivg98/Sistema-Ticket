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
     <form action="<?php echo base_url()?>mantenimiento/subcategoria/store" method="post">

      <div class="form-group col-sm-3">
        <label for="Categoria">Categoria:</label>
        <select name="id_cat" id="Categoria" class="form-control">
          <option value="">Selecciona una categoria</option>
          <?php 
          foreach ($Categoria as $row) {
            echo '<option value="'.$row->id_cat.'">'.$row->nom_cat.'</option>';
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label for="">Subcategoria</label>
        <input class="form-control" 
        type="text" id="nom_subcat" name="nom_subcat" placeholder="Ingrese nombre de la subcategoria">
        <?php echo form_error("nom_subcat","<span class='help-block'>","</span>");?>
      </div>

      <div class="form-group">
        <label for="">Descripcion</label>
        <input class="form-control" 
        type="text" id="descripcion" name="descripcion" placeholder="Ingrese una descripcion a la subcategoria">
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