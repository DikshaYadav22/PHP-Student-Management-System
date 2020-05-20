<?php
require "../../db.php";
include "header.php";
session_start();
if(!$_SESSION['uid']){
      header('location:dashboard.php');
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="add_check.php" METHOD="POST" enctype="multipart/form-data">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Roll Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input name="student_roll" placeholder="Roll Number" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input name="student_name" placeholder="Full Name" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                               <input name="student_city" placeholder="City" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Parent-Contact Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                               <input  name="student_parentContact" placeholder="Parent-Contact Number" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Standard</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="student_standard">
                                     <option>1</option>
                                     <option>2</option>
                                     <option>3</option>
                                     <option>4</option>
                                     <option>5</option>
                                     <option>6</option>
                                     <option>7</option>
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
                         <button type="submit" class="btn btn-warning " name="add">Submit</button>
                         </div>
                      </fieldset>
                   </form>
                </td>
               
             </tr>
          </tbody>
       </table>
    </div>

   