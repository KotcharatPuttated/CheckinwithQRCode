<?php include('security2.php'); ?>
    <section id="non-printable" class="elements-area">
        <div class="container">
            <div class="row">
                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-10">
                        <h2>ปวช.1</h2>
                        <span>เลือกห้องที่ต้องการตรวจสอบ</span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="academy-cool-facts-area mb-50">
                        <div class="row">
                        <?php    
                        // $sqli="SELECT count(ID_Stu) AS ID_Stu FROM tb_info WHERE class = '1' AND room = '1'";
                        $sqli = "SELECT COUNT(DISTINCT ID_C_Student) AS ID_C_Student FROM tb_count LEFT JOIN tb_info ON tb_count.ID_C_Student = tb_info.ID_Stu WHERE Branch = '1' AND class = '1' AND room = '1'";
                        $quei=mysqli_query($conn,$sqli);
                        $ari=mysqli_fetch_array($quei);  
                        // echo print_r($ari); 


                        ?>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <!-- <i class="icon-agenda-1"></i> -->
                                   <h4>ปวช.1/1</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ari['ID_C_Student'];?></span>&nbsp;คน</h3>
                                    <a href="hth3L11.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
<?php    
                        // $sql2="SELECT count(ID_Stu) AS ID_Stu FROM tb_info WHERE    class = '1' AND room = '2'";
                        $sql2 = "SELECT count(DISTINCT ID_Stu) AS ID_Stu FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student LEFT JOIN tb_count ON tb_login.ID_Student = tb_count.ID_C_Student WHERE Branch = '1' AND class = '1' AND room = '2' AND ID_C_Student = ID_Stu ";
                        $que12=mysqli_query($conn,$sql2);
                        $ar12=mysqli_fetch_array($que12);  
                        // echo print_r($ari); 


                        ?>
                                <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <!-- <i class="icon-agenda-1"></i> -->
                                    <h4>ปวช.1/2</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ar12['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="hth3L12.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
                            <?php    
                        // $sql3="SELECT  * FROM tb_info WHERE    class = '1' AND room = '3'";
                            $sql2 = "SELECT count(DISTINCT ID_Stu) AS ID_Stu FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student LEFT JOIN tb_count ON tb_login.ID_Student = tb_count.ID_C_Student WHERE Branch = '1' AND class = '1' AND room = '3' AND ID_C_Student = ID_Stu ";
                        $que3=mysqli_query($conn,$sql2);
                        $ar3=mysqli_fetch_array($quei);  
                        // echo print_r($ari); 


                        ?>
                             <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <!-- <i class="icon-agenda-1"></i> -->
                                    <h4>ปวช.1/3</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ar3['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="hth3L13.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>