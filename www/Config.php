<?php

$conn=new mysqli('localhost','root','123456789','admin_qrcheck');
mysqli_query($conn,"SET NAMES UTF8");
if($conn->connect_error)
{
	die("ระบบขัดข้อง ไม่พบฐานข้อมูล : ".$conn->connect_error);
}
	// echo "เชื่อมต่อฐานข้อมูลเสร็จสิ้น 7MJnICNI99: ";

?>