<?php
require "connection.php";
include 'header.php';
?>
<html>
<head>
  <title>Login</title>
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
<div class="panel panel-default">
<div class="panel-heading">Signup</div>
<div class="panel-body">
  <form action="login_submit.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Valid Email" name="email" pattern="[a-z0-9>_%-+]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password(Min.6 character)" name="password" pattern=".{6,}" required>
    </div>
    <button  type="submit" class="btn btn-block btn-success" name="submit">Submit</button>
  </form>
         </div>
<div class="panel-footer">Do you have an account?<a href="signin.php">click here to Sign Up</a></div>
       </div>
     </div>
    </div>
   </div>
  </body>
 </html>