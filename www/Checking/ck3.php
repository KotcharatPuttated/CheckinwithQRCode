<?php 
session_start();
include('../Config.php');
include('../security4.php');
$sql = "SELECT * FROM tb_login WHERE ID_Student = '".$_SESSION['ID']."'";
$login = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($login);
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
    <title>ครูที่ปรึกษา</title>

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
                                <a href="ck.php"><img src="../img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="../logout.php"></a>
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
                                    <li><a href="ck.php">หน้าแรก</a></li>
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
                                    <li><a href="ck2.php">ข้อมูลส่วนตัว</a>
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
                                    <li><a href="ck3.php">เพิ่มสิทธิ์ครู</a>
                                    </li>
                                    <!-- <li><a href="th2.php">ตรวจเช็ควันเข้าแถว</a> -->
                                    </li>
                                    <li><a href="#">จัดการผลกิจกรรม</a>
                                        <ul class="dropdown">
                                            <li><a href="ck3L1.php">ปวช.1</a></li>
                                            <li><a href="ck3L2.php">ปวช.2</a></li>
                                            <li><a href="ck3L3.php">ปวช.3</a></li>
                                            <li><a href="#">ปวส.1</a>
                                            <ul class="dropdown">
                                                <li><a href="ck3H1h.php">ฮาร์ดแวร์</a></li>
                                                <li><a href="ck3H1s.php">ซอฟต์แวร์</a></li>
                                                <li><a href="ck3H1k.php">เครือข่าย</a></li>
                                                <li><a href="ck3H1m.php">มัลติมีเดีย</a></li>
                                            </ul>
                                        </li>
                                            <li><a href="#">ปวส.2</a>
                                                <ul class="dropdown">
                                                <li><a href="ck3H2h.php">ฮาร์ดแวร์</a></li>
                                                <li><a href="ck3H2s.php">ซอฟต์แวร์</a></li>
                                                <li><a href="ck3H2k.php">เครือข่าย</a></li>
                                                <li><a href="ck3H2m.php">มัลติมีเดีย</a></li>
                                            </ul>
                                        </ul>
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
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <!-- <h2>จัดการสิทธิ</h2> -->
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

 <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <!-- <h2>จัดการสิทธิ</h2> -->
                        <span></span>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">เพิ่มสิทธิ์ครู
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <form action="register.php" method="POST">
    <br><input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="ID" pattern="[0-9]+" required="required">
    <!-- <br><input type="password"  class="form-control" placeholder="รหัสผ่าน" name="Password" pattern="[A-Z,a-z,0-9]+" required="required"> -->
<!--    <br>สถานะ : <input type="text" name="Status">
 -->    
            <br><select  class="form-control" name="Status" required="required">
            <option value="">เลือกสถานะ</option>
            <option value="Admin">Admin</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            </select>
    <!-- <input type="submit" value="เพิ่มสมาชิก">  -->
    <!-- <input type="reset" value="ยกเลิก"> -->
<center>
    <button class="academy-btn btn-4 mt-30" type="submit">ยืนยัน</button>
    <button class="academy-btn btn-4 mt-30" type="reset">ยกเลิก</button>
</center>
</form>
                                   
                            </div>
                        </div>
                        
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">คืนสิทธิ์ครู
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                               <center><form action="register.php" method="POST">
    <br><input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="ID" pattern="[0-9]+" required="required">
    <!-- <br><input type="password"  class="form-control" placeholder="รหัสผ่าน" name="Password" pattern="[A-Z,a-z,0-9]+" required="required"> -->
<!--    <br>สถานะ : <input type="text" name="Status">
 -->    
    <!-- <input type="submit" value="เพิ่มสมาชิก">  -->
    <!-- <input type="reset" value="ยกเลิก"> -->
<center>
    <button class="academy-btn btn-4 mt-30" type="submit">ยืนยัน</button>
    <button class="academy-btn btn-4 mt-30" type="reset">ยกเลิก</button>
</center>
</form>
</center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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