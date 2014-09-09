<?php
require_once('Connections/localhost.php');

mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database.");	
$result2=mysql_query("SELECT * FROM admin WHERE username='$user'");
$rowCheck2 = mysql_num_rows($result2);

if($rowCheck2 < 1){

header('dashboard.php');

}
?>