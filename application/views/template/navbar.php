<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Touché</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?= base_url('assets/img/apple-touch-icon.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/img/apple-touch-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/img/apple-touch-icon-114x114.png') ?>">


  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome/css/font-awesome.css') ?>">

  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nivo-lightbox/nivo-lightbox.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nivo-lightbox/default.css') ?>">


  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation
    ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">Touché</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#restaurant-menu" class="page-scroll">Facility</a></li>
          <li><a href="#portfolio" class="page-scroll">Room</a></li>
          <li><a href="#team" class="page-scroll">Member</a></li>
          <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
          <?php
          if ($this->session->userdata('username')) {
            ?>
            <?php ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Profile</a></li>
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><a class="dropdown-item" href="<?= base_url('login/logout') ?>">Logout</a></li>
              </ul>
            </li>
            <?php
          } else { ?>
            <li><a href="<?= base_url('login') ?>" class="page-scroll">Login</a></li>
          <?php } ?>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('beranda/#portfolio') ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Momo</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>