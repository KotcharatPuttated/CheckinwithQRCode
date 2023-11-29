<!DOCTYPE html>
<?php
session_start(); 
include('../Config.php');
include('security2.php');
$sli_pqr="SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE tb_info.ID_Stu = '".$_SESSION['ID']."' ";
$qri_pqr=mysqli_query($conn,$sli_pqr);
$row_pqr=mysqli_fetch_array($qri_pqr);
$sql = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu  WHERE class = '3' AND room = '1'";
  $re = mysqli_query($conn,$sql);


  $sur="SELECT * FROM tb_info LEFT JOIN tb_at ON tb_info.ID_Stu = tb_at.FK_ID_Student WHERE tb_at.FK_ID_Student = '".$_SESSION['ID']."' ";
$qur=mysqli_query($conn,$sur);


 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ปวช.1/2</title>

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
                                <a href="../index.html"><img src="../img/core-img/logo.png" alt=""></a>
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
                                    <li><a href="qrcode.php?php=<?php echo($_SESSION['ID'])?>">สแกนเช็คชื่อ</a></li>
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
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2></h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

 <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
               <!--  <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>เลือกระดับชั้น</h2>
                        <span>กรุณาเลือกระดับชั้นก่อน</span>
                    </div>
                    <div class="academy-buttons-area mb-100">
                        <a href="th3L1.php" class="btn academy-btn btn-4 m-2">ปวช.1</a>
                        <a href="th3L2.php" class="btn academy-btn btn-4 m-2">ปวช.2</a>
                        <a href="th3L3.php" class="btn academy-btn btn-4 m-2">ปวช.3</a>
                        <a href="th3H1.php" class="btn academy-btn btn-4 m-2">ปวส.1</a>
                        <a href="th3H2.php" class="btn academy-btn btn-4 m-2">ปวส.2</a>
                    </div>
                </div> -->
    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area">
        <div class="container">
            <div class="row">
                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-10">
                        <h2>ผลกิจกรรมแต่ละห้อง</h2>
                        <span>เลือกห้องที่ต้องการตรวจสอบ</span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="academy-cool-facts-area mb-50">
                        <div class="row">
                               <?php    
                        $sqli="SELECT count(ID_Stu) AS ID_Stu FROM tb_info WHERE class = '3' AND room = '1'";
                        $quei=mysqli_query($conn,$sqli);
                        $ari=mysqli_fetch_array($quei);  
                        // echo print_r($ari); 


                        ?>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <!-- <i class="icon-agenda-1"></i> -->
                                   <h4>ปวช.2/1</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ari['ID_Stu'];?></span>คน</h3>
                                    <a href="th3L3.1N.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
                            <?php    
                        $sql2="SELECT count(ID_Stu) AS ID_Stu FROM tb_info WHERE    class = '3' AND room = '2'";
                        $que12=mysqli_query($conn,$sql2);
                        $ar12=mysqli_fetch_array($que12);  
                        // echo print_r($ari); 
                        ?>
                                <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <!-- <i class="icon-agenda-1"></i> -->
                                    <h4>ปวช.2/2</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ar12['ID_Stu'];?></span>คน</h3>
                                    <a href="th3L3.2N.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
                             <!-- Single Cool Fact-->
                            

                        </div>
                    </div>
                </div>
    <!-- ##### Testimonials Area Start ##### -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <h2>รายชื่อนักศึกษา</h2>
                        <span>แสดงตามห้องที่เลือก</span>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-content">
    <table>
  <tr>
       <th>ไอดีผู้ใช้</th>
    <th>ชื่อ นามสกุล</th>
    <th>ระดับชั้น</th>
     <th>เบอร์</th>
     <th>เข้ากิจกรรม</th>     
    <th>ผ่าน/ไม่ผ่าน</th>
   

  </tr>
    <?php 
    while($row2 = mysqli_fetch_array($re))
    {
        $sql2="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '".$row2['ID_Stu']."' AND Criterion = '1' "; 
    $result2=mysqli_query($conn,$sql2); 
     $jan =mysqli_fetch_array($result2);

    ?>
   
  <tr>
    <!-- <td>5921280010</td> -->
    <td><?php echo $row2['ID_Stu']; ?></td>
    <td><?php echo $row2['name']; ?></td>
    <td>ปวช<?php echo $row2['class']; ?></td>
    <td><?php echo $row2['Phone']; ?></td>
    <td><?php echo $jan['0']; ?>สัปดาห์</td>
    <td>ยังไม่สรุปผล</td>

  </tr>
  <tr>
    <!-- <td>5921280010</td> -->
    

    <?php
}
?>

</table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-50-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-50">
                            <div class="widget-title">
                                 <h6>Follow Us</h6>
                           <!--      <a href="#"><img src="img/core-img/logo2.png" alt=""></a> -->
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
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Team</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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