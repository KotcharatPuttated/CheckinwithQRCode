<?php
session_start();
include('../Config.php');
include('security4.php');

$select_stue="SELECT * FROM tb_info WHERE ID_Stu = '".$_SESSION['ID']."' ";
$query_stue=mysqli_query($conn,$select_stue);
$row_stue=mysqli_fetch_array($query_stue);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../stylee.css">
    <title></title>
</head>
<body>
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

                                    </div>

                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 y">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" mr-50>
                                    <form action="cke2.php?<?php echo $_SESSION['ID'];?>" method="POST">
                                        <center><h3 style="color:#000" class="mb-30">แก้ไขประวัติส่วนตัว</h3></center>
                                        <input type="text" name="name" class="form-controle" id="name" value="<?php echo $row_stue['name']; ?>" pattern="[ก-ฮ,ะ-ฦา, ]+" placeholder="ชื่อ-นามสกุล">
                                        
                                        
                                        
                                        <!-- <input type="text" name="club" class="form-control" id="club" value="<?php echo $row_stue['Club'];?>" pattern="[ก-ฮ,ะ-ฦา, ]+" required="required">
                                        <select name="teacher" class="form-control"> -->
                                        
                                        <input type="text" name="phone" placeholder="เบอร์โทรศัพท์" class="form-controle" id="phone" value="<?php echo $row_stue['Phone'];?>" pattern="[0-9]+" required="required">
                                        <input type="email" name="email" placeholder="อีเมลล์" class="form-controle" id="e-mail" value="<?php echo $row_stue['Email'];?>" pattern="[A-Z,a-z,0-9,.,_,@]+" required="required">

                                        <!-- <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="ที่อยู่"></textarea> -->
                                        <button class="academy-btn btn-4 mt-30" type="submit">ยืนยัน</button>
                                    </form>
                                        <a href="ck2.php">
                                            <button class="academy-btn btn-4 mt-30" type="submit" style="position: relative; top:-95px; left: 170px;">ยกเลิก</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
</body>
</html>

