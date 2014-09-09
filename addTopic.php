
<?php
include('pageCheck.php');

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="vle"; // Database name 
$tbl_name="forumTopic"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$topic=$_POST['topic'];
$message=$_POST['message'];
$name=$user;


$datetime=date("d/m/y h:i:s");

$sql="INSERT INTO $tbl_name(topic, message, name, datetime)VALUES('$topic', '$message', '$name', '$datetime')";
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=mainForum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>