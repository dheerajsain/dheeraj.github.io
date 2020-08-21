<?php
require "connection.php";
include 'header.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
{
background-color:lightgrey;
}
button:hover
{
background-color:blue;
}
</style>
</head>
<body>
<div class="container c1">
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
<div class="panel panel-primary">
<div class="panel-heading">Create New Plan</div>
<div class="panel-body">
<form action="newplan_submit.php" method="post">
<div class="form-group">
<lable for="budget">Budget</lable>
<input type="number" class="form-control" placeholder="Initial Budget(Ex.4000)" id="budget" name="initial_budget" required>
</div>
<div class="form-group">
<lable for="people_no">How many people you want to add in your group?</lable>
<input type="number" class="form-control" placeholder="No. of people" id="people_no" name="people_no" required>
</div>
<button class="btn btn-block" type="submit" style="border:1px solid blue;">Next</button> 
</div>
</div>
</div>
</body>
</html>