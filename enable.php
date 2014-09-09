<?php require_once('Connections/localhost.php'); ?>

<?php

if(isset($_POST['submit'])){

foreach($_POST['enable'] as $enable) {
    $query = mysql_query('UPDATE student SET enable = 1 WHERE id = "'.$enable.'"');
}

	
	
}
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['1'])) {
  $colname_Recordset1 = $_GET['1'];
}
mysql_select_db($database_localhost, $localhost);
$query_Recordset1 = sprintf("SELECT * FROM student WHERE enable = 0", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $localhost) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$sql="SELECT * FROM student";
?>

<p class="headText">Enable Student</p>

<p>Click the check box for each of the students you would like to enble and click the submit button</p>
<form id="submit" action="" method="post">
<table class="fileTable" border="1">
  <tr>
    <th scope="col">Username</th>
    <th scope="col">First Name</th>
    <th scope="col">Surname</th>
    <th scope="col">Email Address</th>
    <th scope="col">Enabled</th>
  </tr>
  <?php do { ?>

  <tr>
  	
    <td><?php echo $row_Recordset1['username']; ?></td>
    <td><?php echo $row_Recordset1['fName']; ?></td>
    <td><?php echo $row_Recordset1['sName']; ?></td>
    <td><?php echo $row_Recordset1['email']; ?></td>

    <td>
    <input type="checkbox" name="enable[]" value="<?php echo $row_Recordset1['id'] ?>"/>
    </td>
  

  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
     <input class="submit" type="submit" value="Submit" name="submit">
    </form>
    </tr>
</table>
 </form>


<?php

mysql_close();


mysql_free_result($Recordset1);
?>
