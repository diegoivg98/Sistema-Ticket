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
      <div class="card card-default">

        <!-- /.card-header -->
        <!-- /.card-body -->
        <br>
        <div class="accordion" id="solucion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Ticket <?php echo $Ticket->id_ticket;?>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#solucion">
              <div class="card-body">
                <div class="col-md-12">   
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr style="background-color: #f41e3c">
                          <th scope="col">Categoria</th>
                          <th scope="col">Subcategoria</th>
                          <th scope="col">Solicitante</th>
                          <th scope="col">Establecimiento</th>
                          <th scope="col">Fono</th>
                          <th scope="col">Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($usuario)):?>
                          <?php foreach($usuario as $user):?>
                          <tr>
                            <td><?php echo $user->nom_cat;?></td>
                            <td><?php echo $user->nom_subcat;?></td>
                            <td><?php echo $user->nombres;?> <?php echo $user->apaterno;?> <?php echo $user->amaterno;?></td>
                            <td title="<?php echo $user->nom_estable;?>"><?php echo $user->cod_estable;?></td>
                            <td><?php echo $user->fono;?></td>
                            <td><?php echo $user->fecha;?></td>
                          </tr>
                        <?php endforeach;?>
                      <?php endif;?>
                    </tbody>
                  </table>
                </div>

                <div class="col-12">
                  <label for="">Problema:</label>
                  <textarea readonly="" type="text" class="form-control" rows="8"><?php echo $Ticket->descripcion;?></textarea>
                </div>

              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mensaje Cancelar
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#solucion">
            <div class="card-body">
             <div class="col-md-12">   

               <form action="<?php echo base_url();?>tickettec/ticket/storecancel" method="post">

                 <div class="form-group ">
                  <input hidden="" class="form-control" name="rut_user" id="rut_user" value="<?php echo $this->session->userdata("rut_user")?>">
                </div>

                <div class="form-group ">
                  <input hidden="" class="form-control" name="id_ticket" id="id_ticket" 
                  value="<?php echo $Ticket->id_ticket;?>">
                </div>

                <div class="form-group">
                  <label for="">Mensaje</label>
                  <textarea placeholder="Deje respuesta a la cancelación de este ticket" type="text" id="mensaje" name="mensaje" class="form-control" rows="8"></textarea>
                  <?php echo form_error("mensaje","<span class='help-block'>","</span>");?>
                </div>

                <div class="form-group col-sm-6">
                  <select hidden="" name="estado_ac" id="estado_ac" class="form-control">
                    <?php foreach($mtn_estado_ticket as $estado):?>
                      <option value="<?php echo $estado->id;?>"><?php echo $estado->nombre;?></option>
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
      </div>
    </div>
    <br>  

  </div>
</div>
<!-- /.card -->
</div>
  <!-- /.content-wrapper -->
