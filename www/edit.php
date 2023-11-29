<?php
session_start();
include('Config.php');
include('security1.php');
echo "ผู้ใช้ : " . $_GET['ID'];
$select_ed="SELECT * FROM tb_login WHERE ID='".$_GET['ID']."' ";
$query_ed=mysqli_query($conn,$select_ed);
$show_ed=mysqli_fetch_array($query_ed);
?>
<form action="edit2.php?ID=<?php echo $_GET["ID"]; ?>" method="POST">
<table border="1" align="center" width="60%">
	<tr>
		<th>แก้ไขบัญชีผู้ใช้</th>
	</tr>
	<tr>
		<td><table><tr align="left">
			<!-- <td><input size="100%" type="text" name="User2" value="<?php echo $show_ed['User']?>" disabled="disabled"> -->
			<br><input size="100%" type="text" name="ID2" value="<?php echo $show_ed['ID']?>"  pattern="[A-Z,a-z,0-9]+" required="required" >
			<br><input size="100%" type="text" name="Password2" value="<?php echo $show_ed['Password']?>" pattern="[A-Z,a-z,0-9]+" required="required">
			<!-- <br><input size="110" type="text" name="Status2" value="<?php echo $show_ed['Status']?>"> -->
			<br><select name="Status2">
			<option value="<?php echo $show_ed['Status']?>"><?php echo $show_ed['Status']?></option>
			<option value="Admin">Admin</option>
			<option value="Teacher">Teacher</option>
			<option value="Student">Student</option>
			</select>
			</td>
			</tr></table>
		</td>
	</tr>
	<tr align="center">
		<td><input type="submit" value="ตกลง"></td>
	</tr>
	</table>
</form>
<form action="searc.php">
<input type="submit" value="ยกเลิก">
</form>