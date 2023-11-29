<?php
session_start();
include('Config.php');

$select_lg="SELECT * FROM tb_login WHERE ID_Student ='".$_POST['ID']."' AND Password='".md5($_POST['Password'])."'";
$query_lg=mysqli_query($conn,$select_lg);
$check_lg=mysqli_num_rows($query_lg);

if($check_lg=mysqli_num_rows($query_lg)>0){

if($num=mysqli_fetch_array($query_lg))
{
	$_SESSION['ID']=$num['ID_Student'];
	$_SESSION['User']=$num['User'];
	$_SESSION['Password']=$num['Password'];
	$_SESSION['Status']=$num['Status'];

	if($_SESSION['Status']=="Admin")
	{
		header("Location: admin/ad.php");
		session_write_close();
		
	}
	else if($_SESSION['Status']=="Teacher")
	{
		header("Location: Teacher/th.php");
		session_write_close();
	
	}
	else if($_SESSION['Status']=="Checking")
	{
		header("Location: Checking/ck.php");
		session_write_close();
		
	}
	else if($_SESSION['Status']=="Student")
	{
		header("Location: Student/stu.php");
		session_write_close();
		
	}
}

	echo "<script language=\"JavaScript\">";
    echo "alert('รหัสผ่านไม่ถูกต้อง');window.location='login.html';";
    echo "</script>";
   echo "asdaadaas";
   session_write_close();

}	
else{
   echo "<script language=\"JavaScript\">";
    echo "alert('รหัสผ่านไม่ถูกต้อง');window.location='login.html';";
	echo "</script>";
	session_write_close();
	// echo mysqli_real_escape_string($conn,md5($_POST['Password']));
	// echo "<br>".$_POST['Password'];
}

		
?>


<?php
//แบบธรรมดา
// session_start();
// include('config.php');
// $User=$_POST['User'];
// $Password=$_POST['Password'];
// $Status=$_POST['Status'];

// $select_lg="SELECT * FROM tb_login WHERE User='$User' AND Password='$Password' ";
// $query_lg=mysqli_query($conn,$select_lg);
// $check_lg=mysqli_num_rows($query_lg);
// if($check_lg)
// {

	// header("Location: searc.php");
	
// }
// else
// {
// 	echo "รหัสผ่านไม่ถูกต้อง";
// 	header("Location: login.html");
	
// }

?>

