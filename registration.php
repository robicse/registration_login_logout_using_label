<?
	error_reporting(0);
	$db = mysqli_connect("localhost","root","","login");

	if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		 
		$username = mysqli_real_escape_string($db, $username);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		$password = md5($password);
		
		$sql = "SELECT email FROM users WHERE email='$email'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		 
		if(mysqli_num_rows($result) == 1)
		{
			echo "Sorry...This email already exist..";
		}
		else
		{
			//Code goes here.
			$query = mysqli_query($db, "INSERT INTO users (username, email, password)VALUES ('$username', '$email', '$password')");
	 
			if($query)
			{
				$error = "Thank You! you are now registered.";
			}
		}

	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	 
	<body>
		<a href="index.php"><input type="button" value="Back"></a>
		<div class="loginBox">
			<div class="error"><?php echo $error;?></div>
			<form method="post" action="">
				<h3>Registration Form</h3>			
				<br>
				<form method="post" action="">
					<label>Username:</label><br>
					<input type="text" name="username" placeholder="username" /><br><br>
					<label>Email:</label><br>
					<input type="text" name="email" placeholder="email" /><br><br>
					<label>Password:</label><br>
					<input type="password" name="password" placeholder="password" />  <br><br>
					<input type="submit" name="submit" value="Submit" /> 
				</form>
			</form>
		</div>
	</body>
</html>