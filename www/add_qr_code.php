<?php
	session_start();
	include('Config.php');
	$uid = $_GET["pid"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="gen_qrcode/index.php?uid=<?php echo $uid; ?>" name="atosmt">
		<input type="hidden" name="data" value="http://localhost/www/www/scan.php?ID=<?php echo $uid;?>">
		<input type="hidden" name="id" value="<?php echo $uid;?>">
	</form>
<script type="text/javascript">
    document.atosmt.submit();
</script>
</body>
</html>