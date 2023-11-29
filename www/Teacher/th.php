<?php 
session_start();
include('menu.php'); 
include('../Config.php');
include('security2.php');
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
    <title>ครู</title>

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
  <?php 
//    include('menu.php'); 
  ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">  
            <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/gallery6.jpg);">
                <!-- <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms"></h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms"><br></h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div a href="" class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/gallery61.jpg);"></a>
            </div>
            <div a href="" class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/gallery63.jpg);"></a>
            </div>
            <div a href="" class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/gallery62.jpg);"></a>
            </div>
        </div>
    </section>
    
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