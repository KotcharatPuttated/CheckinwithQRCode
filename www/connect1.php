<?php
session_start();
include('Config.php');

$select_lg="SELECT * FROM tb_login WHERE ID ='".$_POST['ID']."' AND Password='".$_POST['Password']."'";
$query_lg=mysqli_query($conn,$select_lg);
$check_lg=mysqli_num_rows($query_lg);
// echo($_POST); //เช็คค่า
// printf($_POST); //เช็คค่า
if($check_lg=mysqli_num_rows($query_lg)>0){

if($num=mysqli_fetch_array($query_lg))
{
	$_SESSION['ID']=$num['ID'];
	$_SESSION['User']=$num['User'];
	$_SESSION['Password']=$num['Password'];
	$_SESSION['Status']=$num['Status'];


 //เช็ค ID, Password ว่ามีจริงไหม
	// $select_lg2="SELECT * FROM tb_login";
	// $query_lg2=mysqli_query($conn,$select_lg2);
	// $check_lg2=mysqli_fetch_array($query_lg2);

	// $_SESSION['ID']=$check_lg['ID'];
	// $_SESSION['User']=$check_lg['User'];
	// $_SESSION['Password']=$check_lg['Password'];
	// $_SESSION['Status']=$check_lg['Status'];
// echo"ข้อมูลยังไม่ไปต่อ 1 ";
	if($_SESSION['Status']=="Admin")
	{
		header("Location: ad.html");
		
	}
	else if($_SESSION['Status']=="Teacher")
	{
		header("Location: th.html");
	
	}
	else if($_SESSION['Status']=="Student")
	{
		header("Location: stu.php");
		
	}
}
else{
	echo "none";
}
}	
else{
header("Location: login.php");
	
}
	// session_write_close();
	 
?>