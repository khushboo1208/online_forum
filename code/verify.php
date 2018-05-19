<?php
session_start();
$_SESSION['value']=$_REQUEST['uid'];
$_SESSION['passw']=$_REQUEST['p'];
$a=$_REQUEST['uid'];
$b=$_REQUEST['p'];
$flag=0;
 include('conn.php');
$sel= "select emailid,password from lawyer_details where emailid='".$a."' and password='".$b."' ";
 $d=mysqli_query($conn,$sel);
/* if(mysqli_num_rows($d)==1) {
    header("location:im.html");
	}
	exit;  */
 while($data=mysqli_fetch_array($d))
 {
     if($a==$data[0] && $b==$data[1])
	 { $flag=1;
	 
	   header("location:account.php");
	   exit();
	   }
	}

if($flag==0)	
  {  echo '<script language="javascript">';
echo 'alert(" YOUR EMAIL-ID OR PASSWORD IS INCORRECT!!!")';
echo '</script>';
header('Refresh:1; url=login.php');
  }
?>

