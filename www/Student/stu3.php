<?php
session_start();
include('security3.php');
include('../Config.php');
$sqr = "SELECT * FROM tb_count WHERE ID_C_Student = '" . $_SESSION['ID'] . "'";
// $sqr ="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '2' AND Criterion = '1' AND months = '10'"; 
$rt = mysqli_query($conn, $sqr);
$rowm = mysqli_fetch_array($rt);

$sl_pqr = "SELECT * FROM tb_login LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student WHERE tb_at.FK_ID_Student = '" . $_SESSION['ID'] . "' ";
$qr_pqr = mysqli_query($conn, $sl_pqr);
$row_pqr = mysqli_fetch_array($qr_pqr);

date_default_timezone_set("America/New_York");
$sql = "SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '" . $_SESSION['ID'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$sql1 = "SELECT * FROM tb_at";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);
$date = $row1['Date_Check'];
$year = date("Y") + 543;
$newdate = date("d-m", strtotime($date));
$month = date("m");
$x = 18;
$y = 18;
$z = 18;
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
    <title>stu3</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" type="text/css" href="css/c3.min.css">

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
            <h2></h2>
        </div>
    </div>


    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="elements-title">
                        <h2>ผลการเข้าเรียน</h2>
                        <span>มากกว่า 80% = ผ่าน <br>น้อยกว่า 80% = ไม่ผ่าน</span>
                    </div>
                </div>

                <div class="col-12" >
                    <div class="academy-cool-facts-area mb-50">
                        <div class="row">
                            <script type="text/javascript" src="js/d3.js"></script>
                            <script type="text/javascript" src="js/c3.min.js"></script>
                            <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
                            <script type="text/javascript" src="js/jspdf.min.js"></script>
                            <script type="text/javascript" src="js/html2canvas.js"></script>
                            <? 
   $num1= $rowm['count'];
   $num2= ($num1*100)/18;

   $num3= 100-$num2;
?>

                            <script type='text/javascript'>
                                function replaceAllSVGsWithTempCanvas(elemSelector) {
                                    var svgElements = $(elemSelector).find('svg');

                                    //replace all svgs with a temp canvas
                                    svgElements.each(function() {
                                        var canvas, xml;

                                        // canvg doesn't cope very well with em font sizes so find the calculated size in pixels and replace it in the element.
                                        $.each($(this).find('[style*=em]'), function(index, el) {
                                            $(this).css('font-size', getStyle(el, 'font-size'));
                                        });

                                        canvas = document.createElement("canvas");
                                        canvas.className = "screenShotTempCanvas";

                                        //convert SVG into a XML string
                                        xml = (new XMLSerializer()).serializeToString(this);

                                        // Removing the name space as IE throws an error
                                        xml = xml.replace(/xmlns=\"http:\/\/www\.w3\.org\/2000\/svg\"/, '');

                                        //draw the SVG onto a canvas
                                        canvg(canvas, xml);
                                        $(canvas).insertAfter(this);

                                        //hide the SVG element
                                        $(this).attr('class', 'tempHide');
                                        $(this).hide();
                                    });
                                }

                                jQuery(document).ready(function($) {
                                    genChart();
                                });


                                function genChart() {
                                    var chart = c3.generate({
                                        data: {
                                            columns: [
                                                ['เข้ากิจกรรม', <?php echo $num2; ?>],
                                                ['ขาดกิจกรรม', <?php echo $num3; ?>],
                                            ],
                                            type: 'pie'
                                        }
                                    });
                                }
                            </script>

                            <body class="content ">
                                <table width="100%">
                                    <tr>
                                        <td width="50%">
                                            <div id="chartOuter">
                                                <div id="chart"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </body>
                            
                            <!-- Single Testimonials Area -->
                            <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms" style="margin-top:-50px;">
                                <div class="testimonial-content">
                                    <?php
                                    // $sql2="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '".$_SESSION['ID']."' AND Criterion = '1' "; 
                                    $sql2 = "SELECT * FROM tb_count WHERE ID_C_Student = '" . $_SESSION['ID'] . "' ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $jan = mysqli_fetch_array($result2);
                                    ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-cool-fact text-center">

                                    <!--     <p style="color: #008;">เทอม1</p>
                                    <h3>เข้า&nbsp;<span class="counter"><?php echo  $jan['0']; ?></span>&nbsp;สัปดาห์</h3>
                                    <h3>เหลือ&nbsp;<span class="counter"><?php echo  $y - $jan['0']; ?></span>&nbsp;สัปดาห์</h3> -->
                                    <p style="color: #008;">เทอม 1</p>
                                    <h3>เข้า&nbsp;<span class="counter"><?php echo  $jan['count']; ?></span>&nbsp;สัปดาห์</h3>
                                    <h3>เหลือ&nbsp;<span class="counter"><?php echo  15 - $jan['count']; ?></span>&nbsp;สัปดาห์</h3>

                                </div>
                            </div>
                            <?php
                            $sql2 = "SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '" . $_SESSION['ID'] . "' AND Criterion = '1' ";
                            // $sql2="SELECT count(FK_ID_Student) as FK_ID_Student FROM tb_at WHERE FK_ID_Student = '".$_SESSION['ID']."' AND Criterion = '1' AND months = '2'";
                            $result2 = mysqli_query($conn, $sql2);
                            $feb = mysqli_fetch_array($result2);
                            ?>

                            <div class="col-12">
                                <div class="single-cool-fact text-center">

                                    <p style="color: #008;">เทอม 2</p>
                                    <h3>เข้า&nbsp;<span class="counter">0</span>&nbsp;สัปดาห์</h3>
                                    <h3>เหลือ&nbsp;<span class="counter"><?php echo  $z - $feb['0']; ?></span>&nbsp;สัปดาห์</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        td,
        th {
            text-align: center;
            padding: 0 18px;
            font-size: 20px;
            border: 1px solid #dddddd;
        }
    </style>

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