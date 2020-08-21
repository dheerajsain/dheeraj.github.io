<?php
require "connection.php";
include 'header.php';
$title=$_SESSION["title"];
$email=$_SESSION["email"];
$person_id=$_SESSION["person_id"];
$_SESSION["individual_share"]=$_SESSION["total_spent"]/$_SESSION["people_no"];
echo $_SESSION["individual_share"];
for($x=1;$x<=$_SESSION["people_no"];$x++)
{
$sum =0;
$select_query="select amount_spent from expense_info where email='$email'AND title='$title' AND $person_id='<?php echo $x;?>'";
$select_query_result=mysqli_query($con,$select_query);
while($row=mysqli_fetch_array($select_query_result))
$sum=$sum+$row["amount_spent"];
$_SESSION["person<?php echo $x;?>_amount"]=$sum;
echo $_SESSION["person<?php echo $x;?>_amount"];
}
?>
<html>
<head>
<title>Expense_distribution page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.c1
{
position:relative;
top:100px;
}
</style>
</head>
<body>
<div class="contianer c1">
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
<div class="panel panel-info">
<div class="panel-heading"><b><span style="position:relative;left:140px;font-size:20px;">EXpense Distribution</span></b></div>
<div class="panel-body">
<div class="row"><b><span style="position:relative;left:30px;">Budget</span></b><span style="float:right;position:relative;right:23px;"><?php echo"₹".$_SESSION["initial_budget"];?></span></b></div>
<?php
for($x=1;$x<=$_SESSION["people_no"];$x++)
{
?>
<div class="row"><b><span style="position:relative;left:30px;">person <?php echo $x;?></span></b><span style="float:right;position:relative;right:23px;"><?php echo"₹".$_SESSION["person<?php echo $x;?>_amount"];?></span></b></div>
<?php
}
?>
<div class="row"><b><span style="position:relative;left:30px;">Total amount Spent </span></b><span style="float:right;position:relative;right:23px;"><?php echo"₹".$_SESSION["total_spent"];?></span></b></div>
<?php
if($_SESSION["remaning_budget"]<0)
{
?>
<style>
#sp1
{
color:red;
}
<?php
}
else if($_SESSION["remaning_budget"]>0)
{
?>
<style>
#sp1
{
color:green;
}
</style>
<?php
}
else
{
?>
<style>
#sp1
{
color:black;
}
</style>
<?php
}
?>
<div class="row"><b><span style="position:relative;left:30px;">Remanig amount</span></b><span style="float:right;position:relative;right:23px;" id="sp1"><?php echo"₹".$_SESSION["remaning_budget"];?></span></b></div>
<div class="row"><b><span style="position:relative;left:30px;">Individual share</span></b><span style="float:right;position:relative;right:23px;"><?php echo"₹".$_SESSION["individual_share"];?></span></b></div>
<?php
for($x=1;$x<=$_SESSION["people_no"];$x++)
{
$_SESSION["individual<?php echo $x;?>_person"]=$_SESSION["person<?php echo $x;?>_amount"]-$_SESSION["individual_share"];
if($_SESSION["individual<?php echo $x;?>_person"]==-50)
{
echo "<script>alert('Owes ₹50')</script>";
}
if($_SESSION["individual<?php echo $x;?>_person"]==100)
{
echo "<script>alert('Gets back ₹100')</script>";
}
if($_SESSION["individual<?php echo $x;?>_person"]==0)
{
echo "<script>alert('All Settled up')</script>";
}
?>
<div class="row"><b><span style="position:relative;left:30px;">person <?php echo $x;?></span></b><span style="float:right;position:relative;right:23px;"><?php echo"₹". $_SESSION["individual<?php echo $x;?>_person"];?></span></b></div>
<?php
}
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>