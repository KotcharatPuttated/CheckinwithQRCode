<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include('../Config.php');
include('../security1.php');
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    * {
      font-family:"Kanit";
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
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link"></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
       <!--  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button> -->
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="ad.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">QR-CODE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['Status']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="ad.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>หน้าหลัก
                <i class="right fas"></i>
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                จัดการผู้ใช้
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="projects.php?txtsearch=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการสิทธิ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="project_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เพิ่มสิทธิ์</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li> -->
            </ul>
          </li>
                <!-- <span class="right badge badge-danger">New</span> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ผลกิจกรรม
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adl1.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปวช.1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adl2.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปวช.2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adl3.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปวช.3</p>
                </a>
              </li>
              
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                ปวส.1
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adh1.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ฮาร์ดแวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ads1.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ซอฟต์แวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adm1.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>มัลติมีเดีย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adk1.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เครือข่าย</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                ปวส.2
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adh2.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ฮาร์ดแวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ads2.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ซอฟต์แวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adm2.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>มัลติมีเดีย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adk2.php?table_search=" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เครือข่าย</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                ปรินต์
                <i class="fas right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
          <!-- <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>ขึ้นด้านบน</p>
            </a>
          </li> -->
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" >
              <div class="inner">
                <h4>จัดการผู้ใช้</h4>
                <a href="projects.php" style="color: #fff;">จัดการสิทธิ์</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="project_add.php" style="color: #fff;">เพิ่มสิทธิ์</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="projects.php" style="color: #fff;">แก้ไขสิทธิ์</a>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="project_add.php" class="small-box-footer"><i class="fas "></i></a>
            </div>
          </div>
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>ผลกิจกรรม ปวช</h4>
                <a href="adl1.php" style="color: #fff;">ปวช.1</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="adl2.php" style="color: #fff;">ปวช.2</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="adl3.php" style="color: #fff;">ปวช.3</a>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>ผลกิจกรรม ปวส.1</h4>
                <a href="adh1.php" style="color: #fff;">ฮาร์ดแวร์</a>&nbsp;&nbsp;
                <a href="ads1.php" style="color: #fff;">ซอฟต์แวร์</a>&nbsp;&nbsp;
                <a href="adm1.php" style="color: #fff;">มัลติ</a>&nbsp;&nbsp;
                <a href="adk1.php" style="color: #fff;">เครือข่าย</a>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>ผลกิจกรรม ปวส.2</h4>
                <a href="adh2.php" style="color: #fff;">ฮาร์ดแวร์</a>&nbsp;&nbsp;
                <a href="ads2.php" style="color: #fff;">ซอฟต์แวร์</a>&nbsp;&nbsp;
                <a href="adm2.php" style="color: #fff;">มัลติ</a>&nbsp;&nbsp;
                <a href="adk2.php" style="color: #fff;">เครือข่าย</a>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas"></i></a>
            </div>
          </div>


                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

            <!-- Calendar -->
            <div class="card bg-gradient-success" style="background:#13301b linear-gradient(180deg,#1774ff,#97b0ff) repeat-x!important">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  ปฏิทิน
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <!-- <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div> -->
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->

              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
              <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                  </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <!--  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved. -->
    <div class="float-right d-none d-sm-inline-block">
    <!--   <b>Version</b> 3.0.0-rc.5 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
