<?php
require "connection.php";
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$email=mysqli_real_escape_string($con,$email);
$password=md5('$password');
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email))
{
header('location:signin.php?email_error=enter correct email');
}
$password=$_POST["password"];
if(strlen($password)<6)
header('location:header.php?password_error=enter correct password');
if(strlen($phone)!=10)
{
echo "<script>
alert('enter valid phnoe Number');</script>";
echo"<script>location.href='signin.php'</script>";
}
$select_query="select password from user_info where email='$email'";
$select_query_result=mysqli_query($con,$select_query);
if($select_query_result)
echo"<br>Error:<br>".mysqli_error($con);
$total_fetched_rows=mysqli_num_rows($select_query_result);
if($total_fetched_rows==0)
{
$insert_query="insert into user_info(name,email,password,phone) values('$name','$email','$password','$phone')";
$insert_query_result=mysqli_query($con,$insert_query);
if($insert_query_result)
{
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
header('location:home.php');
}
}
else
{
echo "<h3>The user have already exist.Login the website<a href='login.php'>click here</a>.</h3>";
}
?>