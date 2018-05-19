<?php
session_start();
include('conn.php');
$a=$_GET['id'];

$s="delete from client_details where cno='".$a."' ";
$q=mysqli_query($conn,$s);
if($q)
{
echo '<script language="javascript">';
echo 'alert(" Deleted successfully!!!")';
echo '</script>';

}
else
{
echo '<script language="javascript">';
echo 'alert(" some error!!!")';
echo '</script>';
header('Refresh:0; url=account.php');
}


?>