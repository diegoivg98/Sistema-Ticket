<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css" type="text/css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css" type="text/css">
  <style>
    body {
      font-family: 'Montserrat', arial;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div align="center">   
     <img src="imagenes/logo muni rojo sf.png" width="157" >
   </div>
   <div class="login-logo">
    <a ><b>Sistema</b> Ticket</a>
  </div>
  <!-- /.login-logo -->
  <div class="card-body login-card-body">
    <p class="login-box-msg">Bienvenido</p>
    <?php if($this->session->flashdata("error")):?>
      <div class="alert alert-danger" role="alert">
        <p><?php echo $this->session->flashdata("error") ?></p>
      </div>
    <?php endif; ?>
    <form action=" <?php echo base_url();?>signupform/inicio" method="post">
     <div class="input-group mb-3">
      <input name="nom_user" type="text" class="form-control" placeholder="Usuario">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input autocomplete="off" id="password" name="passw" type="password" class="form-control" placeholder="Contraseña">
      <div class="input-group-append">
        <div class="input-group-text">
        </div>
        <button title="Ver contraseña" width="1" class="btn btn-primary" type="button" onclick="mostrarContrasena()">
          <span class="fas fa-eye"></span>
        </button>
      </div>
      
    </div>

    <div class="row">

      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <script>
    function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
        tipo.type = "text";
      }else{
        tipo.type = "password";
      }
    }
  </script>

  <!-- /.login-box -->
</body>
</html>