<?php
session_start();
include('conn.php');

//$a=$_REQUEST['cno'];
$b=$_REQUEST['cname'];
$c=$_REQUEST['cdate'];

$d=$_SESSION['caseno'];
//$time=date_default_timezone_set("Asia/Calcutta");
 $date1=date("Y-m-d");   //fetch systemdate
 //echo $date1;
//$date=date("h:i:sa");

if($c>$date1)
{
$ins="update client_details set cdate='$c',cname='$b' where cno='$d'";
$in=mysqli_query($conn,$ins);

if($in)
{  echo '<script language="javascript">';
echo 'alert(" UPDATED SUCCESSFULLY!!!")';
echo '</script>';
header('Refresh:0; url=account.php');
  }
else
{  echo '<script language="javascript">';
echo 'alert("SOME ERROR!!!")';
echo '</script>';
header('Refresh:0; url=account.php');
  }
  }
  else
  {  echo '<script language="javascript">';
echo 'alert("ERROR IN DATE!!!")';
echo '</script>';
header('Refresh:0; url=account.php');
  }

//header("Location:account.php");
?>