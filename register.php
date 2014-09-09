<?php require_once('Connections/localhost.php'); ?>
<?php
$message = '';
$error_stat = 0;


if (isset($_POST['submit'])) { 
   
 	$user = $_POST['username'];
	$pass1 = md5($_POST['password1']);
	$pass2 = md5($_POST['password2']);
	$fName = $_POST['firstName'];
    $surname = $_POST['surname'];
	$email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
	
	mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database.");
	
	$check1=mysql_query("SELECT * FROM student WHERE username='$user'"); 
	$check2=mysql_query("SELECT * FROM admin WHERE username='$user'");
	
	$rowCheck1 = mysql_num_rows($check1);
	$rowCheck2 = mysql_num_rows($check2);

   //if there are any errors, I set $error_stat to 1 and put the errors in the $message: 
   if (empty($user)) { 
      $error_stat = 1; 
      $message = 'Please enter a username.'; 
   } 
   
  if(($rowCheck1 > 0) || ($rowCheck2 > 0)){
	  $error_stat = 1; 
      $message = '<p style="color:red;font-size:16px">Username has already been taken</p>';
	  
  }
  
  if($pass1 != $pass2){
	  $error_stat = 1; 
      $message = 'Password did not match';
  }
  
  if($email1 != $email2){
	  $error_stat = 1; 
      $message = 'Email did not match';
  }
  

   //then, only put the info in the db if $error_stat is still 0 
   if ($error_stat == 0) { 
     
	$insert =mysql_query("INSERT INTO student (username, password, fName, sName, email) VALUES ('$user', '$pass1', '$fName', '$surname', '$email1')") or die ("Data not entered");
	
	session_start(); 
		  $_SESSION['username'] = $_POST['username'];
		
		  header( "Location:checker.php" );  
	  
   } 
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>VLE - Register</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="container">
<img src="images/headerDash.png" width="1000" height="80" alt="header" />
<div class="mainLogin">

<p class="headText">Register</p>


<form action="" method="post" name="register">
  <?php
echo $message;
?>
    <label>Username: </label>
    <input type="text" name="username" maxlength="15" required="required">
  
    <label>Password: </label>
    <input type="password" name="password1" maxlength="15" required="required">
  
    <label>Confirm Password:</label>
    <input type="password" name="password2" maxlength="15" required="required">
  
    <label>First name:</label>
    <input type="text" name="firstName" maxlength="25" required="required">
    
    <label>Surname</label>
    <input type="text" name="surname" maxlength="25" required="required">
    
    <label>E-mail Address:</label>
    <input type="email" name="email1" maxlength="45" required="required">
    
    <label>Confirm E-mail Address:</label>
    <input type="email" name="email2" maxlength="45" required="required">
    
    <input type="submit" name="submit" class="submit">  
</form> 


</div>

<a class="adminButton" href="index.php">Return to Homepage</a>


</div>





</div>
</body>
</html>