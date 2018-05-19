<?php
include('conn.php');

$category=$_REQUEST['category'];     //in uppercase  
$headline=$_REQUEST['headline'];
$solution=$_REQUEST['solution'];
$counter=$_REQUEST['counter'];
echo $counter."<br>";

$insert="insert into developer_sol(category,headline,solution,counter) values('".$category."','".$headline."','".$solution."','".$counter."')";   // $solution1 and $counter1  needs to be changed according to the requirement.
$query=mysqli_query($conn,$insert) or die(mysqli_error($conn));
if($query)
echo "inserted into database";

?>