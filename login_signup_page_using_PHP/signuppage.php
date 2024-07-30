<!DOCTYPE html>
<html>
<?php

include "connection.php";

if(isset($_POST['save']))
{
	$name=$_POST['user_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['Password'];
	$sql="insert into user_reg(name,email, phone, password, status)
	values('$name', '$email', '$phone', '$password', '1')";
	if ($con->query($sql))
		{

			echo "You Have Registered";
		}
		else{
			echo "Contact To Admin";

	}
}

?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>From login and register</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<div class="signup">
		<h1>Sign up</h1>
		<h4>It's free and only takes a minute</h4>
		<form method="post">
			<label>Enter Username</label>
			<input type="text" name="user_name" placeholder="Enter Name">
			<label>Enter Email</label>
			<input type="text" name="email" placeholder="Enter Email">
			<label>Enter Phone No.</label>
			<input type="text" name="phone" placeholder="Enter Phone no.">
			<label>Enter Password</label>
			<input type="text" name="Password" placeholder="Enter Password">
			<label>Enter Confirm Password</label>
			<input type="text" name="Password" placeholder="Enter Confirm password"><br>
			<button name="save">Save</button><br><br>
			<a href="Login.php">Back To Login</a>
		</form>

</body>
</html>