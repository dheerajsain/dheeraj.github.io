<?php
require "connection.php";
$title=$_POST["title"];
$_SESSION["title"]=$title;
$from_date=$_POST["from_date"];
$to_date=$_POST["to_date"];
$_SESSION["from_date"]=$from_date;
$_SESSION["to_date"]=$to_date;
$email=$_SESSION["email"];
$budget=$_SESSION["initial_budget"];
$people_no=$_SESSION["people_no"];
if($budget<=0)
{
echo "<script>alert('enter sufficient Budget');</script>";
echo "<script>location.href='plan_detail.php';</script>";
}
if($people_no<=0)
{
echo "<script>alert('enter correct people Number');</script>";
echo "<script>location.href='plan_detail.php';</script>";
}
else
{
$insert_query="insert into plan_detail(email,initial_budget,people_no,from_date,to_date,title) values('$email','$budget','$people_no','$from_date','$to_date','$title')";
$insert_query_result=mysqli_query($con,$insert_query);
if($insert_query_result)
echo"<script>location.href='home.php';</script>";
else
echo "errormy:<br>".mysqli_error($con);
}
?>