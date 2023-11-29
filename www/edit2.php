<?php
session_start();
include('Config.php');
include('security1.php');
if(isset($_GET['ID']))
{
	if($_GET['ID']!=="")
	{
		// $update_ed2="UPDATE tb_login SET User='".$_POST['User2']."', Password='".$_POST['Password2']."', Status='".$_POST['Status2']."' ";
		// $update_ed2="UPDATE tb_login SET User='".$_POST['User2']."', Password='".$_POST['Password2']."', Status='".$_POST['Status2']."' WHERE ID = '".$_POST['ID']."'";
		$update_ed2="UPDATE tb_login SET ID_Student='".$_POST['ID2']."', Password='".md5($_POST['Password2'])."', Status='".$_POST['Status2']."' WHERE ID_Student = '".$_GET['ID']."'";

		$update_ed3="UPDATE tb_info SET ID_Stu='".$_POST['ID2']."' WHERE ID_Stu = '".$_GET['ID']."'";

		$update_ed4="UPDATE tb_at SET FK_ID_Student='".$_POST['ID2']."' WHERE FK_ID_Student = '".$_GET['ID']."'";

		$update_ed5="UPDATE tb_qr SET IDStudent='".$_POST['ID2']."' WHERE IDStudent = '".$_GET['ID']."'";

		// $sql6="SELECT * FROM tb_qr WHERE ID_Student = '".$_POST['ID']."' ";
		// $re6=mysqli_query($conn,$sql_ed6);
		// $row6=mysqli_fetch_array($re6);
		// $keep6="gen_qrcode/temp/".$row6['qr_code']."";
		// $delete=@unlink($keep6);

		$query_ed2=mysqli_query($conn,$update_ed2);
		$query_ed3=mysqli_query($conn,$update_ed3);
		$query_ed4=mysqli_query($conn,$update_ed4);
		$query_ed5=mysqli_query($conn,$update_ed5);
	}
	else
	{
		echo "ไม่มี";
	}
}

?>
<?php

if($query_ed5)
{
	?>
	<script type="text/javascript">
		alert("แก้ไขสำเร็จแล้ว");
		location.href = "admin/projects.php?txtsearch=";
	</script>
	<?php
}
else
{
	
	?>
<script type="text/javascript">
		alert("ไอดีนี้มีผู้ใช้แล้ว");
		location.href = "admin/projects.php?txtsearch=";
	</script>
	<?php 
}




?>

<?php

	//<!-- <script type="text/javascript">
	//	alert("แก้ไขสำเร็จแล้ว");
//		location.href = "searc.php";
//	</script> -->
// $ID2=$_POST['ID2'];
// $User2=$_POST['User2'];
// $Password2=$_POST['Password2'];
// $Status2=$_POST['Status2'];

// $update_ed2="UPDATE tb_login SET User='$User2',Password='$Password2',Status='$Status2' WHERE ID='$ID2' ";
// $query_ed2=mysqli_query($conn,$update_ed2) or die ("Error in query".mysql_error());

// 	if($query_ed2){
//  	echo "<script type='text/javascript'>";
//  	echo "alert('อัปเดตข้อมูลเสร็จสิ้น');";
//  	echo "window.location = 'searc.php'; ";
//  	echo "</script>";
//  	}
//  	else{
//  	echo "<script type='text/javascript'>";
//  	echo "alert('Error back to Update again');";
//  	echo "window.location = 'searc.php'; ";
//  	echo "</script>"; 
//  	}

?>