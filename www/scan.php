<?php
	session_start();
    include('Config.php');
    include('security2.php');

    $sql = "SELECT * FROM tb_login WHERE ID_Student = '".$_SESSION['ID']."'";
    $login = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($login);
    if ($_SESSION['ID'] == '') { 
    echo "<script language=\"JavaScript\">";
    echo "alert('กรุณากรอกรหัสเข้าสู่ระบบ');window.location='login.html';";
    echo "</script>";
	}
	if ($_SESSION['Status'] != 'Teacher') { 
    echo "<script language=\"JavaScript\">";
    echo "alert('เฉพาะอาจารย์เท่านั้น');window.location='login.html';";
    echo "</script>";
	}
    
    date_default_timezone_set('Asia/Bangkok');
	$date = date('Y-m-d H:i:s');
	$m = date("m", strtotime($date));

$sql="SELECT * FROM tb_at LEFT JOIN tb_info ON tb_at.FK_ID_Student = tb_info.ID_Stu WHERE FK_ID_Student = '".$_GET['ID']."' ";
$re=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($re);
// $d1 = time()>=strtotime("00:00:00") && time()<strtotime("23:00:00");
$d3 = $row['Date_Check'];



if(time()>=strtotime("8:00:00") && time()<=strtotime("24:00:00")){
	if($row > 0){
// = ให้ทำนี้
// echo $row['Date_Check']."<br>";
// echo date("Y-m-d",strtotime($date))."<br>";
// echo $d3."<br>";
	echo "<script language=\"JavaScript\">";
		echo "alert('ท่านได้เช็คชื่อแล้ว ท่านเช็คชื่อใหม่ได้อีกครั้งหลังถึงเวลากิจกรรมครั้งต่อไปค่ะ');window.location='Teacher/qrcode.php';";
		echo "</script>";

 
	}	
	else
	{

	

		$strSQL = "INSERT INTO tb_at(FK_ID_Student,Date_Check,Criterion)VALUES('".$_GET['ID']."','$date','1')";
   		 $objQuery = mysqli_query($conn,$strSQL);
   		 if ($result['Status'] != 'Teacher') {
			echo "<script language=\"JavaScript\">";
			echo "alert('เฉพาะอาจารย์เท่านั้น');window.location='login.html';";
			echo "</script>";
		}if ($objQuery) {
			echo "<script language=\"JavaScript\">";
			echo "alert('รหัสนักศึกษา : ".$_GET['ID']." ทำการเช็คชื่อเสร็จสิ้น');window.location='Teacher/qrcode.php'; ได้ทำการเช็คชื่อเรียบร้อย";
			echo "</script>";
		}
		else
		{
			echo "<script language=\"JavaScript\">";
			echo "alert('ทำรายการผิดพลาด');window.location='Teacher/qrcode.php';";
			echo "</script>";
		}
			mysqli_close($conn);


	
		}
}
else
{
		echo "<script language=\"JavaScript\">";
		echo "alert('ยังไม่ถึงระยะเวลากิจกรรม 08:00 ถึง 20:00 น. กรุณาเช็คใหม่ในภายหลังค่ะ');window.location='Teacher/qrcode.php';";
		echo "</script>";
}

//------------------------------------------------------------------------------//
// if(current_time < 2pm){

// } เจอจากในเว็บ 18/11/62
// if($row == $)



	// $strSQL = "INSERT INTO tb_at(FK_ID_Student,Date_Check,Criterion) VALUES('".$_GET['ID']."','$date','1')";
 //    $objQuery = mysqli_query($conn,$strSQL);
 //    if ($result['Status'] != 'Teacher') {
	// 	echo "<script language=\"JavaScript\">";
	// 	echo "alert('เฉพาะอาจารย์เท่านั้น');window.location='Teacher/qrcode.php';";
	// 	echo "</script>";
	// }if ($objQuery) {
	// 	echo "<script language=\"JavaScript\">";
	// 	echo "alert('ทำรายการเสร็จสิ้น');window.location='Teacher/qrcode.php';";
	// 	echo "</script>";
	// }
	// else
	// {
	// 	echo "<script language=\"JavaScript\">";
	// 	echo "alert('ทำรายการผิดพลาด');window.location='Teacher/qrcode.php';";
	// 	echo "</script>";
	// }
	// mysqli_close($conn);






//}

?>



<?php
	// session_start();
 //    include('Config.php');
 //    include('security2.php');

 //    $sql = "SELECT * FROM tb_login WHERE ID_Student = '".$_SESSION['ID']."'";
 //    $login = mysqli_query($conn,$sql);
 //    $result = mysqli_fetch_array($login);
 //    if ($_SESSION['ID'] == '') { 
 //    echo "<script language=\"JavaScript\">";
 //    echo "alert('กรุณากรอกรหัสเข้าสู่ระบบ');window.location='login.php';";
 //    echo "</script>";
	// }
	// if ($_SESSION['Status'] != 'Teacher') { 
 //    echo "<script language=\"JavaScript\">";
 //    echo "alert('เฉพาะอาจารย์เท่านั้น');window.location='login.php';";
 //    echo "</script>";
	// }
    
 //    date_default_timezone_set('Asia/Bangkok');
	// $date = date("Y-m-d H:i:s");
	// $m = date("m", strtotime($date));
	// $strSQL = "INSERT INTO tb_at(FK_ID_Student,Date_Check,Criterion) VALUES('".$_GET['ID']."','$date','1')";
 //    $objQuery = mysqli_query($conn,$strSQL);
 //    if ($result['Status'] != 'Teacher') {
	// 	echo "<script language=\"JavaScript\">";
	// 	echo "alert('เฉพาะอาจารย์เท่านั้น');window.location='Teacher/qrcode.php';";
	// 	echo "</script>";
	// }if ($objQuery) {
	// 	echo "<script language=\"JavaScript\">";
	// 	echo "alert('ทำรายการเสร็จสิ้น');window.location='Teacher/qrcode.php';";
	// 	echo "</script>";
	// }
	// else
	// {
	// 	echo "<script language=\"JavaScript\">";
	// 	echo "alert('ทำรายการผิดพลาด');window.location='Teacher/qrcode.php';";
	// 	echo "</script>";
	// }
	// mysqli_close($conn);
?>