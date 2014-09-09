<?php
require_once('Connections/localhost.php');
include('pageCheck.php');
include('adminCheck.php');

?>
<script src="js/uploadJs.js" type="text/javascript"></script>
<p class="headText">Add Course Content</p>
<div id="upload">
<form enctype="multipart/form-data" action="upload.php" name="upload" id="uploadBox" method="post">Choose file to upload:<br/>
<label class="error" for="name" id="uploadError">Please select a file.</label>
<input type="file" name="uploadedFile" id="uploadedFile"/><br/>
<label>Title of File:</label>
<input type="text" name="title" id="title"/><br/>
<input type="submit" value="Upload File"/> 
</form>
</div>