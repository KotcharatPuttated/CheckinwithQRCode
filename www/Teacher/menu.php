<?php
session_write_close();
session_start();
include('security2.php');
?>
<title>เช็คชื่อด้วย QR code</title>
<header id="non-printable" class="header-area">

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
                                <li><a href="qrcode.php?php=<?php echo ($_SESSION['ID']) ?>">สแกน</a></li>
                                <!-- <li><a href="#">รายชื่อที่เช็ค</a>
                                    <ul class="dropdown">
                                        <li><a href="#thto.php">เช็คชื่อ</a>
                                            <ul class="dropdown">
                                                <li><a href="pth3L11.php">ปวช.1</a></li>
                                                <li><a href="pth3L21.php">ปวช.2</a></li>
                                                <li><a href="pth3L31.php">ปวช.3</a></li>
                                                <li><a href="#">ปวส.1</a>
                                                    <ul class="dropdown">
                                                        <li><a href="pth3H1h.php">ฮาร์ดแวร์</a></li>
                                                        <li><a href="pth3H1s.php">ซอฟต์แวร์</a></li>
                                                        <li><a href="pth3H1k.php">เครือข่าย</a></li>
                                                        <li><a href="pth3H1m.php">มัลติมีเดีย</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">ปวส.2</a>
                                                    <ul class="dropdown">
                                                        <li><a href="pth3H2h.php">ฮาร์ดแวร์</a></li>
                                                        <li><a href="pth3H2s.php">ซอฟต์แวร์</a></li>
                                                        <li><a href="pth3H2k.php">เครือข่าย</a></li>
                                                        <li><a href="pth3H2m.php">มัลติมีเดีย</a></li>
                                                    </ul>
                                            </ul>
                                        </li>
                                        <li><a href="#thye.php">ประวัติการเช็คชื่อ</a>
                                            <ul class="dropdown">
                                                <li><a href="hth3L11.php">ปวช.1</a></li>
                                                <li><a href="#">ปวช.2</a></li>
                                                <li><a href="#">ปวช.3</a></li>
                                                <li><a href="#">ปวส.1</a>
                                                    <ul class="dropdown">
                                                        <li><a href="hth3H1h.php">ฮาร์ดแวร์</a></li>
                                                        <li><a href="hth3H1s.php">ซอฟต์แวร์</a></li>
                                                        <li><a href="hth3H1k.php">เครือข่าย</a></li>
                                                        <li><a href="hth3H1m.php">มัลติมีเดีย</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">ปวส.2</a>
                                                    <ul class="dropdown">
                                                        <li><a href="hth3H2h.php">ฮาร์ดแวร์</a></li>
                                                        <li><a href="hth3H2s.php">ซอฟต์แวร์</a></li>
                                                        <li><a href="hth3H2k.php">เครือข่าย</a></li>
                                                        <li><a href="hth3H2m.php">มัลติมีเดีย</a></li>
                                                    </ul>
                                            </ul>
                                        </li>
                                    </ul>

                                </li> -->


                                <li><a href="#">ตรวจผลเข้าเรียน</a>
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
                                            <!-- <li><a href="ksn.php">กศน.</a> -->

                                        </li>
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
</header>
<!-- <?php //header ของหน้า th2.php ใช้เป็นตัวอย่าง 
        ?> -->
<!-- <header class="header-area">

      
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

      
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
        
 
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                      
                        <div class="classy-menu">

                          
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            
                            <div class="classynav">
                               <ul>
                                    <li><a href="th.php">หน้าแรก</a></li>
                              
                                    </li>
                                    <li><a href="th2.php">ข้อมูลส่วนตัว</a>
                              
                                    </li>
                                    <li><a href="th4.php">เพิ่มสิทธิ์นักเรียน</a>
                                    </li>
                                    
                                    <li><a href="qrcode.php?php=<?php echo ($_SESSION['ID']) ?>">สแกน</a></li>
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
                           
                        </div>
                        
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