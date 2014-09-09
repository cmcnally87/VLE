<?php
require_once('Connections/localhost.php');
include('pageCheck.php');

mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database.");	
$result2=mysql_query("SELECT * FROM admin WHERE username='$user'");
$rowCheck2 = mysql_num_rows($result2);

if($rowCheck2 == 0){

header('location:dashboard.php');

}?>


<script src="js/adminJs.js" type="text/javascript"></script>
<div id="adminNav">
<ol id="addNav">
<li><button class="adminButton"  id="back" href="back">Back</button></li>
<li><input class="adminButton"  type="button" id="addAdmin" value="Add Admin"/></li>
<li><input class="adminButton"  type="button" id="list" value="List Student"/></li>
<li><input class="adminButton"  type="button" id="enable" value="Enable Student"/></li>
<li><input class="adminButton"  type="button" id="addFiles" value="Add Content"/></li>
</ol>
<div id="adminPageContent">
</div>




</div>
