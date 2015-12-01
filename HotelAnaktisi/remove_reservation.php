<HTML>
<HEAD>
<TITLE> cancel a reservation </TITLE>
<meta http-equiv="refresh" content="0; url=booking.php" />
</HEAD>
<BODY>
<?php
require('config.php');

	if (!mysql_connect($db_host, $db_user, $db_pwd))
		die("Can't connect to database");

	if (!mysql_select_db($database))
		die("Can't select database");
	
if($_GET['user_id']!="" && $_GET['res_id']!="")   
{
	
	$result = mysql_query("delete from reservations where user_id={$_GET['user_id']} AND res_id={$_GET['res_id']}");
	$result2= mysql_query("select count from rooms where room_id={$_GET['room_code']}");
	$row = mysql_fetch_row($result2);
	if($row[0] == 0)
	{
		$result = mysql_query("UPDATE rooms SET available='available' WHERE room_id='{$_GET['room_code']}'");
	}
	
	$newcount = $row[0] + 1;
	$result = mysql_query("UPDATE rooms SET count='{$newcount}' WHERE room_id='{$_GET['room_code']}'");
	if (!$result) {
		die("Query failed --/-- to show fields from table failed");
		echo "cancel a reservation failed";
	}
	

	mysql_free_result($result2);	
}
?>
</BODY></HTML>


