<HTML>
<HEAD>
<TITLE> adding new user </TITLE>
<meta http-equiv="refresh" content="0; url=login.php" />
</HEAD>
<BODY>
<?php
require('config.php');

	if (!mysql_connect($db_host, $db_user, $db_pwd))
		die("Can't connect to database");

	if (!mysql_select_db($database))
		die("Can't select database");
	
if($_GET['username']!="" && $_GET['password']!="" && $_GET['location']!="" && $_GET['first_name']!="" && $_GET['last_name']!="")   
{
	// sending query
	$result = mysql_query("INSERT INTO users VALUES (NULL,'{$_GET['username']}','{$_GET['password']}','{$_GET['first_name']}','{$_GET['last_name']}','{$_GET['email']}','{$_GET['location']}','{$_GET['phone']}')");
	if (!$result) {
		die("Query failed --/-- to show fields from table failed");
		echo "new user registration failed";
	}
}
?>
</BODY></HTML>