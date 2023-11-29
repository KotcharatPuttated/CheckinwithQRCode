<?php 
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head><title></title>

</head>
<body>

<form action="" method="GET">
	<?php
	echo $_SESSION['Status'];
	?>
	<input type="text" name="sc"><input type="submit" value="ค้นหา">
<?php 
$select_sc="SELECT * FROM tb_login WHERE User like '%".$_GET["sc"]."%' ";
$query_sc=mysqli_query($conn,$select_sc);
if(mysqli_num_rows($query_sc))
{
if(isset($_GET["sc"]))
{
	
?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>User</th>
		<th>Password</th>
		<th>Status</th>
	</tr>
<?php 
	while ($sc2=mysqli_fetch_array($query_sc))
	{
?>

	<tr>
		<td><?php echo $sc2['ID']; ?></td>
		<td><?php echo $sc2['User']; ?></td>
		<td><?php echo $sc2['Password']; ?></td>
		<td><?php echo $sc2['Status']; ?></td>
	</tr>
<?php	
	}
  }
}
else 
{
	echo "ไม่พบข้อมูล";
}
?>

</table>
</form>
</body>
</html>