<?php
session_start();
?>
<html>
<HEAD>
<TITLE> loging out </TITLE>
<meta http-equiv="refresh" content="0; url=login.php" />
</HEAD>
<body>
<?php
session_unset(); 
session_destroy(); 
?>