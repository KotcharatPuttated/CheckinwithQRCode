<?php
session_start();
include('../Config.php');
include('security3.php');
if(isset($_SESSION['ID']))
{
 if($_SESSION['ID'] != "")
	{
$sql= "SELECT * FROM tb_info WHERE ID_Stu = '".$_SESSION['ID']."' ";
$re = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($re);
$sql2 = "SELECT * FROM tb_info ";
// $re2 = mysqli_query($conn,$sql2);
// $row2 = mysqli_fetch_array($re2);
// 

// $sql2 = "SELECT * FROM tb_info ";
//   $re2 = mysqli_query($conn,$sql2);
// ?>

     <?php 
//    		 while($row2 = mysqli_fetch_array($re2))
//     {

//   $row3 = ",".$row2['img'];
    
// }
date_default_timezone_set('Asia/Bangkok');
$date1 = date("YmdHis");
$numrand = (mt_rand());
$up1 = $_FILES["fileToUpload"];
$part0 = "img/";
$type2 = strrchr($_FILES["fileToUpload"]["name"],".");
$newname = $date1.$numrand.$type2;
$part_copy = $newname;
$part_link = "img/".$newname;

$target_dir = "img/";
//แบบที่ 1
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//แบบที่ 2
// $target_file = $part0 . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// เช็คนามกสุลว่าเป็นจำพวกรูปภาพไหม ถ่าไม่ใช่จะไม่สามารถอัปได้
// $keep = "img/".$row['img']."";
if(empty($_FILES["fileToUpload"]["tmp_name"])) {
	// echo "<script type='text/javascript'>";
	// echo "alert('empty');";
	// echo "</script>"; 
}
	else{
// if($_FILES["fileToUpload"]["name"] == $row3){

// }
// else{
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //// echo "ไฟล์นี้เป็นรูปภาพชนิด - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        //// echo "ไฟล์นี้ไม่ใช่รูปภาพ.<br>";
        $uploadOk = 0;
    }
}
// เช็คชื่อไฟล์มีไฟล์ซ้ำไหมถ้าซ้ำ จะถูกตั้งค่าเป็น 0 (ไม่สามารถอัปได้)

// if($_FILES["fileToUpload"]["name"] == $row3){
// 	echo "<script type='text/javascript'>";
// 	echo "alert('ชื่อซ้ำ');";
// 	echo "</script>";

// ไม่ใช้ if (file_exists($target_file)) {
   // ไม่ใช้ echo "ชื่อไฟล์นี้ซ้ำ กรุณาเปลี่ยนชื่อใหม่<br>";

//     $uploadOk = 0;
// }

// Check file size
//เช็คขนาดไฟล์ที่ใหญ่เกินจะถูกตั้งค่าเป็น 0

if ($_FILES["fileToUpload"]["size"] > 500000) {
	
   // echo "ไม่สามารถอัปโหลดได้ ขนาดไฟล์ใหญ่เกินไป<br>";
    $uploadOk = 0;
}
// ถ้าไฟล์ไม่ใช่นามสกุล ดังกล่าวนี้จะไม่สามารถอัปได้ และตั้งค่าเป็น 0 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    // echo "ชนิดของไฟล์ไม่ถูกต้อง สามารถรับไฟล์ jpg , png , jpeg และ gif ได้เท่านั้น<br>";
    $uploadOk = 0;
}
// ถ้า ไฟล์ซ้ำหรือขนาดเกิน จะทำงาน โดยบอกว่า ไม่สามารถอัปได้
if ($uploadOk == 0) {
    //$show3 = "ไม่สามารถอัปโหลดรูปได้<br>";
 //    echo "<script type='text/javascript'>";
	// echo "alert('ไม่สามารถอัปโหลดรูปได้ อาจเกิดจาก 
	// 			1.ชื่อไฟล์ซ้ำ
	// 			2.ขนาดใหญ่เกิน 500Kb  
	// 			3.รับเฉพาะ jpg,png,jpeg,gif เท่านั้น');";
	// echo "</script>";
		echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถอัปโหลดรูปได้ อาจเกิดจาก 1.ชื่อไฟล์ซ้ำ 2.ขนาดใหญ่เกิน 500Kb 3.รับเฉพาะ jpg,png,jpeg,gif เท่านั้น');";
	// echo "window.location = 'stue2.php'; ";
	echo "</script>";
} else {
	//ทำงานเมื่อทุกอย่างเรียบร้อย จะเก็บไฟล์ลงโฟลเดอร์และชื่อลง db

    // if ($upload1 = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $part_link)) {
        // echo "ไฟลนี้ ". basename( $_FILES["fileToUpload"]["name"]). " ได้ถูกอัปโหลดเรียบร้อยแล้วค่ะ.";
        //ลบไฟล์เก่าก่อนถ้าไม่มีคือผ่าน
        $keep1="img/".$row['img']."";
        $del1=@unlink($keep1);
        // $keep2="img/".$row['dateup']."";
        // $del2=@unlink($keep2);
		//เพิ่มชื่อรูปเข้าไปใน db
  //       $strSQL = "UPDATE tb_info SET img = '".$_FILES["fileToUpload"]["name"]."' WHERE ID_Stu = '".$_SESSION['ID']."' ";
		// $objQuery = mysqli_query($conn,$strSQL) or die ("เกิดความผิดพลาดในการอัปโหลดไฟล์ sql1 ".$conn->connect_error);
		 $strSQL = "UPDATE tb_info SET img = '".$part_copy."' WHERE ID_Stu = '".$_SESSION['ID']."' ";
		$objQuery = mysqli_query($conn,$strSQL) or die ("เกิดความผิดพลาดในการอัปโหลดไฟล์ sql1 ".$conn->connect_error);
		//   $strSQL2 = "INSERT INTO tb_info(dateup) VALUES ($newname)";
		// $objQuery2 = mysqli_query($conn,$strSQL2) or die ("เกิดความผิดพลาดในการอัปโหลดไฟล์ sql2 ".$conn->connect_error);
    } else {
        // echo "ขออภัย เกิดความผิดพลาดในการอัปโหลดไฟล์";
         echo "<script type='text/javascript'>";
	echo "alert('ขออภัย เกิดความผิดพลาดในการอัปโหลดไฟล์');";
	// echo "window.location = 'stue4.php'; ";
	echo "</script>";
    }
}
// }
}


