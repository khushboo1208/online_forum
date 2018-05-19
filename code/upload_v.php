<?php
session_start();
$a=$_SESSION['groupname'];

include('conn.php');

$file_name=$_FILES['f']['name'];
$ex=explode(".",$file_name);
$target='../multimedia/'.$file_name;
$file_location=$_FILES['f']['tmp_name'];

if(move_uploaded_file($file_location,$target))
{  echo"file uploaded sucessfully";
//print_r($ex);
$in=" UPDATE `group` SET `pic`='$file_name' WHERE `groupname`= '$a' and `flag` = 'd'";
$m=mysqli_query($conn,$in) or  die(mysqli_error($conn));
header('Refresh:0;url=group.php');
}
else
{
echo"some error";
}
?>