<!DOCTYPE html>
<html lang="en">
<!-- header -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $subtittle ?></title>
  <!-- logo -->
  <link rel="shortcut icon" href="<?= base_url('template/icons/logo.png') ?>">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  -->

  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

  <link href="<?= base_url('template/css/styles.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/css/components.css') ?>" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">

  </script>



  <script src="<?= base_url('template/js/sweetalert2.all.min.js') ?>"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-info bg-primary">
    <a class="navbar-brand text-white text-boll" href="<?= base_url('admin') ?>">BirPendNJ</a>
    <button class="btn btn-primary btn-sm order-1 bg-link order-lg-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars">
      </i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" /> -->
        <div class="input-group-append">
          <!-- <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button> -->
        </div>
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user ">
          <img src="<?= base_url('icon/pria.png') ?>" alt="" width="30px">
          <!-- <h4 class="user-name"> -->
          <div class="d-sm-none d-lg-inline-block text-white"><?php echo $this->session->userdata('nama_lengkap') ?></div>
        </a>


        <div class="dropdown-menu dropdown-menu-right shadow btn-white active">
          <!-- <div class="card mb-5  bg-white rounded"> -->
          <div class="dropdown-title"></div>
          <a href="<?= base_url('Profil/profil') ?>" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <a href="features-activities.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt"></i> Activities
          </a>
          <a href="<?= base_url('Users/users') ?>" class="dropdown-item has-icon">
            <i class="fas fa-cogs"></i> Settings
          </a>
          <!-- <div class="dropdown-divider"></div> -->
          <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
        </div>
      </li>
      </li>
    </ul>

    <!-- <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="ace-icon fa fa-user"></i> Profil</a>

          <a class="dropdown-item" href="#">
            <i class="ace-icon fa fa-cog"></i> Settings</a>

          <a class="dropdown-item" href="login.html">
            <i class="fas fa-sign-out-alt"></i> Logout</a>
          <i class="ace-icon fa fa-power-off"></i>
        </div>
      </li>
    </ul> -->
  </nav>