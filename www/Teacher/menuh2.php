<?php include('security2.php'); ?>
    <section class="elements-area">
        <div class="container">
            <div class="row">
                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-10">
                        <h2>กศน.</h2>
                        <span>เลือกห้องที่ต้องการตรวจสอบ</span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="academy-cool-facts-area mb-50">
                        <div class="row">
                        <?php    
                     
                        $sqli = "SELECT count(ID_Stu) AS ID_Stu FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student WHERE  class = '6' AND Criterion = '1' ";
                        $quei=mysqli_query($conn,$sqli);
                        $ari=mysqli_fetch_array($quei);  
                      

                        ?>

                     
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                
                                   <h4>กศน.</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ari['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="hksn.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                          
                                   <h4>กศน.2</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ari['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="#"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                          
                                   <h4>กศน.3</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ari['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="#"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
<!-- <?php    
                     
                        $sql2 = "SELECT count(ID_Stu) AS ID_Stu FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student WHERE  class = '6' AND room = '2' AND Criterion = '1' ";
                        $que12=mysqli_query($conn,$sql2);
                        $ar12=mysqli_fetch_array($que12);  
                      


                        ?>
                      
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    
                                    <h4>กศน. 1/2</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ar12['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="hth3L12.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div>
                            <?php    
                        
                            $sql2 = "SELECT count(ID_Stu) AS ID_Stu FROM tb_login LEFT JOIN tb_info ON tb_login.ID_Student = tb_info.ID_Stu LEFT JOIN tb_at ON tb_login.ID_Student = tb_at.FK_ID_Student WHERE  class = '6' AND room = '3' AND Criterion = '1' ";
                        $que3=mysqli_query($conn,$sql2);
                        $ar3=mysqli_fetch_array($quei);  
                   


                        ?>
                         
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                
                                    <h4>กศน. 1/3</h4>
                                    <h3><span class="counter button-btn btn-5"><?php echo  $ar3['ID_Stu'];?></span>&nbsp;คน</h3>
                                    <a href="hth3L13.php"><button><p>ตรวจสอบ</p></button></a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>