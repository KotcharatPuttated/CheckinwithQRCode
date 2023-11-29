<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../Config.php');

// include('security2.php');

$sql = "SELECT * FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student LEFT JOIN tb_class ON tb_info.class = tb_class.ID_Class WHERE Branch = '1' AND class = '1' AND room = '1' AND Criterion = '1' ORDER BY Date_Check DESC ";
// $sql2="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '".$row2['ID_Stu']."' AND Criterion = '1' ";
$re = mysqli_query($conn, $sql);




$sur = "SELECT * FROM tb_info LEFT JOIN tb_at ON tb_info.ID_Stu = tb_at.FK_ID_Student WHERE tb_at.FK_ID_Student = '" . $_SESSION['ID'] . "' ";
$qur = mysqli_query($conn, $sur);


?>

<head>
    <meta charset="UTF-8">
    <meta name="descion" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Title -->
    <title>QR Code</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../i.js"></script>


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
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">

                                </div>
                            </div>

                            <div id="container">

                                <link rel="stylesheet" type="text/css" href="../qrcode.css">
                                <!-- <video id="preview"></video> -->
                                <video id="preview"></video>
                                <script>
                                    let scanner = new Instascan.Scanner({
                                        video: document.getElementById('preview')
                                    });
                                    scanner.addListener('scan', function(content) {
                                        // alert('เช็คชื่อสำเร็จ: ' + content);
                                        window.open(content, "_parent");
                                        // window.open(''+content);
                                    });
                                    Instascan.Camera.getCameras().then(cameras => {
                                        if (cameras.length > 0) {
                                            scanner.start(cameras[0]);
                                        } else {
                                            console.error("ไม่มีการเชื่อมต่อของกล้อง");
                                        }
                                    });
                                </script>
                                <!--     <div class="select">
    <label for="videoSource">Video source:&nbsp;</label><select id="videoSource"></select>
  </div>

  <div class="select">
    <label for="audioSource">Audio source:&nbsp;</label><select id="audioSource"></select>
  </div>

</div>

  <script async src="../js/main2.js"></script>
    </script> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                            <div class="testimonial-content">
                                <form action="cth3L11.php" method="POST">
                                    <p><button id="non-printable" class="academy-btn btn-4"> บันทึกผลการเข้าเรียน </button>
                                        <button id="non-printable" class="academy-btn btn-4" onclick="window.print()"><img src="../img/555.png"></button>
                                    </p>
                                    <table>
                                        <tr>
                                            <th>รหัสนักศึกษา</th>
                                            <th class="wy">ชื่อ-นามสกุล</th>
                                            <th>ระดับชั้น</th>
                                            <th>เบอร์</th>
                                            <th>การเข้าเรียน</th>
                                            <th>ลบรายชื่อ</th>
                                            <!-- <th>ผลกิจกรรม</th> -->
                                            <!-- <th>วันที่</th> -->


                                        </tr>
                                        <?php
                                        while ($row2 = mysqli_fetch_array($re)) {
                                            //     $sql2="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '".$row2['ID_Stu']."' AND Criterion = '1' "; 
                                            // $result2=mysqli_query($conn,$sql2); 
                                            //  $jan =mysqli_fetch_array($result2);

                                        ?>

                                            <tr>
                                                <!-- <td>5921280010</td> -->
                                                <td><?php echo $row2['FK_ID_Student']; ?></td>
                                                <td><?php echo $row2['name']; ?></td>
                                                <td><?php echo $row2['level'] . "/" . $row2['room']; ?></td>
                                                <td><?php echo $row2['Phone']; ?></td>
                                                <td>
                                                    <!-- <?php echo $jan['0']; ?>สัปดาห์ -->
                                                    <?php echo date("h:i:sa", strtotime($row2['Date_Check'])); ?>
                                                </td>
                                                <td style="background-color:#ffb300; text-align: center;"><a href="pdel.php?ID=<?php echo $row2['FK_ID_Student'] ?>">ลบ</td></a>
                                                <!-- <td>
    <?php
                                            $num1 = $jan['0'];
                                            $num2 = ($num1 * 100) / 18;
                                            if ($num2 >= 80) {
                                                echo "ผ่าน";
                                            } else {
                                                echo "ไม่ผ่าน";
                                            }
    ?></td> -->
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