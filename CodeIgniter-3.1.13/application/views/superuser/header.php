<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
  <link integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
  
  <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css ">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <link href="http://allfont.es/allfont.css?fonts=montserrat" rel="stylesheet" type="text/css" />
  <!-- DataTables -->
  <link rel="stylesheet" href=" <?php echo base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css
">
  <style>
    body {
      font-family: 'Montserrat', arial;
    }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
        <div class="info" title="Perfil: SUPERUSUARIO">
      <?php echo $this->session->userdata("nombre"); ?>
      <?php echo $this->session->userdata("apaterno"); ?>
      <?php echo $this->session->userdata("amaterno"); ?>
      </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
       <a href=" <?php echo base_url();?>signupform/logout" type="button" class="btn btn-primary">Cerrar Sesión <i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->