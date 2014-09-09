<?php
require_once('Connections/localhost.php');

include('pageCheck.php');
?>
<h1 class="headText" >Course Content</h1>
<?php

$list = "SELECT * FROM files";
$return = mysql_query($list);



?>

<table class="fileTable">
 
  <tr>
    <td>File</td>
    <td>Uploaded By</td>
  </tr>
  <?php
  while($file = mysql_fetch_array($return)){
	  $hoursAndMinutes = date('g:ia', $file['time']);
	echo'<tr>';
	echo'<td><a href ="'.$file['fileLocation'].'">'.$file['title'].'</a></td>';
	echo'<td><p>'.$file['user'].'</p></td>';
	echo'</tr>';
	
}

  ?>
  
  
</table>