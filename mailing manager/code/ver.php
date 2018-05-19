

<?php
session_start();
$_SESSION['value']=$_REQUEST['n'];
$_SESSION['passw']=$_REQUEST['p'];
$a=$_REQUEST['n'];
$b=$_REQUEST['p'];
$flag=0;
 include('conn.php');
$sel= "select Emailid,Password from detailtb where Emailid='$a' and Password='$b' ";
 $d=mysqli_query($con,$sel);
/* if(mysqli_num_rows($d)==1) {
    header("location:im.html");
	}
	exit;  */
 while($data=mysqli_fetch_array($d))
 {
     if($a==$data[0] && $b==$data[1])
	 { $flag=1;
	 
	   header("location:sl.php");
	   exit();
	   }
	}

if($flag==0)	
  {header("location:error.html");
  }
?>

