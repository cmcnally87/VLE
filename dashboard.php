<?php require_once('Connections/localhost.php'); 
include('pageCheck.php');
?><!DOCTYPE HTML>
<html>
<head>
<link type="text/css" href="css/main.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Dashboard</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.1.js" type="text/javascript"></script>
<script src="js/sendMessageJs.js" type="text/javascript"></script>
<script src="js/chatRefresh.js" type="text/javascript"></script>
<script src="js/functionsJS.js" type="text/javascript"></script>
<script src="js/forum.js" type="text/javascript"></script>
<script src="js/uploadJs.js" type="text/javascript"></script>
</head>
<body>

<div id="container">

<div id="header"><h1>Welcome <?php echo $user; ?></h1></div>
<div id="nav">
<ol>
<li><?php include('adminConCheck.php') ?></li>
<li><form action="logout.php" method="post"><input type="submit" class="logOut" value="Log Out" ></form></li>
</ol>
</div>
<div id="main">

</div>
</div>
<div id="chatWindow"><?php include('chatBox.php') ?></div>
<div class="clear"></div>

</div>

</body>
</html>