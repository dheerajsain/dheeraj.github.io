<?php
require "connection.php";
session_destroy();
echo "<script>alert('Successfull logout')</script>";
echo "<script>location.href='login.php'</script>";
?>