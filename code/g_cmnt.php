<?php
session_start();
include('conn.php');
$e=$_REQUEST['mid'];
$p=$_REQUEST['p'];
$a=$_REQUEST['area'];
$gr=$_SESSION['groupname'];


$count=0;
$i=0;


$con=mysqli_connect('localhost','root','','mailstore') or die("connection fail");     //database specified here
$s="select `Emailid` , `Password` from `detailtb` where `Emailid`='".$e."' and `Password`='".$p."' ";
$da=mysqli_query($con,$s);

while ($row=mysqli_fetch_array($da))
{    
     if($row[0]==$e && $row[1]==$p)
     {  
	    echo "id exists";
		$i=1;
	 }
}	 
	
	
 if($i==1)
	{    //echo "inside $i";
		 $sel="select  `groupname`,`Emailid` from `group_member` where `groupname`='".$gr."' and `Emailid`='".$e."' ";
		 
		 $qu=mysqli_query($conn,$sel);
		 if($qu)
		 {
		 while($r = mysqli_fetch_array($qu))
		 {
		   
		  if($r[0] == $gr && $r[1]==$e)
		  {  // echo $b;
		   // echo "id matched";
		     $count=1;
		  }
		 }
		 }
		 
		 else
		 {
		 die(mysqli_error($conn));
		 }
		 
		 
		 if($count == 1)
		 {
              //$s="INSERT INTO `group`( `groupname`, `message`, `Emailid`, `flag`) VALUES ('".$gn."','".$d."','".$e."','d') ";
             
              $ins="INSERT INTO `group`( `groupname`, `Emailid`, `message`, `flag`) VALUES ('".$gr."','".$e."','".$a."','c') ";
             
              $m=mysqli_query($conn,$ins);
              if(!$m)
              die(mysqli_error($conn));
			   echo '<script language="javascript">';
                 echo 'alert(" Thankyou! for participating..")';
                 echo '</script>';
			  header('Refresh:0;url=group.php');
	    }
		else
			{
			    echo '<script language="javascript">';
                 echo 'alert(" you are not the member of this group. To be a part of it,kindly add yourself into this group.")';
                 echo '</script>';
			     header('Refresh:0;url=group.php');
			}
	}
	
else
{
echo '<script language="javascript">';
            echo 'alert(" You have not registered yourself yet. Kindly visit About us!")';
            echo '</script>';
			header('Refresh:0;url=main.php');

}	
	
?>