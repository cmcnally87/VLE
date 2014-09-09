<?php require_once('Connections/localhost.php');
include('pageCheck.php');
?>


<p class="headText">Account Information</p>

<?php

mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database.");
$rows1 = mysql_query("SELECT * FROM admin WHERE username = '$user'");

$totRows = mysql_fetch_assoc($rows1);
?>


<p class="info">Username: <?php echo $totRows['username']; ?></p>
<p class="info">Firstname: <?php echo $totRows['fName']; ?></p>
<p class="info">Surname: <?php echo $totRows['sName']; ?></p>
<p class="info">Email Address: <?php echo $totRows['email']; ?></p>