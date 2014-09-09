<?php require_once('Connections/localhost.php');
include('pageCheck.php');
include('adminCheck.php');
?>

<?php

function saveFile($user, $file, $title){
	global $_FILES, $_POST, $user, $putFile ;
	
	$insert = "INSERT INTO `vle`.`files` (`id`, `time`, `fileLocation`, `title`, `user`) VALUES (NULL, UNIX_TIMESTAMP(), '".mysql_real_escape_string($putFile)."', '".mysql_real_escape_string($_POST['title'])."', '".$user."')";
	
	mysql_query($insert);
	
}

$putFile = "files/".basename($_FILES['uploadedFile']['name']);

if(move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $putFile)){
	saveFile($user, $putFile, $_POST['title']);
	echo"File has been uploaded, Redirecting to file list now...";
	echo"<meta http-equiv='refresh' content='3;url=dashboard.php'>";
	
	}else{
		
	echo"Unable to upload file, Returning to dashboard...";
	echo"<meta http-equiv='refresh' content='3;url=dashboard.php'>";	
		
	}


 ?>

