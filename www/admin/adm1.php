<!DOCTYPE html>
<html>
<head>
  <?php 
session_start();
include('../Config.php');
include('../security1.php');

  // $sql = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE Branch='4' AND class='4' ";
  // $re = mysqli_query($conn,$sql);

   $sql = "SELECT *, SUM(count) AS sumcount FROM tb_info LEFT JOIN tb_count ON tb_info.ID_Stu = tb_count.ID_C_Student LEFT JOIN tb_class ON tb_info.class = tb_class.ID_Class WHERE Branch = '4' AND class = '4' GROUP BY ID_C_Student ";
  $re = mysqli_query($conn,$sql);
  // $row = mysqli_fetch_array($re); ถ้าเปิดไว้มันจะติดบัค ไม่โชว์แถวที่ 1 ของตารางนั้นๆ

  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ปวส.1 m</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
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
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
  <!--       <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> -->
        <div class="input-group-append">
     <!--      <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button> -->
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
            <h1>ตารางผลกิจกรรม</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายชื่อนักศึกษา</h3>

                <div class="card-tools">
                  <form method="_GET"><div class="input-group input-group-sm" style="width: 180px">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="ค้นหาชื่อ" >
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" ><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                 <table class="table table-head-fixed" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>รหัสนักศึกษา</th>
                      <th>ชื่อ-นามสกุล</th>
                      <th>ระดับชั้น</th>
                      <th>ห้อง</th>
                      <th>เบอร์โทรศัพท์</th>
                      <th>เข้ากิจกรรม</th>
                      <th>ผลกิจกรรม</th>
                    </tr>
                  </thead>
                <?php
                if($_GET["table_search"]!="")
                {
                    $sql2="SELECT *, SUM(count) AS sumcount FROM tb_info LEFT JOIN tb_count ON tb_count.ID_C_Student = tb_info.ID_Stu LEFT JOIN tb_class ON tb_class.ID_Class = tb_info.class WHERE (ID_Stu LIKE '%".$_GET['table_search']."%' OR name LIKE '%".$_GET['table_search']."%') AND Branch = '4' AND class = '4' GROUP BY ID_C_Student ";
                    $re2=mysqli_query($conn,$sql2);


  // $sql2 = "SELECT *, SUM(count) AS sumcount FROM tb_info LEFT JOIN tb_count ON tb_info.ID_Stu = tb_count.ID_C_Student LEFT JOIN tb_class ON tb_info.class = tb_class.ID_Class WHERE Branch = '1' AND class = '1' GROUP BY ID_C_Student ";
  // $re2 = mysqli_query($conn,$sql2);


                    while($row2=mysqli_fetch_array($re2))
                    {
    //                   $sql2="SELECT SUM(count) AS sumcount3 FROM tb_count WHERE ID_C_Student = '".$row2['ID_Stu']."' GROUP BY ID_C_Student "; 
    // $result2=mysqli_query($conn,$sql2); 
    //  $jan =mysqli_fetch_array($result2);

    ?>
   
 <tr>
    <!-- <td>5921280010</td> -->
    <td><?php echo $row2['ID_Stu']; ?></td>
    <td><?php echo $row2['name']; ?></td>
    <td><?php echo $row2['level'];?></td>
    <td><?php echo $row2['room']; ?></td>
    <td><?php echo $row2['Phone']; ?></td>
    <td><!-- <?php echo $jan['0']; ?>สัปดาห์ -->
    <?php if($row2['sumcount'] == 0){echo "0 สัปดาห์";}else{echo $row2['sumcount']." สัปดาห์";} ?></td>
    <td><?php if($row2['sumcount'] >= '15' && $row2['sumcount']<= '18' ){ echo "ผ่าน";}else{ echo "ไม่ผ่าน";} ; 
    //if($row2['count'] >= '8' && $row2['count']<= '15' ){ echo "ผ่าน";}else{ echo "ไม่ผ่าน";} 
    ?></td>
    <!-- <td><?php echo $row2['Date_Check']; ?></td> -->

  </tr>
                    
                  </tbody>
              
                <?php
                    }
                   ?>
                    
                <?php
                }
                else
                {
                  
                      while($row=mysqli_fetch_array($re))
                    {
    //                   $sql2="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '".$row['ID_Stu']."' AND Criterion = '1' "; 
    // $result2=mysqli_query($conn,$sql2); 
    //  $jan =mysqli_fetch_array($result2);

    ?>
   
  <tr>
    <!-- <td>5921280010</td> -->
    <td><?php echo $row['ID_Stu']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['level']; ?></td>
    <td><?php echo $row['room']; ?></td>
    <td><?php echo $row['Phone']; ?></td>
    <td><!-- <?php echo $jan['0']; ?>สัปดาห์ -->
    <?php if($row['sumcount'] == 0){echo "0 สัปดาห์";}else{echo $row['sumcount']." สัปดาห์";} ?></td>
    <td><?php if($row['sumcount'] >= '15' && $row['sumcount']<= '18' ){ echo "ผ่าน";}else{ echo "ไม่ผ่าน";} ; 
    //if($row2['count'] >= '8' && $row2['count']<= '15' ){ echo "ผ่าน";}else{ echo "ไม่ผ่าน";} 
    ?></td>
    <!-- <td><?php echo $row2['Date_Check']; ?></td> -->

  </tr>
                    
                  <!-- </tbody> -->
                

                  <?php
                }
              }
                ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <!--   <b>Version</b> 3.0.0-rc.5 -->
    </div>
<!--     <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
