<?php 
// session_start();
if ($_SESSION['ID'] == '') { 
    echo "<script language=\"JavaScript\">";
    echo "alert('กรุณเข้าสู่ระบบ');window.location='login.php';";
    echo "</script>";
}
if ($_SESSION['Status'] != 'Student') { 
    echo "<script language=\"JavaScript\">";
    echo "alert('เฉพาะผู้ดูเเลระบบ');window.location='login.php';";
    echo "</script>";
}
?>
