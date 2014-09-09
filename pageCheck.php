<?php
require_once('Connections/localhost.php');

session_start();	
	if(!isset($_SESSION['username'])){		
	session_destroy();
	header ("location:index.php");	
	}	
	$user =  ($_SESSION['username']);
	?>