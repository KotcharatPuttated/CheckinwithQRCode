<?php
session_start();
include('../Config.php');
include('security2.php');
if(isset($_SESSION['ID']))
{
 if($_SESSION['ID'] != "")
	{

$update_stue2="UPDATE tb_info SET name = '".$_POST['name']."', Phone = '".$_POST['phone']."', Email = '".$_POST['email']."' WHERE ID_Stu = '".$_SESSION['ID']."' ";
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
		alert("แก้ไขสำเร็จแล้ว");
		location.href = "th2.php";
	</script>
	<?php
}
else
{
	print_r($_POST);
	echo "ไม่มี ID";
	?>
	<!-- <script type="text/javascript">
		alert("แก้ไขสำเร็จแล้ว");
		location.href = "searc.php";
	</script> -->
	<?php 
}

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
	<!-- <script type="text/javascript">
		alert("แก้ไขสำเร็จแล้ว");
		location.href = "searc.php";
	</script> -->
	<!-- <?php 
}

?>  -->