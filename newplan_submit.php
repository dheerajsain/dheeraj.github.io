<?php
require "connection.php";
$budget=$_POST["initial_budget"];
$people_no=$_POST["people_no"];
if($budget<=0)
{
echo "<script>alert('please enter sufficient Budget');</script>";
echo "<script>location.href='newplan.php';</script>";
}
if($people_no<=0)
{
echo "<script>alert('please enter valid No. of people');</script>";
echo "<script>location.href='newplan.php';</script>";
}
else
{
$_SESSION["initial_budget"]=$budget;
$_SESSION["people_no"]=$people_no;
echo "<script>location.href='plan_detail.php'</script>";
}
?>
