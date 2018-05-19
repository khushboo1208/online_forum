<?php
session_start(); 
include('conn.php');
$flag=0;
$id=$_SESSION['value'];

$e=mysqli_real_escape_string($conn,$_REQUEST['n']);

$i=mysqli_real_escape_string($conn,$_REQUEST['p']);
$j=mysqli_real_escape_string($conn,$_REQUEST['cp']);

$m=mysqli_real_escape_string($conn,$_REQUEST['add1']);

$o=mysqli_real_escape_string($conn,$_REQUEST['city']);
$p=mysqli_real_escape_string($conn,$_REQUEST['state']);
$q=mysqli_real_escape_string($conn,$_REQUEST['pc']);
$r=mysqli_real_escape_string($conn,$_REQUEST['ct']);



if($i==$j)
{   

 $ins="update lawyer_details set phonenumber='$e', password='$i', address='$m', city='$o', state='$p',postalcode='$q', country='$r' where emailid='$id'";

$in=mysqli_query($conn,$ins);

if($in)
{   
echo '<script language="javascript">';
echo 'alert(" updated successfully")';
echo '</script>';
header('Refresh:1; url=account.php');
$flag=1;
  //exit();
  }   
else
{
echo '<script language="javascript">';
echo 'alert(" some error")';
echo '</script>';
header('Refresh:1; url=profile.php');
exit();
}

}
if($flag==0)
{ echo '<script language="javascript">';
echo 'alert(" YOU HAVE ENTERED INCORRECT PASSWORD")';
echo '</script>';
header('Refresh:1; url=profile.php');
exit();
} 


?>

