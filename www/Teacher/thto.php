<?php 
session_start();
include('../Config.php');
include('security2.php');
 // $str="SELECT * FROM tb_login LEFT JOIN tb_info ON ID = iduser "; <-- แต่ก่อนใช้ตัวนี้
$str="SELECT * FROM tb_login  LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE tb_info.ID_Stu = '".$_SESSION['ID']."'";
$mts=mysqli_query($conn,$str);
$row=mysqli_fetch_array($mts);
$str2="SELECT * FROM tb_info  LEFT JOIN tb_branch ON tb_info.Branch = tb_branch.ID_Branch WHERE tb_info.ID_Stu = '".$_SESSION['ID']."'";
$mts2=mysqli_query($conn,$str2);
$row2=mysqli_fetch_array($mts2);
$str3="SELECT * FROM tb_info  LEFT JOIN tb_teacher ON tb_info.teacher = tb_teacher.ID_Teacher WHERE tb_info.ID_Stu = '".$_SESSION['ID']."'";
$mts3=mysqli_query($conn,$str3);
$row3=mysqli_fetch_array($mts3);
?>
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ข้อมูลส่วนตัว</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="th.php"><img src="../img/core-img/logo.png" alt=""></a>
                            </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <!-- <div class="blog-post-search-widget">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search" >
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
 -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                               <ul>
                                    <li><a href="th.php">หน้าแรก</a></li>
                                  <!--   <li><a href="#">???</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">???</a></li>
                                            <li><a href="about-us.html">???</a></li>
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="th2.php">ข้อมูลส่วนตัว</a>
                                      <!--   <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">การเข้าแถวแต่ละเทอม</a></li>
                                                <li><a href="#">เทอมที่ 1</a></li>
                                                <li><a href="#">เทอมที่ 2</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">??</a></li>
                                                <li><a href="#">??</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Services &amp; Features</a></li>
                                                <li><a href="#">Accordions and tabs</a></li>
                                                <li><a href="#">Menu ideas</a></li>
                                                <li><a href="#">Students Gallery</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <img src="img/bg-img/bg-1.bmp" alt="">
                                            </div>
                                        </div> -->
                                    </li>
                                    <li><a href="th4.php">เพิ่มสิทธิ์นักเรียน</a>
                                    </li>
                                    <!-- <li><a href="th2.php">ตรวจเช็ควันเข้าแถว</a> -->
                                    <li><a href="qrcode.php?php=<?php echo($_SESSION['ID'])?>">สแกน</a></li>
                                    <li><a href="#">รายชื่อที่เช็ค</a>
                                            <ul class="dropdown">
                                            <li><a href="thto.php">วันนี้</a></li>
                                            <li><a href="thye.php">ย้อนหลัง</a></li>
                                            </ul>

                                    <li><a href="#">ตรวจสอบผลกิจกรรม</a>
                                        <ul class="dropdown">
                                            <li><a href="th3L1.php">ปวช.1</a></li>
                                            <li><a href="th3L2.php">ปวช.2</a></li>
                                            <li><a href="th3L3.php">ปวช.3</a></li>
                                            <li><a href="#">ปวส.1</a>
                                            <ul class="dropdown">
                                                <li><a href="th3H1h.php">ฮาร์ดแวร์</a></li>
                                                <li><a href="th3H1s.php">ซอฟต์แวร์</a></li>
                                                <li><a href="th3H1k.php">เครือข่าย</a></li>
                                                <li><a href="th3H1m.php">มัลติมีเดีย</a></li>
                                            </ul>
                                        </li>
                                            <li><a href="#">ปวส.2</a>
                                                <ul class="dropdown">
                                                <li><a href="th3H2h.php">ฮาร์ดแวร์</a></li>
                                                <li><a href="th3H2s.php">ซอฟต์แวร์</a></li>
                                                <li><a href="th3H2k.php">เครือข่าย</a></li>
                                                <li><a href="th3H2m.php">มัลติมีเดีย</a></li>
                                            </ul>
                                        </ul>
                    
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- Calling Info -->
                          <div class="calling-info"> 
                            <div class="call-center">
                                <a href="../logout.php">LOGOUT</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>    <!-- ##### Header Area End ##### -->

     <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <!-- <h2>ข้อมูลส่วนตัว</h2> -->
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
<!--                                     <div class="section-heading text-left">
                                        <h5>รหัสนักศึกษา</h5>
                                        <h3><?php echo $row['ID_Stu'];?></h3>
                                        <span></span>
                                        <img src="img/10001.jpg"  width="250" height="200"> -->
                                        <p class="mt-30"></p>
                                    </div>

                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 y">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" mr-50>
                                    <form action="" method="post">
                                        <center><table class="" style="color: #000;">
                                        	<tr>
                                            	<th>รายชื่อวันนี้</th>
                                            	<th>วัน เวลา</th>
                                        	</tr>
                                        		<td>นายsdsdsdsdsdsdsdsdsdsd</td>
                                            	<td>11-22-13 12.25.24</td>
                                        </table></center>
<style type="text/css">
	th,td {
		padding: 0 60px;
	}
</style>
                                    </form>
                                        <a href=""><button class="academy-btn btn-4 mt-30" style="">บันทึก</button></a>
                                        <!-- <a href="print_qr.php?<?php echo $_SESSION['ID'];?>"><button class="academy-btn btn-4 mt-30">ปริ้น</button></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-50-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-50">
                            <div class="widget-title">
                                 <h6>Icon System</h6>
                            <div class="footer-social-info">
                                <a href="#"><img src="../img/core-img/pp.png" width="200" alt=""></a>
                            </div>
                            </div>
                        </div>
                    </div>
                            <p></p>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-50">
                            <div class="widget-title">
                                 <h6>Follow Us</h6>
                                <!-- <a href="#"><img src="img/core-img/pp.jpg" alt=""></a> -->
                            </div>
                            <p></p>

                            <div class="footer-social-info">
                                <a href="https://www.facebook.com/utcfanpage/"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                 <!--    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="stu.php">หน้าแรก</a></li>
                                    <li><a href="stu4.php">ข้อมูลส่วนตัว</a>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                    <!-- Footer Widget Area -->
                   <!--  <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>News</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/bg-1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/bg-1.jpg" alt=""></a>
                                <a href="img/bg-img/bg-2.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/bg-2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- Footer Widget Area -->
                   <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>เลขที่ 5 ถนนเเจ้งสนิท ตำบลในเมือง อำเภอเมืองอุบลราชธานี จังหวัดอุบลราชธานี 34000 </p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>หมายเลขโทรศัพท์ (045)240577<br>หมายเลขโทรสาร (045)240576 </p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-email"></i>
                                <p>mail@utc.ac.th</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>

</html> 