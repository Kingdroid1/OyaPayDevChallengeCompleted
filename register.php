<?php
	session_start();	

	if(isset($_POST['signup'])){
		require_once 'include/dbconnect.php';

		// Get form data
		$fname = trim(strtolower(mysqli_real_escape_string($conn, $_POST['fullname'])));
		$phone = trim(strtolower(mysqli_real_escape_string($conn, $_POST['phonenumber'])));
		$bizname = trim(strtolower(mysqli_real_escape_string($conn, $_POST['businessname'])));
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
		
		//Hashing the Password
		$hashed_password = password_hash($pass, PASSWORD_DEFAULT); 
		
		//Insert user into database
		$insertMerchant = "INSERT INTO merchant(fullname,phonenumber,businessname,password) VALUES('$fname','$phone','$bizname','$hashed_password')";
		$result = mysqli_query($conn, $insertMerchant);

		if ($result) {
			//Success message
			$msg = "<div class='alert alert-success'>
			<p>Successfully registered!</p>
			</div>";
		} else {
			//Error message
			$msg = "<div class='alert alert-danger'>
			<p>Error while registering!</p>
			</div>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>OyaPay Merchant</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/style.css" rel="stylesheet"  type="text/css">
	</head>
	<body>
		<header>
			<img src="assets/img/oyapaylogo.jpg">
		</header>
		<div class="signin-form">
			<h1>OyaPay Merchant</h1>
			<div class="container">
				<!-- Registration form for merchants -->
				<form class="form-signin" method="post" id="register-form">
					<h2 class="form-signin-heading">Register</h2>
					<hr>

					<?php
						if (isset($msg)) {
							echo $msg;
						}
					?>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Full Name" name="fullname" required/>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required/>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Business Name" name="businessname" required/>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required/>
					</div>

					<hr>
					<div class="form-group">
						<button type="submit" class="btn btn-default" name="signup">
							Create Account
						</button> 
						<a href="login.php" class="btn btn-default pull-right">Already registered? Log In Here</a>
					</div> 
				</form>
			</div>			
		</div>
		<footer>Created by King Nicholas</footer>
	</body>
</html>