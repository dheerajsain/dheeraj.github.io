<?php
require "connection.php";
$email=$_SESSION["email"];
$password=$_POST["password"];
$password_new=$_POST["password_new"];
$Password_re=$_POST["password_re"];
$select_query="select password from user_info where email='$email'";
$select_query_result=mysqli_query($con,$select_query);
if(!$select_query_result)
echo "ERROR:<br>".mysqli_error($con);
$row=mysqli_fetch_array($select_query_result);
if($row["password"]==$password)
{
if($password_re==$password_new)
{
$update_query="update user_info set password=$pass_re where email='$email'";
$update_query_result=mysqli_query($con,$update_query);
if(!$update_query_result)
echo "Error:<br>".mysqli_error($con);
else
{
echo "<script>alert('successfull change password')</script>";
echo "<script>location.href='Setting.php'</script>";
}
}
else
{
echo "<script>alert('Enter correct confirm password')</script>";
echo "<script>location.href='Setting.php'</script>";
}
}
else
{
echo "<script>alert('Enter correct password')</script>";
echo "<script>location.href='Setting.php'</script>";
}
?>