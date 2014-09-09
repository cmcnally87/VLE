<?php
$cn = mysql_connect('localhost', 'root', 'root') or
	die('Unable to connect to server');
mysql_select_db('vle', $cn) or
	die(mysql_error($cn));


$fiveMinutesAgo = time() - 999900;

$sql = 'SELECT
	username, messageContent, messageTime
		FROM
	messages
		WHERE
	messageTime > ' . $fiveMinutesAgo . '
		ORDER BY
	messageTime';
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));
	
while ($row = mysql_fetch_assoc($result)) {
	$hoursAndMinutes = date('g:ia', $row['messageTime']);
	
	echo '<p><strong>' . $row['username'] . '</strong>: <em>(' . $hoursAndMinutes . ')</em> ' . $row['messageContent'] . '</p>';
}




?>