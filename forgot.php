<?php require_once('Connections/localhost.php');?>



<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>eVLE - Forgot Password</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<img src="images/headerDash.png" width="1000" height="100" alt="header" />
<p class="headText">Password Reset</p>
<div class="mainLogin">
<?php

  
 if (isset($_POST['reset'])) {
   
		if (empty($_POST['email'])) { 
		echo "<h2 class='output'>You did not enter an email address</h2>"; 
		} 
		else{ 
		
		$email = $_POST['email'];   
		
		mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database."); 
		
		$result1=mysql_query("SELECT * FROM student WHERE email='$email'"); 
		$result2=mysql_query("SELECT * FROM admin WHERE email='$email'");
		
		$rowCheck1 = mysql_num_rows($result1);
		$rowCheck2 = mysql_num_rows($result2); 
		if(($rowCheck1 > 0) || ($rowCheck2 > 0)){ 
		
		$genPass = rand(0,9999);
		
		$newPass = md5($genPass);
		mysql_query("UPDATE admin SET password = '$newPass' WHERE email='$email'");
        mysql_query("UPDATE student SET password = '$newPass' WHERE email='$email'");
		
		
		

			
		$message = "Your New Password is:  $genPass";
		
		mail($email, 'New Password', $message);			
		  } 
		
		}
 }



?>



<form action="" method="post">
<label>Please enter your email address:</label><br/>
<input type="text" name="email" size="45"><br/>
<input align="middle" type="submit" value="Reset" class="submit" name="reset">
</form>


</div>

<a class="adminButton" href="index.php">Return to Homepage</a>



</div>






</body>
</html>