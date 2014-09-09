


<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>



<body>
<?php
mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database."); 

$result=mysql_query("SELECT * FROM admin");
echo mysql_fetch_array($result);
?>


</body>
</html>