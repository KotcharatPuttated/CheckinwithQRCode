<?php
session_start();
include('../Config.php');
include('security2.php');
$sli_pqr = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE tb_info.ID_Stu = '" . $_SESSION['ID'] . "' ";
$qri_pqr = mysqli_query($conn, $sli_pqr);
$row_pqr = mysqli_fetch_array($qri_pqr);
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
    <title>ปวช.1</title>

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
    <?php include('menu.php'); ?>
    <!-- ##### Header Area Start ##### -->

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
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">เพิ่มสิทธิ์นักเรียน
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <form action="registerth.php" method="POST">
                                    <br><input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="ID" pattern="[A-Z,a-z,0-9]+" required="required">
                                    <br><input type="password" class="form-control" placeholder="รหัสผ่าน" name="Password" pattern="[A-Z,a-z,0-9]+" required="required">
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

                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">ลบสิทธิ์นักเรียน
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <center>
                                    <form action="deleteth.php?ID=<?php echo $row_pqr['ID_Student']; ?>" method="POST">
                                        <br><input type="text" class="form-control" placeholder="ไอดีผู้ใช้" name="ID" pattern="[A-Z,a-z,0-9]+" required="required">
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