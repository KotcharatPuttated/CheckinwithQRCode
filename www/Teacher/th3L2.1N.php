<!DOCTYPE html>
<?php
session_start(); 
include('../Config.php');
include('security2.php');
include('menu.php');
$sli_pqr="SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu WHERE tb_info.ID_Stu = '".$_SESSION['ID']."' ";
$qri_pqr=mysqli_query($conn,$sli_pqr);
$row_pqr=mysqli_fetch_array($qri_pqr);

// $sql = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student WHERE  class = '1' AND room = '1' AND Criterion = '1' ORDER BY Date_Check DESC ";
// $sqlid = "SELECT * FROM tb_info";
// $reid = mysqli_query($conn,$sqlid);
// $rowid = mysqli_fetch_array($reid);
$sql = "SELECT * FROM tb_count LEFT JOIN tb_info ON tb_count.ID_C_Student = tb_info.ID_Stu LEFT JOIN tb_class ON tb_info.class = tb_class.ID_Class LEFT JOIN tb_login ON tb_count.ID_C_Student = tb_login.ID_Student WHERE Branch = '1' AND class = '2' AND room = '1'";
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
    <title>ปวช.2/1</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">
        <style type="text/css"> 
@media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 
</style> 

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div id="non-printable" class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
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
<?php include('menus2.php'); ?>

    <!-- ##### Testimonials Area Start ##### -->
        <div class="container">
            <div class="row">
                <div id="non-printable" class="col-12">
                    <div class="elements-title">
                        <h2>รายชื่อนักศึกษา</h2>
                        <span>สามารถพิมพ์ได้</span>
                    </div>
                </div>

<style type="">
@page {
    margin: 0px;
/*    margin-left:-200px;
text-align: center;*/
}

</style>

                <!-- Single Testimonials Area -->
                <div class="col-12">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-content">
<p><button id="non-printable" class="academy-btn btn-4"  onclick="window.print()"><img src="../img/555.png"></button></p>                            
<form action="cth3L1.php" method="POST">
<!-- <p><button> บันทึกผลกิจกรรม </button></p> -->
    <table>
  <tr>
       <th>ไอดีผู้ใช้</th>
    <th class="wy">ชื่อ นามสกุล</th>
    <th>ระดับชั้น</th>
     <th>เบอร์</th>
     <th>วันที่เข้ากิจกรรม</th>     
    <th>ผลกิจกรรม</th>
    <!-- <th>วันที่</th> -->
   

  </tr>
    <?php 
    while($row2 = mysqli_fetch_array($re))
    {
        $sql2="SELECT * FROM tb_count WHERE ID_C_Student = '".$row2['ID_Stu']."' "; 
    $result2=mysqli_query($conn,$sql2); 
     $jan =mysqli_fetch_array($result2);

    ?>
   
  <tr>
    <!-- <td>5921280010</td> -->
    <td><?php echo $row2['ID_Stu']; ?></td>
    <td><?php echo $row2['name']; ?></td>
    <td><?php echo $row2['level']."/".$row2['room']; ?></td>
    <td><?php echo $row2['Phone']; ?></td>
    <td><!-- <?php echo $jan['0']; ?>สัปดาห์ -->
    <?php echo $row2['count']; ?>สัปดาห์</td>
    <td><?php if($row2['count'] >= '8' && $row2['count']<= '18' ){ echo "ผ่าน";}else{ echo "ไม่ผ่าน";} ?></td>
    <!-- <td><?php echo $row2['Date_Check']; ?></td> -->

  </tr>
  <tr>
    <!-- <td>5921280010</td> -->
    

    <?php
}
?>

</table>
</form>

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
    <footer id="non-printable" class="footer-area">
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