$update_stue2="UPDATE tb_info SET name = '".$_POST['name']."',Branch = '".$_POST['branch']."', class = '".$_POST['class']."', room = '".$_POST['room']."', teacher = '".$_POST['teacher']."', Phone = '".$_POST['phone']."', Email = '".$_POST['email']."' WHERE ID_Stu = '".$_SESSION['ID']."' ";
$query_stue2=mysqli_query($conn,$update_stue2);
	}
 else 
 	{	
 echo "ไม่มีข้อมูล";
 	}
}
?>
<?php
if($query_stue2)
{

	?>
	 	<script type="text/javascript">
		alert("แก้ไขข้อมูลสำเร็จ");
		location.href = "stu4.php";
 	</script>

		<?php 

}
else
{
	// print_r($_POST);
	// echo "ไม่มี ID";
	?>
	 	<script type="text/javascript">
		alert("แก้ไขข้อมูลไม่สำเร็จ");
		location.href = "stu4.php";
 	</script>
		<?php 
}
//<!-- <script type="text/javascript">
//		alert("แก้ไขสำเร็จแล้ว");
//		location.href = "searc.php";
//	</script> -->

// print_r($_POST);
// $name=$_POST['name'];
// $class=$_POST['class'];
// $club=$_POST['club'];
// $teacher=$_POST['teacher'];
// $phone=$_POST['phone'];
// $email=$_POST['email'];

// $sql_stue2="SELECT * FROM tb_info WHERE iduser";

// $insert_stue2="INSERT INTO ('Name','Class','Club','Teacasdher','Phone','E-mail') VALUES ($name,$class,$club,$teacher,$phone,$email)";
// $query_stue22=mysqli_query($conn,$insert_stue2);
// if($query_stue22->connect_error)
// {
// 	echo "การเชื่อมต่อผิดพลาด : ".$conn->connect_error;
// }
// else
// {
// 	echo "<script language=\"JavaScript\">";
// 	echo "alert('แก้ไขข้อมูลเสร็จสิ้น');window.location='stu.php';";
// 	echo "</script>";
// }

?>


<!-- 
<?php
session_start();
include('config.php');
include('security1.php');
if(isset($_GET['ID']))
{
	if($_GET['ID']!=="")
	{
		// $update_ed2="UPDATE tb_login SET User='".$_POST['User2']."', Password='".$_POST['Password2']."', Status='".$_POST['Status2']."' ";
		// $update_ed2="UPDATE tb_login SET User='".$_POST['User2']."', Password='".$_POST['Password2']."', Status='".$_POST['Status2']."' WHERE ID = '".$_POST['ID']."'";
		$update_ed2="UPDATE tb_login SET ID='".$_POST['ID2']."', Password='".$_POST['Password2']."', Status='".$_POST['Status2']."' WHERE ID = '".$_GET['ID']."'";

		$query_ed2=mysqli_query($conn,$update_ed2);
	}
	else
	{
		echo "ไม่มี";
	}
}

?>
<?php

if($query_ed2)
{
	?>
	<script type="text/javascript">
		alert("แก้ไขสำเร็จแล้ว");
		location.href = "ad3.php";
	</script>
	<?php
}
else
{
	echo "ไม่มี ID";
	?>
	 <script type="text/javascript">
		alert("แก้ไขสำเร็จแล้ว");
		location.href = "searc.php";
	</script> -->
	<!-- <?php 
}

?>  -->