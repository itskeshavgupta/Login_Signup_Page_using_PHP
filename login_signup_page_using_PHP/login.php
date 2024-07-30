<!DOCTYPE html>
<html>
<?php
	 include "connection.php";
	if(isset($_POST['login']))
 {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from user_reg where email='$email' or phone='$email' and password='$password'";
    $total=$con->query($sql);
    $result=$total->fetch_assoc();
    if($total->num_rows>0)
    {
        
        echo "Login Successfully";
      
    }
    else
    {
        echo "<script>alert('You Have Enter Wrong Username and password');</script>";
       // echo "You Have Enter Wrong Username and password";
    }
 }
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>From Login and Register</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<center>
	<form method="post">
		<div class="login">
		<h1>Login</h1>
			<label>Email</label>
			<input class="lginp" type="email" name="email" placeholder="Enter Username">
			<label>Password</label>
			<input class="lginp" type="Password" name="password" placeholder="Enter password"> 
			<button name="login">Login </button>
		</form>
		<p>Not have an Account? <a href="signuppage.php">Sign up here</a></p>
	</center>
</body>
</html>