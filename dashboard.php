<?php
    session_start();

    if (!isset($_SESSION['userSession'])) {
    	header("Location: dashboard.php");
    }

    if(isset($_POST['add-user'])) {
      require_once 'include/dbconnect.php';

      // Get form data
      $name = mysqli_real_escape_string($conn, $_POST['agentname']);
      $phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);

      $inviteAgent = "INSERT INTO add_agent(name,phonenumber) VALUES('$name','$phone')";
      $result = mysqli_query($conn, $inviteAgent);

      if ($result) {
          echo "<script>alert('Agent was added successfully and agent has been notified via SMS.');</script>";
        } else {
          echo "<script>alert('Please try adding again');</script>";
        }
      }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome, Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
        <link href="assets/css/style.css" rel="stylesheet"  type="text/css">   
    </head>
    <body>
      <!-- Merchant Dashboard -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Merchant Dashboard</a>
          </div>
          <ul class="nav navbar-nav pull-right">
            <li><a href="#"><button id="button" class="btn btn-default" >Add Agent</button></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp; Edit Profile</a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div>
      </nav>

      <div id="container">
        <div class="transactions">
           <h2>Payments and Transaction Records</h2>
           <p>...................</p>
           <p>...................</p>
           <p>...................</p>
           <p>...................</p>
        </div>       
      </div>

      <!--Modal Form section to add agent -->
      <div class="bg-modal">
        <div class="modal-content">
          <div class="close">+</div>
          <img src="assets/img/user.png" alt="user-icon">
          <form action="" method="post">
            <input type="text" name="agentname" placeholder="Name" required="required">
            <input type="text" name="phonenumber" placeholder="Phone Number" required="required">
            <button type="submit" class="btn btn-default" name="add-user" id="btn-add">Add Agent</button>
          </form>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--Modal Form JS Function -->
      <script src="assets/js/modalform.js"></script>
    </body>
</html>