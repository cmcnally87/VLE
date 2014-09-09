<script src="js/jquery-1.7.1.js" type="text/javascript"></script>
<script src="js/adminJs.js" type="text/javascript"></script>

<?php
include('pageCheck.php');


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="vle"; // Database name 
$tbl_name="forumTopic"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending 
$result=mysql_query($sql);
?>
<h1 class="headText">Forum</h1>
<p>Click on topic name to view</p>
<table class="fileTable" id="forumTable" width="100%">
<tr>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ // Start looping table row 

?>

<tr>
<td bgcolor="#FFFFFF"><a class="topic" data-id="<? echo $rows['id']; ?>" id="topic<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><? echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><? echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><? echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysql_close();
require_once('forumJs.php');
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><button id="create" href="createTopic.php"><strong>Create New Topic</strong> </button></td>
</tr>
</table>