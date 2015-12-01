<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE> addtestimony </TITLE>
<meta http-equiv="refresh" content="0; url=testimonials.php" />
</HEAD>
<BODY>
<?php
require('config.php');

	if (!mysql_connect($db_host, $db_user, $db_pwd))
		die("Can't connect to database");

	if (!mysql_select_db($database))
		die("Can't select database");
	
if($_SESSION["surname"]!="")
{
	// sending query
	$result = mysql_query("INSERT INTO testimonials VALUES (NULL,'{$_SESSION["name"]}','{$_SESSION["surname"]}','{$_SESSION["location"]}','{$_GET['comment']}','{$_SESSION["user_id"]}')");

	if (!$result) {
		die("Query to show fields from table failed");
	}
}
?>
</BODY></HTML>
