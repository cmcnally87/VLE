<?php

function login(){	
	session_start();	
	if(!isset($_SESSION['username'])){		
	session_destroy();
	header ("location:index.php");	
	}	
	$user =  ($_SESSION['username']);	
	return $user;	
}

function adminControls(){
	
	
mysql_select_db($database_localhost,$localhost) or die ("Couldn't select the database.");	
$result2=mysql_query("SELECT * FROM admin WHERE username='$user'");
$rowCheck2 = mysql_num_rows($result2);

if($rowCheck2 > 0){

include('adminButton.php');
	
}
	
}
?>

