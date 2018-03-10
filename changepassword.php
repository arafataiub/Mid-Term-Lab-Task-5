<?php

if(isset($_REQUEST['submit']))
{
	
	$cpass=$_REQUEST['cpass'];
	$npass=$_REQUEST['npass'];
	$rpass=$_REQUEST['rpass'];
	
	if($cpass==$npass)
	{
		echo "new password cant be the current one";
	}
	else if($npass!=$rpass)
	{
		echo "retype the password correctly";
	}
	else
	{
		echo "Old Password: ".$cpass."<br>";
		echo "New Password: ".$npass."<br>";
	
	}
	
	
	
	
}







?>





<html>

<head>

<title>Change Password</title>

</head>

<body>

<form action="changepassword.php" method="post">

	<fieldset>
	
		<legend>Change Password</legend>
		
		<table>
		
			<tr>
		
				<td>Current Password: </td>
				<td><input type=text name="cpass" value="" placeholder="Current Password"></td>
				
				
			
			</tr>
			
			<tr>
			
				<td>New Password: </td>
				<td><input type=password name="npass" value="" placeholder="New Password"></td>
			
			
			</tr>
			
			<tr>
			
				<td>Retype Password: </td>
				<td><input type=password name="rpass" value="" placeholder="Retype Password"></td>
			
			
			</tr>
			
		
		</table>
		<hr>
	
	
	
	<input type="submit" name="submit" value="submit"><br>
	
	
	</fieldset>

</form>


</body>


</html>