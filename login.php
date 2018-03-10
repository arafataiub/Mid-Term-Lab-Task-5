<?php

if(isset($_REQUEST['submit']))
{
	
	$name=$_REQUEST['name'];
	$pass=$_REQUEST['pass'];
	if(strlen($name)<2)
	{
		echo "Name should be at least 2 character";
	}
	else if(strlen($pass)<8)
	{
		echo "Password should be at least 8 character";
		
	}
	else if(!preg_match('/^[a-zA-Z0-9]{2,}$/', $name))
	{
		echo "Username can contain alpha numeric characters, period, dash or underscore only";		
    }
	else if(!preg_match('/^[a-zA-Z0-9!@#$%]+$/i',$pass))
	{
		echo "There should be at least one special character in password";
	}
	else
	{
		echo"Submitted <br>";
		echo "Username :".$name."<br>";
		echo "Password :".$pass."<br>";
	}
	
	
	
}







?>





<html>

<head>

<title>Login Page</title>

</head>

<body>

<form action="login.php" method="post">

	<fieldset>
	
		<legend>Login</legend>
		
		<table>
		
			<tr>
		
				<td>User name: </td>
				<td><input type=text name="name" value="" placeholder="Name"></td>
				
				
			
			</tr>
			
			<tr>
			
				<td>Password: </td>
				<td><input type=password name="pass" value="" placeholder="password"></td>
			
			
			</tr>
			
		
		</table>
		<hr>
	<input type=checkbox name="remember_me" value="">Remember Me<br>
	<p></p>
	<input type=submit name="submit" value="submit">
	<a href="" >Forget Password</a>
	
	
	</fieldset>

</form>


</body>


</html>