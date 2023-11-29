<?php
session_start();
include('Config.php');
include('security1.php');

$ID=$_POST['ID'];
$Password=$_POST['Password'];
$Status=$_POST['Status'];

$select_rgt="SELECT * FROM tb_login WHERE ID_Student = '$ID' ";
$query_rgt=mysqli_query($conn,$select_rgt);
$numrow_rgt=mysqli_num_rows($query_rgt);
if($numrow_rgt == 1)
{
	echo "<script language=\"JavaScript\">";
	echo "alert('ชื่อผู้ใช้นี้ถูกใช้เเล้ว');window.location='admin/project_add.php';";
	echo "</script>";
}
else{
$sql= "INSERT INTO tb_login(ID_Student,Password,Status) VALUES ('$ID','$Password','$Status')";
$query = mysqli_query($conn,$sql);

if($query == 1) {

$sql1="INSERT INTO tb_info (ID_Stu) VALUE ('$ID')";
$query1 = mysqli_query($conn,$sql1);
}
if($_POST['Status'] == "Student")
	{
if ($query1 == 1) {
	header("location:add_qr_code.php?pid=".$ID."");
		}
	}
else
	{
	header("location:admin/project_add.php");
	}

}
?>