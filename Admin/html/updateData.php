<?php 
require"../../db.php";
               $rollno = $_POST['student_roll'];  
               $name = $_POST['student_name'];  
               $city = $_POST['student_city']; 
               $id = $_POST['sid']; 
               $contact = $_POST['student_parentContact'];  
               $standard = $_POST['student_standard'];  
               $image = $_FILES['student_image']['name'];  
               $tempimage = $_FILES['student_image']['tmp_name'];
               move_uploaded_file($tempimage, "upload/$image");
$query = "UPDATE student SET student_roll = '$rollno', student_name = '$name', student_city = '$city', student_parentContact ='$contact', student_standard ='$standard' WHERE student_id = '$id'";
$run = mysqli_query($connection, $query);
print_r($run); die();    
               if($run == true){?>
                   <script> 
                      alert('Successfully updated.');
                      window.open('student_form.php?sid=<?php echo $id; ?>', '_SELF');
                   </script>
                 <?php }else{
                   header('Location:student_update.php');
                  }
                ?>
