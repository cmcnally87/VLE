<?php require_once('Connections/localhost.php');
   ob_start();
  
	?><!DOCTYPE HTML>
<head>
<script src="js/jquery-1.7.1.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>VLE - Welcome</title>
<link href="css/main.css" rel="stylesheet" type="text/css">







</head>
<body>


<div class="container">
<div id="welcomeHeader">

</div>


<div class="mainLogin">

<?php

  
 if (isset($_POST['login'])) {
   
		if (empty($_POST['username']) || empty($_POST['password'])) { 
		echo "<h2 class='output'>Username or password is empty</h2>"; 
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
		  header("Location:checker.php");		
		  } 
		else{
		echo "<h2 class='output'>Username or password is incorrect</h2>";	
		}
		  } 
 }



?>
<form method="POST" action=""> 
 
    <label>Username: </label>
    <input type="text" name="username" size="30" maxlength="15">
    <label>Password: </label>
    <input type="password" name="password" size="30" maxlength="15">
    <input type="submit" value="Log In" name="login" class="submit"><br/>    
    <a href="register.php">Sign Up</a>
    <a href="forgot.php">Forgot Password?</a>
  
  </form>

    </div>

</div>
</body>
</html>
<?php ob_end_flush(); ?>