<?php
	error_reporting();
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Login Form with Session</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	 
	<body>
		<!--<h1>PHP Login Form with Session</h1>-->
		<div class="loginBox">
			<h3>Login Form</h3>
			<br>
			<div class="error"><?php echo $error;?></div>
			<form method="post" action="">
				<label>Username:</label><br>
				<input type="text" name="username" placeholder="username" /><br><br>
				<label>Password:</label><br>
				<input type="password" name="password" placeholder="password" />  <br><br>
				<input type="submit" name="submit" value="Login" /> 
			</form>
			<p>Are you registered? If not, <a href="registration.php">Registration</a></p>
		</div>
	</body>
</html>