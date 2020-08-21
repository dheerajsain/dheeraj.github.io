<?php
require "connection.php";
$email=$_POST["email"];
$password=$_POST["password"];
$email=mysqli_real_escape_string($con,$email);
$password=md5('$password');
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email))
{
echo "<script>alert('enter valid email');</script>";
echo"<script>location.href='login.php';</script>";
}
$password=$_POST["password"];
if(strlen($password)<6)
{
header('location:header.php?password_error=enter correct password');
}
$select_query="select password from user_info where email='$email'";
$select_query_result=mysqli_query($con,$select_query);
if($select_query_result)
echo"<br>Error:<br>".mysqli_error($con);
$total_fetched_rows=mysqli_num_rows($select_query_result);
if($total_fetched_rows==1)
{
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
echo "<script>location.href='home.php';</script>";
}
else if($total_fetched_rows==0)
{
echo "<h3>There is No user with this email id".$email."and password".$password.".Login the website<a href='signin.php'>click here</a>.</h3>";
}
?>