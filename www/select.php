<?php
include("Config.php");
$mot="select * from prototype";
$query=mysqli_query($connetion,$mot); 
?>
<?php
if (mysqli_num_rows($query) ) {
?>
<table border="1">
<tr>
	<td>ID</td>
	<td>User</td>
	<td>Password</td>
	<td>Name</td>
</tr> 
<?php	
while ($moth=mysqli_fetch_array($query))
{
?>

<tr>
	<td><?php echo $moth['ID'] ?></td>
	<td><?php echo $moth['User'] ?></td>
	<td><?php echo $moth['Password']?></td>
	<td><?php echo $moth['Name'] ?></td>
</tr>
 
<?php	
}
}
else {
	echo "ไม่มีข้อมูล";
}
	?>

</table>