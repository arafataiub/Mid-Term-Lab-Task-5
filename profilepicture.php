<?php

if(isset($_REQUEST['submit']))
{
	
	$file= $_FILES['file']['name'];
	$fileUploadPath="upload/".$file;
	
	if(move_uploaded_file($_FILES['file']['tmp_name'],$fileUploadPath))
	{
		echo "photo uploaded";
	}
	else
	{
		echo "Upload error";
	}
	
	
}

?>





<html>

<head>

<title>Profile Picture</title>

</head>

<body>

<form action="profilepicture.php" method="post" enctype="multipart/form-data">

	<fieldset>
	
		<legend>Profile Picture</legend>
		
		<input type="file" name="file"><br>
		<hr>
	
	
	
	<input type="submit" name="submit" value="submit"><br>
	
	
	</fieldset>

</form>


</body>


</html>