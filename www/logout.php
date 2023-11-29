<?php
session_start();
session_unset();
session_destroy();
// ob_start();
// header("localhost:../../loginnew.php");
// ob_end_flush();
// include ("../../loginnew.php");

header("location:login.html");
	// echo "<script type='text/javascript'>";
	// echo "alert('Saiyodara');";
	// echo "window.location = '../../Loginnew.php'; ";
	// echo "</script>"; 
exit();
?>