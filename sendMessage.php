<?php

$cn = mysql_connect('localhost', 'root', 'root') or
	die('Unable to connect to server');
mysql_select_db('vle', $cn) or
	die(mysql_error($cn));

$username = $_POST['username'];
$message = $_POST['message'];
$time = time();

$sql = 'INSERT INTO messages
	(username,
	 messageContent,
	 messageTime)
		VALUES
	("' . $username . '",
	 "' . $message . '",
	 ' . $time . ')';
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));



?>