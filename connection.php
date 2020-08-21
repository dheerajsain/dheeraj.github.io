<?php
$con=mysqli_connect("localhost:3308","root","","project");
if(!$con)
echo"Error:".mysqli_error($con);
session_start();
?>