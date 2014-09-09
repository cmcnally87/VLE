<?php require_once('Connections/localhost.php'); ?>
<?php
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

mysql_select_db($database_localhost, $localhost);
$query_Recordset1 = "SELECT username, password, fName, sName, email, enable FROM student";
$Recordset1 = mysql_query($query_Recordset1, $localhost) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<p class="headText">List Students</p> 

<table class="fileTable">
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
    <td><?php if($row_Recordset1['enable'] == 0){
				echo"no";	};
				 if($row_Recordset1['enable'] == 1){
				echo"Yes";	};
				?></td>
  </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>




<?php
mysql_free_result($Recordset1);
?>
