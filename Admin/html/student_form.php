<?php
include "header.php";
require "../../db.php";
$sid = $_GET['sid'];
$query = "SELECT * FROM student WHERE student_id = '$sid' "; 
$run = mysqli_query($connection, $query);
$result = mysqli_fetch_assoc($run);
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Details</title>
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="updateData.php" METHOD="POST" enctype="multipart/form-data">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Roll Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input name="student_roll" class="form-control"  value="<?php echo $result['student_roll'];?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input name="student_name" class="form-control"  value="<?php echo $result['student_name']; ?>" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                               <input name="student_city" class="form-control"  value="<?php echo $result['student_city']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Parent-Contact Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                               <input  name="student_parentContact" class="form-control"  value="<?php echo $result['student_parentContact']; ?>" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Standard</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                    <select class="selectpicker form-control" >
                                      <option name="student_standard" value="<?php echo $result['student_standard']; ?>"> <?php echo $result['student_standard']; ?></option>
                                    </select>
                               </div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                               <input name="student_image" placeholder="Enter image" class="form-control" required="true" value="" type="file"></div>
                            </div>
                         </div>
                         
                         
                         <div class="form-group text-center">
                         <input type="hidden" name="sid" value="<?php echo $result['student_id']; ?>" />
                         <button type="submit" class="btn btn-warning " name="add">Submit</button>
                         </div>
                      </fieldset>
                   </form>
                </td>
               
             </tr>
          </tbody>
       </table>
    </div>
   
    </body>
    </html>