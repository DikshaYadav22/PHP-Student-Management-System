<?php 
require"../../db.php";

          if(isset($_POST['add'])){
               $rollno = $_POST['student_roll'];  
               $name = $_POST['student_name'];  
               $city = $_POST['student_city'];  
               $contact = $_POST['student_parentContact'];  
               $standard = $_POST['student_standard'];  
               $image = $_FILES['student_image']['name'];  
               $tempimage = $_FILES['student_image']['tmp_name'];
               move_uploaded_file($tempimage, "upload/$image");
             
               $query = "INSERT INTO student(student_roll, student_name, student_city, student_parentContact, student_standard, student_image) VALUES('$rollno', '$name', '$city', '$contact', '$standard','$image')";
               if ($connection->query($query) === TRUE) {
                echo "New record created successfully";
                  header('Location:student_update.php');
            } else {
                echo "Error: " . $query. "<br>" . $connection->error;
            }
            
          }
    ?>

    