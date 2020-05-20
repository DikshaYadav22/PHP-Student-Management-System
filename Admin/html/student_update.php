<?php
include "header.php";
require "../../db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Details Updation</title>
</head>
<body>

<div class="container" style="margin-top:50px;">
<form action="student_update.php" method="POST" >
    <table>
      <tr>
          <td>
          <label for="standard">Standard</label>
          <input type="number" name="student_standard" placeholder="Enter your standard" />
          </td>
              
          <td>
          <label for="name">Name</label>
          <input type="text" name="student_name" placeholder="Enter your name" />
           </td>
           <td>
          <button class="btn btn-primary" name="submit" type="submit">Submit</button>
           </td>
          </tr>

    </table>
    </form>
    
  

<table class="table table-striped">
<tr>
    <th>No.</th>
    <th>Image</th>
    <th>Name</th>
    <th>Roll No.</th>
    <th>Edit</th>
 </tr>
<?php 
if(isset($_POST['submit'])){
       $standard = $_POST['student_standard'];
       $name = $_POST['student_name'];
       $query = "SELECT * FROM student WHERE student_standard = '$standard' AND student_name LIKE '%$name%' ";
       $run = mysqli_query($connection, $query);
       $data = mysqli_num_rows($run);
       if($data < 1){
           echo "Record not found";
           }
           else{
             $count = 0;
             while($result=mysqli_fetch_assoc($run)){
                  $count++ ;
              ?>
           <tr>
           <td><?php echo $count; ?></td>
           <td><img src="upload/<?php echo $result['student_image']; ?>" width='100' height='100' /></td>
           <td><?php echo $result['student_name']; ?></td>
           <td><?php echo $result['student_roll']; ?></td>
           <td><a href="student_form.php?sid=<?php echo $result['student_id']; ?>" class="btn btn-warning"> Edit </a></td>
           </tr>
           </table>
            <?php
             }  
          }      
          }     
?>
</div>

</body>
</html>
