<?php
session_start();
include('../Config.php');
include('security2.php');


$sql = "SELECT * FROM tb_at LEFT JOIN tb_info ON tb_at.FK_ID_Student = tb_info.ID_Stu WHERE Branch = '1' AND class = '1' AND room = '1' AND Criterion = '1' ORDER BY Date_Check DESC ";
$re = mysqli_query($conn, $sql);
// mysqli_fetch_array($re);
//print_r($re);
date_default_timezone_set('Asia/Bangkok');
$datem = date("m");
$datey = date("Y");
$dated = date("j");
//  $arrayID="";
while ($row2 = mysqli_fetch_array($re)) {
	if (isset($arrayID)) {
		$arrayID .= "," . $row2['ID_Stu'];
	} else {
		$arrayID = $row2['ID_Stu'];
	}
	// echo $row2["ID_Stu"]."<br>";
	$sql1 = "SELECT * FROM tb_count WHERE ID_C_Student = '" . $row2['ID_Stu'] . "' AND mount = '" . $datem . "' ";
	$re1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($re1);

	//print_r($row1);
	//echo count($row1)."<br/>";
	if (isset($row1)) {
		// echo "mee"."<br/>";
		//------------------ตัวเดิม ด้านล่างคือตัวย่อ ---------------------------------------
		// $sql3="SELECT * FROM tb_count WHERE ID_C_Student = '".$row2['ID_Stu']."' AND mount = '".$datem."' ";
		// $re3=mysqli_query($conn,$sql3);
		// $row3=mysqli_fetch_array($re3);

		// echo $row3['ID_C_Student']."<br>";
		// echo $row3['day']."<br>";
		// $row3['day'] = $row3['day'].",".$dated;
		// $upday = $row3['day'];
		// $sqlup1 = "UPDATE tb_count SET day = '".$upday."', count = count+1 WHERE ID_C_Student = '".$row3['ID_C_Student']."' AND mount = '".$datem."' ";
		$sqlup1 = "UPDATE tb_count SET day = CONCAT(day,','," . $dated . "), count = count+1 WHERE ID_C_Student = '" . $row2['ID_Stu'] . "' AND mount = '" . $datem . "' ";
		$reup1 = mysqli_query($conn, $sqlup1);

		// $update_ed3="UPDATE tb_info SET ID_Stu='".$_POST['ID2']."' WHERE ID_Stu = '".$_GET['ID']."'";
	} else {
		// echo "maimee"."<br/>";
		// $sql2="INSERT tb_count(ID_C_Student,year,mount,day,count) VALUES('".$row2['ID_Stu']."','".$datey."','".$datem."','".$dated."','1')";
		// $re2=mysqli_query($conn,$sql2);
		$sql11 = "INSERT INTO tb_count (ID_C_Student,year,mount,day,count) VALUES ('" . $row2['ID_Stu'] . "','" . $datey . "','" . $datem . "','" . $dated . "','1')";
		$re11 = mysqli_query($conn, $sql11);
	}
}
print_r($arrayID);
//ลบแบบ array เรียงทีละตัว เช่น 6231282001,6231282002
$de = "DELETE FROM tb_at WHERE FK_ID_Student IN(" . $arrayID . ")";
// echo $de;
// print_r($de);
// $xxx = count($de);

$de = "DELETE FROM tb_at ";

// $sql3 = "SELECT * FROM tb_at ";
// $query3 = mysqli_query($conn, $sql3);
// $row3 = mysqli_fetch_array($query3);
// $i2 = -1;
// $a2 = array();
// for ($k2 = 0; $k2 < count($row3["Criterion"]); $k2++) {
// 	$i2 = $i2 + 1;
// 	$a2[$k2] = $row3['Criterion'];
// 	echo $a2[$k2]."<br>";
// }




	// $i2 = -1;
    // $a2 = array();
	// // $check_empty = 1;
    // for ($k = 0; $k < count($a2); $k++) {
    //     // echo $a2[$k];
    //     if ($a2[$k] <= 0) {
    //         echo "<script>alert('รายการบางชิ้นในคำขอมีไม่พอ กรุณาเลือกอุปกรณ์ที่มีจำนวนคงเหลือมากกว่า 0 ค่ะ'); location.href='cktb.php'; </script>";
    //         // $check_empty = 0;
    //     }
    // }

	// header("location:pth3L11.php");
if($rede = mysqli_query($conn,$de))
{echo "<script> window.location.href='pth3L11.php'; </script>";}
else
{
	echo "ลบไม่สำเร็จ";
}