<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
   <div class="fadeIn first">
      <img src="images/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      Username:<input type="text" name="admin_name" class="fadeIn second" placeholder="Enter your login details">
      Password:<input type="text" name="admin_password" class="fadeIn third" placeholder="Enter your password">
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

<?php 
require "db.php";
if(isset($_POST['login'])){
    $username = $_POST['admin_name'];
    $password = $_POST['admin_password'];
    $query = "SELECT *
    FROM admin 
    WHERE admin_name='$username' AND admin_password='$password'";
    $queryCheck = mysqli_query($query);
    $row = mysqli_num_rows($query);
    print_r($row);
    if($row < 1 ){
        echo "Username and password doesn't match";
        // header('location:login.php');
    }
    else
    {
        $result = mysqli_fetch_assoc($query);
        $id = $result['id'];
        echo "id is " .$id;
    }
}
?>