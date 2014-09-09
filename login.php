<?php require_once('Connections/localhost.php');?>

<!DOCTYPE HTML>
<head>
<script src="js/jquery-1.7.1.js" language="javascript" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>VLE - Welcome</title>


<link href="css/main.css" rel="stylesheet" type="text/css">
</head>



<body>


<div id="container">

	<div id="mainLogin">
	  <form method="POST" action="login.php"> 
	    Username: <input type="text" name="username" size="15"> 
Password: <input type="password" name="password" size="15"> 
<input type="submit" value="Log In" name="login"> 
</form>
   <?php
  
   
if (empty($_POST['username']) || empty($_POST['password'])) { 
echo 'Username or password is empty'; 
} 
else{ 
$user = $_POST['username']; 
$pass = md5($_POST['password']);  

mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database."); 

$result1=mysql_query("SELECT * FROM student WHERE username='$user' AND password='$pass'"); 
$result2=mysql_query("SELECT * FROM admin WHERE username='$user' AND password='$pass'");

$rowCheck1 = mysql_num_rows($result1);
$rowCheck2 = mysql_num_rows($result2); 
if(($rowCheck1 > 0) || ($rowCheck2 > 0)){ 



  session_start(); 
  $_SESSION['username'] = $_POST['username'];

  header( "Location:checker.php" ); 

  } 
else{
echo 'Username or password is incorrect';	
}
  } 
  
  
	?>      
  </div>

</div>
</body>
</html