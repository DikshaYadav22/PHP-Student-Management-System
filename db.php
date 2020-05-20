<?php 

$connection = mysqli_connect('localhost', 'root', 'password', 'student_system');
if(!$connection){
    die("Not connected". mysqli_error($connection));
}
else{
    echo "successfully connected";
}