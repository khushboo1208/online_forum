<?php
session_start();
include('conn.php');

$a=$_REQUEST['cno'];
$b=$_REQUEST['cname'];
$c=$_REQUEST['cdate'];
//echo $c."<br>";
$d=$_SESSION['value'];
//$time=date_default_timezone_set("Asia/Calcutta");
 $date1=date("Y-m-d");
 //echo $date1;
//$date=date("h:i:sa");

if($c>$date1)
{
$ins="insert into client_details(cno,cdate,cname,lawyerid) values('".$a."','".$c."','".$b."','".$d."')";
$in=mysqli_query($conn,$ins);

if($in)
{  echo '<script language="javascript">';
echo 'alert(" INSERTED SUCCESSFULLY!!!")';
echo '</script>';
header('Refresh:0; url=account.php');
  }
else
{  echo '<script language="javascript">';
echo 'alert("THIS CLIENT NUMBER ALREADY EXISTS!!!")';
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