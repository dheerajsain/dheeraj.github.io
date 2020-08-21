<?php
require "connection.php";
$title=$_SESSION["title"];
$email=$_SESSION["email"];
$people_no=$_SESSION["people_no"];
$title1=$_POST["title1"];
$_SESSION["Ex_title"]=$title1;
$date=$_POST["date"];
$person_id=$_POST["select"];
$_SESSION["person_id"]=$person_id;
$amount=$_POST["amount"];
$from_date=$_SESSION["from_date"];
$to_date=$_SESSION["to_date"];
if($amount>0)
{
echo "amount ok";
}
else
{
echo "<script>alert('enter suffiecent amount')</script>";
echo "<script>location.href='view1.php'</script>";
}
$insert_query="insert into expense_info(title,email,Ex_title,date,amount_spent,person_id) values('$title','$email','$title1','$date','$amount','$person_id')";
$insert_query_result=mysqli_query($con,$insert_query);
if(!$insert_query_result)
echo "Error:".mysqli_error($con);
$select_query="select amount_spent from expense_info where email='$email' AND title='$title'";
$select_query_result=mysqli_query($con,$select_query);
if(!$select_query_result)
echo "Error:".mysqli_error($con);
$total_fetched_rows=mysqli_num_rows($select_query_result);
if($total_fetched_rows>0)
{
$remaning_budget=$_SESSION["initial_budget"];
$sum=0;
while($row=mysqli_fetch_array($select_query_result))
$sum=$sum+$row["amount_spent"];
$remaning_budget=$_SESSION["initial_budget"]-$sum;
$_SESSION["remaning_budget"]=$remaning_budget;
$_SESSION["total_spent"]=$sum;
}
echo "total spent:".$_SESSION["total_spent"]."<br>remaning_budget".$_SESSION["remaning_budget"];
header('location:view1.php');
?>
