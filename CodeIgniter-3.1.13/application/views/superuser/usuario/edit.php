<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-1">
        <div class="col-sm-6">
        <h5 class="mb-0 text-gray-800">Modificar Usuario</h5>
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

         <form action=" <?php echo base_url(); ?>mantenimiento/usuario/update " method="post">

           <div class="form-group <?php echo form_error("rut_user")!=false?'is-invalid':''?>">
            <label for="">Datos Personales</label>
            <input readonly="" class="form-control" maxlength="10" 
            type="text" id="rut_user" name="rut_user" value="<?php echo !empty(form_error("rut_user"))? set_value("rut_user"):$Usuario->rut_user;?>" placeholder="ingrese su rut">
            <?php echo form_error("rut_user","<span class='help-block'>","</span>");?>
          </div>

          <div class="form-group">
            <input  onkeypress="return sololetras(event)" type="text" id="nombres" class="form-control" name="nombres" value="<?php echo $Usuario->nombres;?>" placeholder="Ingrese ambos nombres">
            <?php echo form_error("nombres","<span class='help-block'>","</span>");?>
          </div>

          <div class="form-group">
            <input onkeypress="return sololetras(event)" type="text" id="apaterno" class="form-control" placeholder="Ingrese su apellido paterno" name="apaterno" value="<?php echo $Usuario->apaterno;?>" placeholder="Ingrese su apellido paterno">
            <?php echo form_error("apaterno","<span class='help-block'>","</span>");?>
          </div>

          <div class="form-group">
            <input onkeypress="return sololetras(event)" type="text" id="amaterno" class="form-control" name="amaterno" value="<?php echo $Usuario->amaterno;?>" placeholder="Ingrese su apellido materno">
            <?php echo form_error("amaterno","<span class='help-block'>","</span>");?>
          </div>

          <div class="form-group">
            <label for="">Datos de registro</label>
            <input type="text" id="nom_user" class="form-control"  name="nom_user" value="<?php echo $Usuario->nom_user;?>" placeholder="Ingrese un nombre de usuario">
            <?php echo form_error("nom_user","<span class='help-block'>","</span>");?>
          </div>

          <div class="input-group">
            <input autocomplete="off" id="passw" name="passw" type="password" class="form-control" placeholder="Ingrese una contraseña" >
            <div class="input-group-append">

              <button title="Ver contraseña" width="1" class="btn btn-primary" type="button" onclick="mostrarContrasena()">
                <span class="fas fa-eye"></span>
              </button>
            </div>
          </div>
          <?php echo form_error("passw","<span class='help-block'>","</span>");?>


          <br>
          <div class="form-group col-sm-3">
            <label for="Pefil">Perfil:</label>
            <select name="id_perfil" id="id_perfil" class="form-control">
              <?php foreach($Perfil as $perfiles):?>
                <option value=" <?php echo $perfiles->id_perfil;?> "><?php echo $perfiles->nom_perfil;?></option>
              <?php endforeach;?>
            </select>
          </div>

          <div class="form-group col-sm-6">
            <label for="Establecimiento">Establecimiento:</label>
            <select name="id_estable" id="id_estable" class="form-control">
              <?php foreach($Establecimiento as $estable):?>
                <option value=" <?php echo $estable->id_estable;?> "><?php echo $estable->nom_estable;?></option>
              <?php endforeach;?>
            </select>
          </div>

          

          <div class="form-group">
            <button type="submit" class="btn btn-success btn-flat">ACTUALIZAR</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- /.card -->
</div>
<!-- /.content-wrapper -->

<script>
  function mostrarContrasena(){
    var tipo = document.getElementById("passw");
    if(tipo.type == "password"){
      tipo.type = "text";
    }else{
      tipo.type = "password";
    }
  }
</script>