<?php
include("Config.php");
?>
<html>
<head>
	<meta charset="utf-8">
    <title>ค้นหา</title>
</head>
<body>
	<form method="get" action="">
		<input type="text" name="sc">
		<input type="submit" value="ok">
		<?php
	
?>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>User</td>
				<td>Passwoed</td>
				<tr>

<?php 
if(isset($_GET["sc"]))
{
	$sql="select * from prototype where User like '%".$_GET["sc"]."%'";
$myq=mysqli_query($connetion,$sql);
	if($_GET["sc"]!="")
	{
		while($boat = mysqli_fetch_array($myq)) {
?>
<tr>
	<td><?php echo $boat["User"]; ?></td>
	<td><?php echo $boat["ID"]; ?></td>
	<td><?php echo $boat["Name"]; ?></td>
	<tr>
		<?php
		}
	}
}
?>


				</table>

	</form>
</body>
</html>