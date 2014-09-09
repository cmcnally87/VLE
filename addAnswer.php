<?php
include('pageCheck.php');
?>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="vle"; // Database name 
$tbl_name="forumReplies"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(aId) AS MaxaId FROM $tbl_name WHERE questionId='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$MaxId = $rows['MaxaId']+1;
}
else {
$MaxId = 1;
}

// get values that sent from form 
$aName=$_POST['aName'];
$aEmail=$_POST['aEmail'];
$aAnswer=$_POST['aAnswer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(questionId, aId, aName, aAnswer, aDatetime)VALUES('$id', '$MaxId', '$user', '$aAnswer', '$datetime')";
$result2=mysql_query($sql2);

if($result2){
echo "Successful<BR>";
echo "<a href='viewTopic.php?id=".$id."'>View your answer</a>";

// If added new answer, add value +1 in reply column 
$tbl_name2="forumTopic";
$sql3="UPDATE $tbl_name2 SET reply='$MaxId' WHERE id='$id'";
$result3=mysql_query($sql3);

}
else {
echo "ERROR";
}

mysql_close();
?>