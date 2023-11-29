<?php
session_start();

$struser=$_POST['txt_name'];
$strpass=$_POST['txt_pass'];
include("Config.php");
$moth="SELECT * FROM prototype WHERE User = '$struser' and Password = '$strpass'";

$dbquery=mysql_query($moth);
$boss=mysql_fetch_array($dbquery);
if(isset($boss))
{
	$_SESSION['ID']=$boss['ID'];
	$_SESSION['User']=$boss['User'];
	$_SESSION['Password']=$boss['Password'];
if (isset($_SESSION['User'])) 
{ 
	header("location:home.php");
}
else{
	echo "<script type='text/javascript'>";
	echo "alert(' โปรดตรวจสอบรหัสของท่าน หรือตรวจข้อมูลที่ไม่ตามตรงภาพค่ะ ');";
	echo "window.location = 'login.php'; ";
	echo "</script>";
//รอเปลี่ยน (เปลี่ยนกับอันบน)
		// echo "<h1><center><br><br><br><br><br><br><br>โปรดตรวจสอบรหัสของท่าน <br>หรือตรวจข้อมูลที่ไม่ตามตรงภาพค่ะ";
		// header("refresh: 5; url=Loginnew.php");
	exit();
	}
}
