<?php 
session_start();
include('../Config.php');
include('security3.php');
$sl_pqr="SELECT * FROM tb_login LEFT JOIN tb_qr ON tb_login.ID_Student = tb_qr.IDStudent WHERE tb_qr.IDStudent = '".$_SESSION['ID']."' ";
$qr_pqr=mysqli_query($conn,$sl_pqr);
$row_pqr=mysqli_fetch_array($qr_pqr);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="window.Print();
document.getElementById('prt').style.visibility='visible';
document.getElementById('prt2').style.visibility='visible';
document.getElementById('prt3').style.visibility='visible';
">
<link rel="stylesheet" type="text/css" href="../style.css">
<p style="position:relative; top: 180px; left: 320px;"><img src= "../gen_qrcode/temp/<?php echo $row_pqr['qr_code']; ?>"></p>
<h1 style="position:relative; top: 180px; font-size: 80px; left:150px; font-family:kanit; ">รหัสนักศึกษา : <?php echo $row_pqr['IDStudent']; ?></h1>
<br>
<div id="prt2">
<!-- <h1 style="position:relative; top: -100px; font-size: 20px;">รหัส QR_Code : <?php echo $row_pqr['qr_code']; ?></h1> -->
<br>
</div>

<div id="prt" style="position: relative; top:-655px; left:360px;">
<button class="academy-btn btn-4 mt-30" onclick="myFunction()">Print</button>
</div>

<div id="prt3" style="position: relative; top:-750px; left: 660px;">
<a href="stu4.php"><button class="academy-btn btn-4 mt-30">Cancel</button></a>
</div>


<!-- 
บรรทัดที่ 13 โชว์ ID
	17 โชว์รหัสนักศึกษา
	21 โชว์ qr code นักศึกษา 
	อันอื่นเกรียงน่าจะรู้ ถ้าไม่รู้ค่อยพิมพ์ถาม 
-->

<script>
function myFunction() {
document.getElementById('prt').style.visibility='hidden';
document.getElementById('prt2').style.visibility='hidden';
document.getElementById('prt3').style.visibility='hidden';

window.print();
document.getElementById('prt').style.visibility='visible';
document.getElementById('prt2').style.visibility='visible';
document.getElementById('prt3').style.visibility='visible';

}
</script>
<style type="text/css">
@page {
margin: 0;
}
img {
	width: 550px;
	height: 550px;
}
</style>
</body>
</html>