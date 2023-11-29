<?php
session_start();
include('Config.php');
include('security1.php');
// print_r($_GET['ID']);
// printf($_GET['ID']);

if (isset($_GET['ID'])) {

	$sql_dl7 = "DELETE FROM tb_count WHERE ID_C_Student='" . $_GET['ID'] . "' ";
	$query_dl7 = mysqli_query($conn, $sql_dl7);

	$sql_dl = "DELETE FROM tb_login WHERE ID_Student='" . $_GET['ID'] . "' ";
	$query_dl = mysqli_query($conn, $sql_dl);

	$sql_dl21 = "DELETE FROM tb_info WHERE ID_Stu='" . $_GET['ID'] . "' ";
	$query_dl21 = mysqli_query($conn, $sql_dl21);
	// $row2 = mysqli_fetch_array($query_dl2);
	// $keep10 = "Student/img/" . $row2['img'] . "";
	// $delete10 = @unlink($keep10);
	// echo $keep10 . "<br>";
	$sql_dl2 = "SELECT * FROM tb_info WHERE ID_Stu = '" . $_GET['ID'] . "' ";
	$query_dl2 = mysqli_query($conn, $sql_dl2);
	$row2 = mysqli_fetch_array($query_dl2);
	$keep1 = "Student/img/" . $row2['img'] . "";
	$del1 = @unlink($keep1);
	// echo $keep1 . "<br>";

	$sql_dl3 = "DELETE FROM tb_at WHERE FK_ID_Student='" . $_GET['ID'] . "' ";
	$query_dl3 = mysqli_query($conn, $sql_dl3);

	$sql_dl5 = "SELECT * FROM tb_qr WHERE IDStudent='" . $_GET['ID'] . "' ";
	$query_dl5 = mysqli_query($conn, $sql_dl5);
	$row5 = mysqli_fetch_array($query_dl5);
	$keep5 = "gen_qrcode/temp/" . $row5['qr_code'] . "";
	$delete5 = @unlink($keep5);
	// echo $keep5;
	$sql_dl4 = "DELETE FROM tb_qr WHERE IDStudent='" . $_GET['ID'] . "'  ";
	$query_dl4 = mysqli_query($conn, $sql_dl4);

	if ($query_dl4) {
		echo "<script type='text/javascript'>";
		echo "alert('ลบข้อมูลเสร็จสิ้น');";
		echo "window.location = 'admin/projects.php?txtsearch='; ";
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
	} else {
		echo "<script type='text/javascript'>";
		echo "alert('Error back to delete again');";
		echo "window.location = 'pages/examples/Projects.php'; ";
		echo "</script>";
	}
}
