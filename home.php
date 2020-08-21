<?php
require "connection.php";
include 'header.php';
$email=$_SESSION["email"];
$select_query="select initial_budget,people_no,from_date,to_date from plan_detail where email='$email'";
$select_query_result=mysqli_query($con,$select_query);
if(!$select_query_result)
mysqli_error($con);
$total_fetched_rows=mysqli_num_rows($select_query_result);
if($total_fetched_rows==0)
{

?>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body
{
background-color:lightgray;
}
.c1
{
position:relative;
top:100px;
}
#h4
{
position:relative;
top:90px;
}
#d1
{
position:relative;
top:110px;
left:300px;
width:180px;
height:100px;
background-color:white;
}
</style>
</head>
<body>
<div class="container c1">
<h4 id="h4">you don't have any active plans</h4>
<div id="d1"><h5 style="position:relative;top:40px;left:15px;"><a href="newplan.php"><span class="glyphicon glyphicon-plus-sign"></span> Create a New plan</a></h5></div>
</div>
</body>
</html>
<?php
}
if($total_fetched_rows>0)
{
?>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.c1
{
position:relative;
top:100px;
}
#p1
{
position:relative;
top:300px;
float:right;
font-size:40px;
}
</style>
</head>
<body style="background-color:lightgray;">
<div class="container c1">
<div class="row">
<?php
while($row=mysqli_fetch_array($select_query_result))
{
$budget=$row["initial_budget"];
$people_no=$row["people_no"];
$from_date=$row["from_date"];
$to_date=$row["to_date"];
$_SESSION["from_date"]=$from_date;
$_SESSION["to_date"]=$to_date;
?>
<div class="col-xs-3 col-xs-offset-1">
<div class="panel panel-success">
<div class="panel-heading">
<span style="position:relative;left:60px;">My First plan</span><span class="glyphicon glyphicon-user" style="float:right"> <span style="font-size:20px;"><?php echo $people_no;?></span></span></div>
<div class="panel-body">
<div class="row">
<b><span style="position:relative;left:25px;">Budget</sapn></b><span style="float:right;position:relative;right:25px;"><b><?php echo $budget;?></b></span></div>
<div class="row">
<b><span style="position:relative;left:25px;">Date</sapn></b><span style="float:right;position:relative;right:25px;"><b><?php echo $from_date;?>- <?php echo $to_date;?></b></span></div>
<a href="view.php" class="btn btn-block" style="border:1px solid green" type="submit">view plan</a>
</div>
</div>
</div>
<?php
}
?>
</div>
<?php
}
?>
<div id="p1">
<a href="newplan.php"><span class="glyphicon glyphicon-plus-sign"></span></a>
</div>
</div>
</body>
</html>





