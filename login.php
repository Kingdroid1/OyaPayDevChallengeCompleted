<?php
	session_start();

	if (isset($_SESSION['userSession'])!="") {
		header("Location: dashboard.php");
		exit();
	}

	if (isset($_POST['btn-login'])) {		
		require_once 'include/dbconnect.php';
		
		// assign values to variables
		$fname = trim(strtolower(mysqli_real_escape_string($conn, $_POST['fullname'])));
		$pass = mysqli_real_escape_string($conn, $_POST['password']);

		//check if merchant is registered
		$getMerchant = "SELECT fullname, password FROM merchant WHERE fullname='$fname'";
		$result = mysqli_query($conn, $getMerchant);
		
		while($resultCount = mysqli_fetch_array($result)){

			if (password_verify($pass, $resultCount['password']) && $resultCount > 0) {
				$_SESSION['userSession'] = $resultCount['fullname'];
				header("Location: dashboard.php");
			}
		} 
		
		mysqli_close($conn);
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
				<!-- Login form for merchants -->
				<form class="form-signin" method="post" id="login-form">
					<h2 class="form-signin-heading">Sign In</h2>
					<hr>

					<?php
					if(isset($msg)){
						echo $msg;
					}
					?>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Full Name" name="fullname" required/>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required />
					</div>

					<hr>
					<div class="form-group">
						<button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
							Sign In
						</button> 

						<a href="register.php" class="btn btn-default pull-right">Sign up here</a>

					</div>
				</form>
			</div>
			<footer>Created by King Nicholas</footer>
		</div>
	</body>
</html>