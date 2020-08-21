<?php
require "connection.php";
include 'header.php';
$budget=$_SESSION["initial_budget"];
$people_no=$_SESSION["people_no"];
$title=$_SESSION["title"];
$email=$_SESSION["email"];
$select_query="select Ex_title,date,amount_spent,person_id from expense_info where email='$email'AND title='$title'";
$select_query_result=mysqli_query($con,$select_query);
if(!$select_query_result)
echo mysqli_error($con);
$total_fetched_rows=mysqli_num_rows($select_query_result);
?>
<html>
<head>
<title>view plan page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<stlye>
.c1
{
position:relative;
top:200px;
}
</style>
</head>
<body>
<div class="container c1">
<div class="row">
<div class="col-xs-12">
</br></br>
</div>
<div class="col-xs-6">
<div class="panel panel-info">
<div class="panel-heading"><span style="position:relative;left:140px;font-size:20px;"><?php echo $_SESSION["title"];?></span><span style="float:right;font-size:20px;"><?php echo $_SESSION["people_no"];?></span><span style="float:right;font-size:20px;" class="glyphicon glyphicon-user"></span></div>
<div class="panel-body">
<div class="row"><span style="position:relative;left:30px;"><b>Budget</b></span><span style="float:right;position:relative;right:23px;"><b><?php echo"₹".$_SESSION["initial_budget"];?></b></span>
</div>
<div class="row"><span style="position:relative;left:30px;"><b>Date</b></span><span style="float:right;position:relative;right:23px;"><b><?php echo $_SESSION["from_date"];?>to<?php echo $_SESSION["to_date"];?></b></span>
</div>
<?php
if($total_fetched_rows==0)
{
if($_SESSION["initial_budget"]<0)
{
?>
<style>
#sp1{color:red;}
</style>
<?php
}
else if($_SESSION["initial_budget"]==0)
{
?>
<style>
#sp1{color:black;}
</style>
<?php
}
else
{
?>
<style>
#sp1{color:green;}
</style>
<?php
}
?>
<div class="row"><span style="position:relative;left:30px;"><b>Remaning Budget</b></span><span style="float:right;position:relative;right:23px;" id="sp1"><b><?php echo"₹".$_SESSION["initial_budget"];?></b></span>
</div>
<?php
}
else
{
if($_SESSION["remaning_budget"]<0)
{
?>
<style>
#sp1
{
color:red;
}
</style>
<?php 
}
else if($_SESSSION["remaning_budget"]==0)
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
else
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
?>
<div class="row"><span style="position:relative;left:30px;"><b>Remaning Budget</b></span><span style="float:right;position:relative;right:23px;" id="sp1"><b><?php echo"₹".$_SESSION["remainig_budget"];?></b></span></div>
<?php
}
?>
</div>
</div>    
</div>
<div class="col-xs-2 col-xs-offset-2">
<a href="expense_distribution.php" class="btn btn-default" style="border:1px solid green;position:relative;top:50px;left:40px;">Expense distribution</a>
</div>
</div>
<div class="row">
<div class="col-xs-4" style="float:right;">
<div class="panel panel-info">
<div class="panel-heading"><span style="position:relative;left:100px;font-size;">Add New Expense</span></div>
<div class="panel-body">
<form action="view_submit.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<lable for="title"><b>Title</b></lable>
<input class="form-control" id="title" name="title1" required placeholder="Expense Name" type="text">
</div>
<div class="form-group">
<lable for="date"><b>Date</b></lable>
<input class="form-control" id="date" name="date" required placeholder="dd/09/2019" type="date">
</div>
<div class="form-group">
<lable for="amount"><b>Amount Spent</b></lable>
<input class="form-control" id="amount" name="amount" required placeholder="Amount Spent" type="number">
</div>

<select class="btn btn-block btn-default" name="select" required>
<option value="" disabled selected hidden>choose</option>
<?php
for($x=1;$x<=$people_no;$x++)
{
?>
<option value="<?php echo $x;?>" required><?php echo $x;?></option>
<?php
}
?>
</select>
<div class="form-group">
<label for="fileSelect">Upload bill</label>
<input type="file" cclass="sample_class" name="uploadedimage">
</div>
<button type="submit" class="btn btn-default btn-block" name="Add" style="border:1px solid green;position:relative;" value="submit">Add</button>
</form>
</div>
</div>
</div>
<?php
if($total_fetched_rows>0)
{
while($row=mysqli_fetch_array($select_query_result))
{
?>
<div class="col-xs-3">
<div class="panel panel-primary">
<div class="panel-heading"><span style="position:relative;left:70px;font-size:20px;"><?php echo $row["Ex_title"];?></span></div>
<div class="panel-body">
<div class="row"><span style="position:relative;left:20px;"><b>Amount</b></span>
<span style="float:right;position:relative;right:23px;"><b><?php echo "₹".$row["amount_spent"];?></b></span></div>
<div class="row"><span style="position:relative;left:20px;"><b>Paid by</b></span>
<span style="float:right;position:relative;right:23px;"><b><?php echo $row["person_id"];?></b></span></div>
<div class="row"><span style="position:relative;left:20px;"><b>Paid on</b></span>
<span style="float:right;position:relative;right:23px;"><b><?php echo $row["date"];?></b></span></div>
</div>
</div>
</div>
<?php
}
}
?>
</div>
</div>
</body>
</html>