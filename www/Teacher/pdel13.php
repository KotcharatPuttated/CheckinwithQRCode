<?php
session_start(); 
include('../Config.php');
include('security2.php');

if(isset($_GET['ID'])){
	$sql = "DELETE FROM tb_at WHERE FK_ID_Student = '".$_GET['ID']."' ";
	$re = mysqli_query($conn,$sql);
}
else
{
	// echo $_GET['ID'];
	// print_r($_GET['ID']);
?>
	<script type="text/javascript">
		alert("ไม่พบข้อมูลหมายเลขนักศึกษาที่ต้องการลบ หรืออาจเกิดข้อผิดพลาดกับระบบ");
		location.href = "pth3L13.php";
	</script>
<?php
}
?>
<!-- <script type="text/javascript">
		alert("ลบข้อมูลเสร็จสิ้น");
		location.href = "pth3L12.php";
	</script> -->

<?php
header("Location: pth3L13.php");
// echo $_GET['ID'];
// 	print_r($_GET['ID']);
?>