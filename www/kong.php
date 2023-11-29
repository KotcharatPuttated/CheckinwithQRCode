<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">QR-CODE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hacking</a>
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
                <a href="pages/examples/Projects.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการเอกสารและสิทธิ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_add.php" class="nav-link">
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
                <a href="pages/tables/adl1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปวช.1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/adl2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปวช.2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/adl3.php" class="nav-link">
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
                <a href="pages/tables/adh1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ฮาร์ดแวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/ads1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ซอฟต์แวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/adm1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>มัลติมีเดีย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/adk1.php" class="nav-link">
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
                <a href="pages/tables/adh2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ฮาร์ดแวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/ads2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ซอฟต์แวร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/adm2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>มัลติมีเดีย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/adk2.php" class="nav-link">
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
            <a href="logout.php" class="nav-link">
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
            <h1 class="m-0 text-dark"></h1>
    <script type="text/javascript" src="i.js" ></script>  
  </head>
  <body>
<video id="preview" width="320" height="600"></video>
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
                var constraints = { 
  audio: true,video:facingMode: 'environment'};
            }
        );
        scanner.addListener('scan', function(content) {
            // alert('กำลังไปยัง: ' + content);
            // window.open(content, "_blank");
            window.open('' + content + '<? echo $id; ?>');
        });
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("ไม่มีการเชื่อมต่อของกล้อง");
            }

        });


window.ga = window.ga || function() {
  (ga.q = ga.q || []).push(arguments);
};
ga('create', 'UA-33848682-1', 'auto');
ga('set', 'transport', 'beacon');
ga('send', 'pageview');
</script>
<script async src="https://www.google-analytics.com/analytics.js"></script>
<meta name="author" content="//samdutton.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script async src="js/main2.js"></script>
<div id="container">

    <div class="select">
    <label for="videoSource">Video source:&nbsp;</label><select id="videoSource"></select>
  </div>

  <div class="select">
    <label for="audioSource">Audio source:&nbsp;</label><select id="audioSource"></select>
  </div>

</div>


<script src="js/face.js"></script>
    </script>

 </body>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
