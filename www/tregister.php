<?php 
include("Config.php");
$user=$_POST["txtuser"];
$pass=$_POST["password"];
$name=$_POST["name"];
$nc = "select * from student";
$resutl = mysqli_query($connetion,$nc);

$sql ="insert into prototype (ID,User,Password,Name) VALUES ('','$user','$pass','$name')";

if ($connetion->query($sql)=== TRUE ) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql."<br>". $connetion->error;
}
?>