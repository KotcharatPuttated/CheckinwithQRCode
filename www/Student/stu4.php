<?php 
session_start();
include('../Config.php');
include('security3.php');
 // $str="SELECT * FROM tb_login LEFT JOIN tb_info ON ID = iduser "; <-- แต่ก่อนใช้ตัวนี้
$str="SELECT * FROM tb_login  LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_class ON tb_info.class = tb_class.ID_Class WHERE tb_info.ID_Stu = '".$_SESSION['ID']."'";
$mts=mysqli_query($conn,$str);
$row=mysqli_fetch_array($mts);
// $str="SELECT * FROM tb_login  LEFT JOIN tb_class ON tb_login.class = tb_class.ID_Class WHERE tb_info.ID_Stu = '".$_SESSION['ID']."'";
// $mts=mysqli_query($conn,$str);
// $row=mysqli_fetch_array($mts);
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
<?php include('menu.php'); ?>
    <!-- ##### Header Area End ##### -->

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
                                    <form action="stue.php" method="post">

                                        <form id="" runat="">
                                        <p style="color: #000;">รูปโปรไฟล์</p>
                                        
                                        <center><img width="200" height="50" 
                                        class="" id="blah" src="img/<?php echo $row['img'];?>" alt="ยังไม่เลือกรูปภาพ" /></center>
                                        
                                        
                                        </form>

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
                                        <p style="color: #000">บัญชีผู้ใช้</p>
                                        <input type="text" class="form-control" disabled="disabled" id="name" placeholder='<?php echo $row['ID_Stu'];?>' disabled="disabled">
                                        <p style="color: #000">ชื่อ-นามสกุล</p>
                                        <input type="text" class="form-control" disabled="disabled" id="email" placeholder='<?php echo $row['name'];?>' disabled="disabled">
                                        <p style="color: #000">สาขาวิชา</p>
                                        <input type="text" class="form-control" disabled="disabled" id="name" placeholder='<?php echo $row2['Name_Branch'];?>' disabled="disabled"> 
                                        <p style="color: #000">ระดับชั้น</p>
                                        <input type="text" class="form-control" disabled="disabled" id="name" placeholder='<?php echo $row['level'];?>/<?php echo $row['room'];?>' disabled="disabled">
                                        <p style="color: #000">ครูที่ปรึกษา</p>
                                        <input type="text" class="form-control" disabled="disabled" id="name" placeholder='<?php echo $row3['Name_Teacher'];?>' disabled="disabled">
                                        <p style="color: #000">เบอร์โทรศัพท์</p>
                                        <input type="text" class="form-control" disabled="disabled" id="name" placeholder='<?php echo $row['Phone'];?>' disabled="disabled">
                                        <p style="color: #000">อีเมล</p>
                                        <input type="text" class="form-control" disabled="disabled" id="name" placeholder='<?php echo $row['Email'];?>' disabled="disabled">
                                       
                                       <!--  <input type="submit" value="แก้ไข" class="academy-btn btn-4 mt-30"> -->
                                        <!-- <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="ที่อยู่"></textarea> -->

                                    </form>
                                        <a href="stue.php?<?php echo $_SESSION['ID'];?>"><button class="academy-btn btn-4 mt-30">แก้ไข</button></a>
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