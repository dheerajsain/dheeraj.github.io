<?php
require "connection.php";
include 'header.php';
?>
<html>
<head>
<title>Setting.php</title>
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
<div class="container c1">
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
<div class="panel panel-primary">
<div class="panel-heading">Setting</div>
<div class="panel-body">
<form action="setting_submit.php" method="post">
<div class="form-group">
<lable for="password"><b>Old Password</b></lable>
<input class="form-control" id="password" name="password" type="password"  placeholder="Enter old password" required>
</div>
<div class="form-group">
<lable for="password_new"><b>New Password</b></lable>
<input class="form-control" id="password_new" name="password_new" type="password"  placeholder="Enter new password" required>
</div>
<div class="form-group">
<lable for="password_re"><b>Confirm Password</b></lable>
<input class="form-control" id="password_re" name="password_re" type="password"  placeholder="retype new password" required>
</div>
<button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>