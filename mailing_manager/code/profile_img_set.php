<?php
session_start();
$user = $_SESSION['value'];

require_once('conn.php');
if (isset($_GET['id'])) {

  $img = $_GET['id'];
  
  
  $sql = "update detailtb set profile_image='$img' where Emailid='$user'";
  //echo $sql;
  //exit;
  $result = mysqli_query($con,$sql) or die(mysqli_error($con));
  if( mysqli_query($con,$sql)) {
    header('Location: maintry.php');
	} else {
	  echo "profile image could not be set..try again";
	}
}
?>