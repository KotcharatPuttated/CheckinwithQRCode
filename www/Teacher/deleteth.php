<?php
session_start();
include('../Config.php');
include('security2.php');
// print_r($_GET['ID']);
// printf($_GET['ID']);
$ID_DE=$_POST['ID'];
$sql="SELECT * FROM tb_login WHERE ID_Student = '$ID_DE' ";
$re=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($re);

if(isset($_GET['ID']) && $row['Status'] == "Student" )
{
	$sql_dl="DELETE FROM tb_login WHERE ID_Student='".$ID_DE."' ";
	$query_dl=mysqli_query($conn,$sql_dl);

	$sql_dl2="DELETE FROM tb_info WHERE ID_Stu='".$ID_DE."' ";
	$query_dl2=mysqli_query($conn,$sql_dl2);

	$sql_dl3="DELETE FROM tb_at WHERE FK_ID_Student='".$ID_DE."' ";
	$query_dl3=mysqli_query($conn,$sql_dl3);

	$sql_dl5="SELECT * FROM tb_qr WHERE IDStudent='".$ID_DE."' ";
	$query_dl5=mysqli_query($conn,$sql_dl5);
	$row5=mysqli_fetch_array($query_dl5);
	$keep5="../gen_qrcode/temp/".$row5['qr_code']."";
	$delete5=@unlink($keep5);

	$sql_dl4="DELETE FROM tb_qr WHERE IDStudent='".$ID_DE."'  ";
	$query_dl4=mysqli_query($conn,$sql_dl4);

	if($query_dl4){
	echo "<script type='text/javascript'>";
	echo "alert('ลบข้อมูลเสร็จสิ้น');";
	echo "window.location = 'th4.php'; ";
	echo "</script>";
		// header("location:ddddd1.php?=".$_GET['ID']."");

	// $sql_dl5="DELETE FROM tb_qr WHERE IDStudent='".$_SESSION['ID']."' ";

	// $query_dl5=mysqli_query($conn,$sql_dl5);
	// $row5 = mysqli_fetch_array($query_dl5);
	//  $del5="gen_qrcode/temp/$row5['qr_code']";
	

	// if(unlink($del5))
	// {
	// echo "<script type='text/javascript'>";
 // 	echo "alert('อัปเดตข้อมูลเสร็จสิ้น');";
 // 	echo "window.location = 'pages/examples/Projects.php'; ";
 // 	echo "</script>";
	// }
	// else
	// {
	// echo "<script type='text/javascript'>";
	// echo "alert('ลบไม่สำเร็จ');";
	// echo "window.location = 'pages/examples/Projects.php'; ";
	// echo "</script>";
	// }
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "window.location = 'th4.php'; ";
	echo "</script>";
}
}
else{
	echo "<script type='text/javascript'>";
	echo "alert('ท่านไม่มีสิทธิ์ลบบัญชีผู้ใช้ที่มีสิทธิ์อื่นนอกจากนักเรียน');";
	echo "window.location = 'th4.php'; ";
	echo "</script>";
}
?>
