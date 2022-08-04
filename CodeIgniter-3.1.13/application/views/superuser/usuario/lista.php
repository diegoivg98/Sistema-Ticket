<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h5 class="mb-0 text-gray-800">Listado Usuarios</h5>
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
        <div class="card-header">
          <a href=" <?php echo base_url();?>mantenimiento/usuario/add" type="button" class="btn btn-primary">
            <span class="fa fa-plus"></span> Agregar Usuario
          </a>
      </div>



      <!-- /.card-header -->
      <!-- /.card-body -->
      <br>  
      <div class="col-md-13">   
        <div class="table-responsive">

          <table id="example1" class="table table-bordered">
            <thead>
              <tr style="background-color: #f41e3c">
                <th scope="col">RUT</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($query3)):?>
                <?php foreach($query3 as $res3):?>
                  <tr>
                    <td><?php echo $res3->rut_user;?></td>
                    <td><?php echo $res3->nombres;?></td>
                    <td><?php echo $res3->apaterno;?></td>
                    <td><?php echo $res3->amaterno;?></td>
                    <td>
                      <div class="btn-group">
                        <a href=" <?php echo base_url()?>mantenimiento/usuario/edit/<?php echo $res3->rut_user;?>" class="btn btn-warning" title="EDITAR">
                          <span class="fa fa-edit"></span>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach;?>
              <?php endif;?>
            </tbody>
          </table>
        </div>
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