
<html>
<head>
<title>header</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="index.php">Ctrl₹ budget</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div id="myNavbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<?php
if(isset($_SESSION['email']))
{
?>
<li><a href="about_us.php"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
<li><a href="Setting.php"><span class="glyphicon glyphicon-cog"></span>change password</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
?>
<?php
}else {
 ?>
<li><a href="about_us.php"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
 <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</div>
</body>
</html>