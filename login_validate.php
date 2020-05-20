<?php
session_start();
if($_SESSION['uid']){
    header('location:Admin/html/dashboard.php');
}

require "db.php"; 
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * 
              FROM admin
              WHERE username = '$username' AND password = '$password'";
              
     $data = mysqli_query($connection, $query);
     $count = mysqli_num_rows($data);
     
         if($count < 1){?>
         <script>
         alert("User and password doesnot match");
         window.open('login.php','_self');
         </script>
            //  die("Username and password doesn't match" . mysqli_error($connection));
         
          <?php }
      else{
          
          $result = mysqli_fetch_assoc($data);
              $id = $result['id'];
               session_start();
               $_SESSION['uid'] = $id;
              header('Location:Admin/html/dashboard.php');
      }        
}

?>