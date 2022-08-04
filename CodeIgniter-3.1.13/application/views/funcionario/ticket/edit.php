<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
             <h5 class="mb-0 text-gray-800">Modificar Ticket</h5>
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

    <form action="<?php echo base_url();?>ticketfunc/ticket/update" method="post">

      <input type="hidden" id="id_ticket" name="id_ticket" value="<?php echo $Ticket->id_ticket?> ">

        <div class="form-group col-sm-6">
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

      <div class="form-group col-sm-6">
        <label for="Subcategoria">Subcategoria:</label>
        <select name="id_subcat" id="Subcategoria" class="form-control">
          <option value="">Selecciona una subcategoria</option>
        </select>
      </div>

      <div class="form-group ">
        <input hidden="" class="form-control" name="rut_user" id="rut_user" value="<?php echo $this->session->userdata("rut_user")?>">
      </div>

      <div class="form-group col-sm-6">
        <select hidden="" name="id_estable" id="Establecimiento" class="form-control">
          <option value="<?php echo $this->session->userdata("id_estable")?>"></option>
        </select>
      </div>

      <div class="form-group">
        <label for="">Descripcion</label>
        <textarea type="text" id="descripcion" name="descripcion" class="form-control" rows="8"><?php echo $Ticket->descripcion;?></textarea>
        <?php echo form_error("descripcion","<span class='help-block'>","</span>");?>
      </div>

        <div class="form-group col-sm-2">
       <label for="">Direccion IP</label>
       <?php
       $host= gethostname();
       $ip = gethostbyname($host);
       ?>
       <input id="ip" name="ip" type="text" class="form-control" value="<?php echo $Ticket->ip;?>">IP Sugerida: <?php echo $ip;?>
     </div>
     <?php echo form_error("ip","<span class='help-block'>","</span>");?>

     <div class="form-group">
        <?php
       $host= gethostname();
       $ip = gethostbyname($host);
       ?>
       <input hidden="" id="ip_sugerida" name="ip_sugerida" type="text" class="form-control" value="<?php echo $ip;?>">
    </div>

    <div class="form-group col-sm-4">
      <label for="">Telefono</label>
      <input onkeypress="return validaNumericos(event)" class="form-control" maxlength="9" 
      type="text" id="fono" name="fono" value="<?php echo $Ticket->fono;?>">
      <?php echo form_error("fono","<span class='help-block'>","</span>");?>
    </div>

    <div class="form-group col-sm-6">
      <select hidden="" name="estado_ticket" id="estado_ticket" class="form-control">
        <?php foreach($mtn_estado_ticket as $estado):?>
          <option value="<?php echo $estado->id;?>"><?php echo $estado->nombre;?></option>
        <?php endforeach;?>
      </select>
    </div>

    <div class="form-group col-sm-6">
      <select hidden="" name="id_mansub" id="mansubcat" class="form-control">
        <option ></option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success btn-flat">Actualizar</button>
    </div>

  </form>
</div>
</div>
</div>
<!-- /.card -->
</div>
  <!-- /.content-wrapper -->