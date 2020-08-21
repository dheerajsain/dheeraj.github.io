<?php
require "connection.php";
include 'header.php';
?>
<html>
  <head>
    <title>Index page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <style>
       #d1{
           position:relative;
           top:50px;
           width:1505px;
           height:100vh;
           background-color:white;
           background-image:url("intro_big.jpg");
           background-size:cover;
           
          }
       #d2{
           position:absolute;
           top:170px;
           left:400px;
           width:650px;
           height:200px;
           background-color:black;
           opacity:0.5;
           color:white;
          }
       #a1{
          position:absolute;
          top:110px;
          left:260px;
		  opacity:1;
          }
     </style>
  </head>
  
  <body>
    <div class="container-fluid">
      <div id="d1">
        <div id="d2">
          <h3 style="position:relative;top:50px;left:140px;">We help you Control your budget</h3>
          <a id="a1" href="login.php" class="btn btn-success">Start Today</a>
		</div>
      </div>
    </div>
  </body>
</html>

