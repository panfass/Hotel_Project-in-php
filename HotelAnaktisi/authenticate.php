
<?php
require('config.php');

	if (!mysql_connect($db_host, $db_user, $db_pwd))
		die("Can't connect to database");

	if (!mysql_select_db($database))
		die("Can't select database");
	
if($_GET['login_usr']!="" && $_GET['login_pswd']!="")
{
	$result = mysql_query("select user_id, username, password, name, surname, location from users");
	if (!$result) 
	{
		echo 'Could not run query: ' . mysql_error();
		die("Query failed --/-- to show fields from table failed");
	}
	else
		{	//επιτυχία σύνδεσης mysql
				$found = 0;
				while(  ($row = mysql_fetch_row($result))  && ($found == 0 )   )
				{	
					$usrnm = $_GET['login_usr'];
					$pwrd = $_GET['login_pswd'];

					if(   ($_GET['login_usr'] == $row[1])   &&   ($_GET['login_pswd'] == $row[2]))
					{
						echo "Login successful!";
						$found = 1;
						session_start();
						$_SESSION["user_id"]  = $row[0];
						$_SESSION["username"] = $row[1];
						$_SESSION["name"]     = $row[3];
						$_SESSION["surname"]  = $row[4];
						$_SESSION["location"] = $row[5];
						echo "<HTML><HEAD><TITLE> Authenticating </TITLE><meta http-equiv=\"refresh\" content=\"0; url=index.php\" /></HEAD><BODY></BODY></HTML>"; 
					}
					else
					{
						echo "<HTML><HEAD><TITLE> Authenticating </TITLE><meta http-equiv=\"refresh\" content=\"0; url=login.php\" /></HEAD><BODY><br></BODY></HTML>";
					}
				}
		}
}
?>
