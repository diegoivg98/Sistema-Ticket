<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href=" <?php echo base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/summernote/summernote-bs4.css">
  <link href="http://allfont.es/allfont.css?fonts=montserrat" rel="stylesheet" type="text/css" />
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
         <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
        </li>
      </ul>
      <div class="info" title="Perfil: TECNICO">
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