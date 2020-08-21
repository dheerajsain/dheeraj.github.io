<?php 
require "connection.php";
//include 'header.php';
$email=$_SESSION["email"];
$budget=$_SESSION["initial_budget"];
$from_date=$_SESSION["from_date"];
$to_date=$_SESSION["to_date"];
$title=$_SESSION["title"];
$people_no=$_SESSION["people_no"];
$select_query="select Ex_title,date,amount_spent,person_id from expense_info where email='$email' And title='$title'";
$select_query_result=mysqli_query($con,$select_query);
if(!$select_query_result)
echo "error<br>".mysqli_error($con);
$row=mysqli_fetch_array($select_query_result);
$total_fetched_rows=mysqli_num_rows($select_query_result);
if($total_fetched_rows>0)
{
while($row=mysqli_fetch_array($select_query_result))
{
$title=$row["Ex_title"];
$date=$row["date"];
$amount=$row["amount_spent"];
$person_id=$row["person_id"];
echo $title;
}
}
?>
