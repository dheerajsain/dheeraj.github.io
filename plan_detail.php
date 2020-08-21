<?php
require "connection.php";
include 'header.php';
$budget=$_SESSION["initial_budget"];
$people_no=$_SESSION["people_no"];
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body
{
background-color:lightgray;
}
button:hover
{
background-color:blue;
}
.c1
{
position:relative;
top:100px;
}
</style>
</head>
<body>
<div class="container c1">
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
<div class="panel panel-default">
<div class="panel-body">
<form action="plan_detail_validation.php" method="post">
<div class="form-group">
<lable for="title"><b>Title</b></lable>
<input type="text" class="form-control" id="title" placeholder="Enter Title(Ex.Tirp to gova)" name="title" required>
</div>
<div class="row">
<div class="col-xs-6">
<div class="form-group">
<lable for="form_date"><b>Form</b></lable>
<input type="date" class="form-control" name="from_date" id="from_date" required min="2019-04-01" max="2019-04-20" placeholder="dd/mm/yyyy"></input>
</div>
</div>
<div class="col-xs-6">
<div class="form-group">
<lable for="to_date"><b>To</b></lable>
<input type="date" class="form-control sample_class" name="to_date" id="to_date" required min="2019-04-01" max="2019-04-20" placeholder="dd/mm/yyyy"></input>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-9">
<div class="form-group">
<lable for="initial-budget"><b>Initial Budget</b></able>
<input id="initial-budget" class="form-control" name="initial_budget" required value="<?php echo $budget;?>"></input>
</div>
</div>
<div class="col-xs-3">
<div class="form-group">
<lable for="people_no"><b>No.of people</b></lable>
<input type="number" id="people_no" name="people_no" class="form-control" required value="<?php echo $people_no;?>">
</div>
</div>
</div>
<?php
for($x=1;$x<=$people_no;$x++)
{
?>
<div class="form-group">
<lable for="person_1"><b>Person <?php echo $x;?></b></lable>
<input type="text" class="form-control" id="person_<?php echo $x;?>" name="person1" required placeholder="Person <?php echo $x;?> Name"></input>
</div>
<?php
}
?>
<button class="btn btn-block" type="submit" style="border:1px solid blue;">submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>








