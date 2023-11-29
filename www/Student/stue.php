<?php
session_start();
include('../Config.php');
include('security3.php');

$select_stue="SELECT * FROM tb_info WHERE ID_Stu = '".$_SESSION['ID']."' ";
$query_stue=mysqli_query($conn,$select_stue);
$row_stue=mysqli_fetch_array($query_stue);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <link rel="stylesheet" href="../stylee.css">
    <title>แก้ไขข้อมูลส่วนตัว</title>
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
                                    <form action="stue2.php?<?php echo $_SESSION['ID'];?>" method="POST" enctype="multipart/form-data">
                                        <center><h3 style="color:#000" class="mb-30">แก้ไขข้อมูลส่วนตัว</h3></center>

                                        <center><img width="200" height="50" 
                                        class="" id="blah" src="#" alt="ยังไม่เลือกรูปภาพ" /></center>
                                        <center><a href="">
                                        <input style="color:#000 " class="mb-30 mt-30" type="file" id="fileToUpload" name ="fileToUpload" 
                                        onchange="readURL(this);" >
                                        <input style="" class="" type='button' value="ยกเลิก"></a>></center>


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
                                        
                                     <!--    </form> -->

                                        <input type="text" name="name" class="form-controle" id="name" value="<?php echo $row_stue['name']; ?>" placeholder="ชื่อ-นามสกุล" required="required" >
                                        <select name="branch" class="form-controle">
                                                    <option selected value="<?php echo $row_stue['Branch'];?>">เลือกสาขางาน</option>
                                            <?php
                                                $strSQL1 = "SELECT * FROM tb_branch";
                                                $objQuery1 = mysqli_query($conn,$strSQL1) or die ("Error Query [".$strSQL1."]");
                                                    while($objResult1 = mysqli_fetch_array($objQuery1))
                                                        {
                                                    ?>
                                                    <option value="<?php echo $objResult1["ID_Branch"];?>"><?php echo $objResult1["Name_Branch"];?></option>
                                                    <?php
                                                        }
                                            ?>
                                        </select>
                                        <select name="class" class="form-controle" style="width:58%">
                                                    <option selected value="<?php echo $row_stue['class'];?>">เลือกระดับชั้น</option>
                                            <?php
                                                $strSQL2 = "SELECT * FROM tb_class";
                                                $objQuery2 = mysqli_query($conn,$strSQL2) or die ("Error Query [".$strSQL2."]");
                                                    while($objResult2 = mysqli_fetch_array($objQuery2))
                                                        {
                                                    ?>
                                                    <option value="<?php echo $objResult2["ID_Class"];?>"><?php echo $objResult2["Name_Class"];?></option>
                                                    <?php
                                                        }
                                            ?>
                                        </select>
                                        <select name="room" class="form-controle" style="width:40%">
                                                    <option selected value="<?php echo $row_stue['room'];?>">เลือกห้อง</option>
                                            <?php
                                                $strSQL3 = "SELECT * FROM tb_room";
                                                $objQuery3 = mysqli_query($conn,$strSQL3) or die ("Error Query [".$strSQL2."]");
                                                    while($objResult3 = mysqli_fetch_array($objQuery3))
                                                        {
                                                    ?>
                                                    <option value="<?php echo $objResult3["ID_Room"];?>"><?php echo $objResult3["Num_Room"];?></option>
                                                    <?php
                                                        }
                                            ?>
                                        </select>
                                        <!-- <input type="text" name="club" class="form-control" id="club" value="<?php echo $row_stue['Club'];?>" pattern="[ก-ฮ,ะ-ฦา, ]+" required="required">
                                        <select name="teacher" class="form-control"> -->
                                        <select name="teacher" class="form-controle" style="width:100%">
                                                    <option selected value="<?php echo $row_stue['teacher'];?>">เลือกครูที่ปรึกษา</option>
                                            <?php
                                                $strSQL = "SELECT * FROM tb_teacher";
                                                $objQuery = mysqli_query($conn,$strSQL) or die ("Error Query [".$strSQL."]");
                                                    while($objResult = mysqli_fetch_array($objQuery))
                                                        {
                                                    ?>
                                                    <option value="<?php echo $objResult["ID_Teacher"];?>"><?php echo $objResult["Name_Teacher"];?></option>
                                                    <?php
                                                        }
                                            ?>
                                        </select>
                                        <input type="number" name="phone" placeholder="เบอร์โทรศัพท์" maxlength="10" class="form-controle" id="phone" value="<?php echo $row_stue['Phone'];?>" pattern="[0-9]+" required="required">
                                        <input type="email" name="email" placeholder="อีเมล" class="form-controle" id="e-mail" value="<?php echo $row_stue['Email'];?>" pattern="[A-Z,a-z,0-9,.,@]+" required="required">

                                        <!-- <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="ที่อยู่"></textarea> -->
                                        <button class="academy-btn btn-4 mt-30" type="submit" name="submit">ยืนยัน</button>
                                    </form>
                                    <a href="stu.php">
                                        <button class="academy-btn btn-4 mt-30" type="submit" style="position: relative; top:-95px; left: 180px;">ยกเลิก</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
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