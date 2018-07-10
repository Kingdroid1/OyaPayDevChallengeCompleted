<?php
	session_start();

	//If logout is not set, check if user is logged in
	if (!isset($_SESSION['userSession'])) {
		header("Location: index.php");
	} else if (isset($_SESSION['userSession'])!="") {
		header("Location: dashboard.php");
	}

	//If logout is set, log the user out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userSession']);
		header("Location: login.php");
	}

?>
