<?php
session_start();
$struser=$_POST['txt_num'];
$strpass=$_POST['txt_pass'];
$captcha1=$_POST['captcha'];
include("config.php");
$max="SELECT * FROM department WHERE User = '$struser' and Password = '$strpass'";
// รอเปลี่ยน (เมื่อระบบพัง)
// $max="select * from department where User = '$struser' and Password = '$strpass'";
$dbquery=mysql_query($max);
$num=mysql_fetch_array($dbquery);
if($_POST)
{
	if($_POST['captcha']==$_SESSION['captcha']){
if(isset($num))
{
	$_SESSION['ID']=$num['ID'];
	$_SESSION['User']=$num['User'];
	$_SESSION['Password']=$num['Password'];
	$_SESSION["Status"] = $num["Status"];
	
} 
else
{ }

if(isset($_SESSION['User']))
  { header("location:Admin2.php"); }
else
  { echo "Invalid Username or Password!"; }

if($num["Status"] == "Head department")
{ header("location:status/headdm/hdepartment.php");}


if($num["Status"] == "Teacher")
  { header("location:status/teacher/teacher.php"); }


// if($num["Status"] == "Planning officer1")
// { header("location:status/plan/plan.php");}

if($num["Status"] == "Packaging officer")
{ header("location:status/package/package.php");}

if($num["Status"] == "Planning officer")
{ header("location:status/plan/plan.php");}

if($num["Status"] == "Admin")
  { header("location:status/admin/admin.php");}
}
else{
	echo "<script type='text/javascript'>";
	echo "alert(' โปรดตรวจสอบรหัสของท่าน หรือตรวจข้อมูลที่ไม่ตามตรงภาพค่ะ ');";
	echo "window.location = 'Loginnew.php'; ";
	echo "</script>";
//รอเปลี่ยน (เปลี่ยนกับอันบน)
		// echo "<h1><center><br><br><br><br><br><br><br>โปรดตรวจสอบรหัสของท่าน <br>หรือตรวจข้อมูลที่ไม่ตามตรงภาพค่ะ";
		// header("refresh: 5; url=Loginnew.php");
	exit();
	}
}