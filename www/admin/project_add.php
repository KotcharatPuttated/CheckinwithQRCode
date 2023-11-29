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
  <title>เพิ่มสิทธิ์</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style type="text/css">
    * {
      font-family:"Kanit";
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </ul>

    <!-- SEARCH FORM -->


   <!--  <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 <a href="ad.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">QR-CODE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['Status'] ?></a>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">เพิ่มสมาชิก</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
    <div class="form-group">
    <form action="../register.php" method="POST">
                <br><input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="ID" pattern="[A-Z,a-z,0-9]+" required="required">
                <br><input type="password"  class="form-control" placeholder="รหัสผ่าน" name="Password" pattern="[A-Z,a-z,0-9]+" required="required">
<!--    <br>สถานะ : <input type="text" name="Status">
 -->    
           <br><select  class="form-control" name="Status" required="required">
                  <option value="">เลือกสถานะ</option>
                  <option value="Admin">Admin</option>
                  <option value="Teacher">Teacher</option>
                  <option value="Checking">Checking</option>
                  <option value="Student">Student</option>
           </select>
<!--     <input type="submit" value="เพิ่มสมาชิก">  -->
    <!-- <input type="reset" value="ยกเลิก"> -->
         <center>
          <div class="card-footer">
                <br><button class="btn btn-primary" type="submit">ยืนยัน</button>
          </div>

                <!-- <button class="academy-btn btn-4 mt-30" type="reset">ยกเลิก</button> -->
        </center>
    </form>
    </div>

<!--               <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div> -->
            </div>
 
          </div>

        </div>
       <!--  <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
        
          </div>
      
        </div> -->

   <!--    </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div> -->
    </section>
  
  </div>
 

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
   <!--    <b>Version</b> 3.0.0-rc.5 -->
    </div>
    <!-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved. -->
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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
