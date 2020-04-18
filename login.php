<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabaq Coffee</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="loginbox">
	<img src="https://scontent.fdac26-1.fna.fbcdn.net/v/t1.0-9/11136639_645863348879680_4941413044529644046_n.jpg?_nc_cat=107&_nc_oc=AQkNcciRkyyW9gI6lmEQx7tk2NACpei-3PYIkIptEFnDMX8m8FMcHcZWTbjXnzVx_5g&_nc_ht=scontent.fdac26-1.fna&oh=5816fa2aca4c49b77f9f83793a0bef96&oe=5E05C99B" class="logo">
	<h1>LOGIN</h1> <br>

	<form action="includes/login.inc.php" method="post">
		<p>Username</p>
	<input type="text" name="uid" placeholder="Enter Username">
	<p>Password</p>
	<input type="Password" name="pwd" placeholder="Enter Password">
	<input type="submit" name="login-submit" value="Login"> <br><br>
	<a href="">Forgot your password?</a><br><br>
	<a href="signup.php">Don't have an account?</a>
	</form>

	
</div>
</body>
</html>

