<?php
	session_start();
	include('Config.php');
	$idh = $_GET['idh'];
	$ID = $_GET['ID'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="scan.php?idh<?php echo($idh); ?>&&ID=<?php echo ($ID); ?>" name="atosmt">
		<input type="hidden" name="idh" value="<?php echo $_GET['idh'];?>">
		<input type="hidden" name="id" value="<?php echo $_GET['ID'];?>">
	</form>
<script type="text/javascript">
    document.atosmt.submit();
</script>
</body>
</html>