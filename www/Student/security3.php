<?php 
// session_start();
if ($_SESSION['ID'] == '') { 
    echo "<script language=\"JavaScript\">";
    echo "alert('กรุณากรอกรหัสเข้าสู่ระบบ');window.location='../login.php';";
    echo "</script>";
}
if ($_SESSION['Status'] != 'Student') { 
    echo "<script language=\"JavaScript\">";
    echo "alert('กรุณากรอกรหัสเพื่อเข้าสู่ระบบ');window.location='../login.php';";
    echo "</script>";
}
?>
