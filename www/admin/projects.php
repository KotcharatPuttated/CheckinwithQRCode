<!DOCTYPE html>
<html>
<head>
  <?php 
session_start();
include('../Config.php');
include('../security1.php');

  $sql = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu";
  $re = mysqli_query($conn,$sql);
  // $row = mysqli_fetch_array($re); ถ้าเปิดไว้มันจะติดบัค ไม่โชว์แถวที่ 1 ของตารางนั้นๆ

  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>จัดการผู้ใช้</title>
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
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="_GET">
      <div class="input-group input-group-sm">
        <input name="txtsearch" class="form-control form-control-navbar" type="search" placeholder="ค้นหา" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

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
            <h1>จัดการสิทธิ์</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">รายชื่อบัญชีผู้ใช้</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects" style="text-align: center;">
              <thead>
                  <tr>
<!--                       <th style="width: 1%">
                          #
                      </th> -->
                      <th style="width: 20%">
                          ชื่อ-นามสกุล
                      </th>
                      <th style="width: 20%">
                          บัญชีผู้ใช้
                      </th>
                      <th style="width: 20%">
                          สถานะ
                      </th>
                      <th style="width: 20%" >
                          แก้ไขข้อมูล
                      </th>
                      <!-- <th style="width: 20%">
                          อื่นๆ
                      </th> -->
                  </tr>
              </thead>
              <tbody>
                  <tr>
                <!--       <td>
                          #
                      </td>
                      <td>
                          <a>
                              AdminLTE v3
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="../../p.html">
                              <i class="fas fa-folder">
                              </i>
                              ปริ้น
                          </a>
                          <a class="btn btn-info btn-sm" href="../forms/general.php">
                              <i class="fas fa-pencil-alt">
                              </i>
                              แก้ไข
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              ลบผู้ใช้
                          </a>
                      </td> -->
                  </tr>

                  

                  <?php

                  if($_GET["txtsearch"] != "")
                  {
                      // $sql1 = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE (ID_Student LIKE '%".$_GET['txtsearch']."%' OR name LIKE '%".$_GET['txtsearch']."%')";
                      // $re1 = mysqli_query($conn,$sql1);
                     
                      $sql1 = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE (ID_Student LIKE '%".$_GET['txtsearch']."%')";
                      $re1 = mysqli_query($conn,$sql1);


                      // if ($_GET["txtkeyword"] != "") {
                      //   $str = "SELECT * FROM tb_login WHERE(ID_Student LIKE '%".$_GET["txtkeyword"]."%')";
                      //   $Query = mysqli_query($conn,$str);
                      //   while ($result2= mysqli_fetch_array($Query)) 
                     



                      while($row1 = mysqli_fetch_array($re1))
                      {
                        ?>
                        <tr>
                        <td>
                          <?php echo $row1['name']; ?>
                        </td> 
                        <td>  
                          <?php echo $row1['ID_Student']; ?>
                        </td>
                       <!--  <td>
                          <?php echo $row1['Password']; ?>
                        </td> -->
                        <td>
                          <?php echo $row1['Status']; ?>
                        </td>
                                              <td class="project-actions text-right">
<!--                           <a class="btn btn-primary btn-sm" href="p.html">
                              <i class="fas fa-folder">
                              </i>
                              ปริ้น
                          </a> -->
                       <!--    <a class="btn btn-info btn-sm" href="../forms/general.php">
                              <i class="fas fa-pencil-alt">
                              </i>
                              แก้ไข
                          </a> -->
<!--                           <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              ลบผู้ใช้
                          </a> -->
                        <a class="btn btn-info btn-sm" href="general.php?ID=<?php echo $row1['ID_Student'];?> " ><i class="fas fa-pencil-alt"> แก้ไข
                              </i></a>
                          <a class="btn btn-danger btn-sm" href="../delete.php?ID=<?php echo $row1['ID_Student']; ?>"><i class="fas fa-trash"> ลบ
                              </i></a>
                      </td> 
                      </tr>
                        <?php
                      }
                  }
                  else 
                  {
                    while($row2 = mysqli_fetch_array($re))
                    {
                        ?>
                        <tr>
                        <td>
                          <?php echo $row2['name']; ?>
                        </td> 
                        <td>  
                          <?php echo $row2['ID_Student']; ?>
                        </td>
                      <!--   <td>
                          <?php echo $row2['Password']; ?>
                        </td> -->
                        <td>
                          <?php echo $row2['Status']; ?>
                        </td>
                                              <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="p.html">
                              <i class="fas fa-folder">
                              </i>
                              ปริ้น
                          </a> -->
<!--                           <a class="btn btn-info btn-sm" href="../forms/general.php">
                              <i class="fas fa-pencil-alt">
                              </i>
                              แก้ไข
                          </a> -->
                         <!--  <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              ลบผู้ใช้
                          </a> -->
                          <a class="btn btn-info btn-sm" href="general.php?ID=<?php echo $row2['ID_Student'];?> " ><i class="fas fa-pencil-alt"> แก้ไข
                              </i></a>
                          <a class="btn btn-danger btn-sm" href="../delete.php?ID=<?php echo $row2['ID_Student']; ?>"><i class="fas fa-trash"> ลบ
                              </i></a>
                      </td> 
                      </tr>
                        <?php
                    }
                  }

                  ?>


<!-- T1  -->


                
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
<!--       <b>Version</b> 3.0.0-rc.5 -->
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
