<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE> new reservation </TITLE>
<meta http-equiv="refresh" content="0; url=rooms.php" />
</HEAD>
<BODY>
<?php
require('config.php');

	if (!mysql_connect($db_host, $db_user, $db_pwd))
		die("Can't connect to database");

	if (!mysql_select_db($database))
		die("Can't select database");
	
if($_SESSION["username"]!="")
{
	$remaining = $_GET['rooms_count'] - 1;
	//echo $remaining;
	$result = mysql_query("INSERT INTO reservations VALUES (NULL,'{$_SESSION["user_id"]}','{$_SESSION["name"]}','{$_SESSION["surname"]}','{$_GET['starting']}','{$_GET['ending']}','{$_GET['room_code']}','{$_GET['room_name']}')");
	$result = mysql_query("UPDATE rooms SET count='{$remaining}' WHERE room_id='{$_GET['room_code']}'");
	if($_GET['rooms_count'] == 1)
		$result2 = mysql_query("UPDATE rooms SET available='non-available' WHERE room_id='{$_GET['room_code']}'");
	
	
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$result3= 0;
}
?>
</BODY></HTML>
