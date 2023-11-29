<?php 
session_write_close();
session_start();
// include('../Config.php');
include('security3.php'); 
?>
 <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="stu.php"><img src="../img/core-img/logo.png" alt=""style="width: 600px; height: 50px;"></a>
                            </div>
                            <div class="login-content">
                                <!-- <a href="login.html">LOGIN</a> -->
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
                                    <li><a href="stu.php">หน้าแรก</a></li>
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
                                    <li><a href="stu4.php">ข้อมูลส่วนตัว</a>
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
                                    <!-- <li><a href="stu2.php">ตรวจเช็ควันเข้าแถว</a> -->
                                    <li><a href="stu3.php">ตรวจผลเข้าเรียน</a></li>
                                    <!-- <li><a href="course.html">Print</a></li> -->
                                    <li><a href="print_qr.php">QR code</a></li>
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