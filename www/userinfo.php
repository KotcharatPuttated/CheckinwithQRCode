<?php
// mysql hostname, username, password
$conn = mysql_connect('localhost', 'root', '12345678');
// mysql database
$db   = mysql_select_db('students');

$studentid = $_POST['studentid'];

// clean comma qrcode ex. text,12345 > 12345
if (strpos($studentid,',')!==false) {
	$studentid = explode(',', $studentid)[1];
}

if(mysql_query("INSERT INTO usercheckin (studentid) VALUES ($studentid)")) {
	
		$query = mysql_query("SELECT usercheckin.checkin,userinfo.id,userinfo.firstname,userinfo.lastname,userinfo.level FROM userinfo, usercheckin WHERE usercheckin.studentid=userinfo.id ORDER BY usercheckin.id DESC LIMIT 5");         
		
		$resultArray = array();
		while($result = mysql_fetch_assoc($query)) {
		  array_push($resultArray,$result);
		}
		mysql_close($conn);
		echo json_encode($resultArray);
} else {
		echo json_encode(null);
		}

