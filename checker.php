<? ob_start(); ?>
<?php require_once('Connections/localhost.php'); ?>
<?php
session_start(); 

if(isset($_SESSION['username']))
{ 
$user= $_SESSION['username'];

mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database."); 

$enabled=mysql_query("SELECT * FROM student WHERE username='$user' AND enable='0'");

$rowCheck1 = mysql_num_rows($enabled);

if($rowCheck1 > 0){ 

echo"<p>Your profile is waiting authorisation from an administrator</p>";

session_destroy();
 

  } 
else{
header("Location:dashboard.php");
} 
  } 
?>


<? ob_flush(); ?>