<?php
session_start();
if(isset($_SESSION['uid'])){
    header('location:Admin/html/dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
   <div class="fadeIn first">
      <img src="images/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="login_validate.php" method="POST">
      Username:<input type="text" name="username" class="fadeIn second" placeholder="Enter your login details">
      Password:<input type="text" name="password" class="fadeIn third" placeholder="Enter your password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>

