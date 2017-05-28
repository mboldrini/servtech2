<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $titulo;  ?> - ServTech</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
  
  <script src="<?= base_url(); ?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

  <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/style.css">

  <script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script src="<?= base_url(); ?>/assets/script.js"></script>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini <?php if( $infos[0]->cor != NULL ){ echo $infos[0]->cor; }else{ echo 'skin-blue'; } ?>">
<div class="wrapper">

   <header class="main-header">

    <!-- Logo -->
    <a href="<?= base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>TH</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Serv</b>Tech</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url(); ?>/assets/images/mano.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $infos[0]->nome; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?= base_url(); ?>/assets/images/mano.jpg" class="img-circle" alt="User Image">
                <p>
                  <?php echo $infos[0]->nome; ?> <?php echo $infos[0]->sobrenome; ?>
                  <small><?php echo $infos[0]->descricao; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url() ?>perfil" class="btn btn-success btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url() ?>login/logout_ci" class="btn btn-danger btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>