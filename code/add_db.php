<?php
include('conn.php');
session_start();
$e=$_REQUEST['eid'];
$p=$_REQUEST['p'];
$a=$_SESSION['groupname'];

$count=0;
$i=0;


$con=mysqli_connect('localhost','root','','mailstore') or die("connection fail");     //database specified here
$s="select Emailid,Password from detailtb where Emailid='".$e."' and Password='".$p."' ";
$da=mysqli_query($con,$s);

while ($row=mysqli_fetch_array($da))
{    
     if($row[0]==$e && $row[1]==$p)
     {  
	    //echo "id exists";
		$i=1;
	 }
}	 
	
	
 if($i==1)
	{    //echo "inside $i";
		 $sel="SELECT  `groupname`,`Emailid` FROM `group_member` ";
		 $qu=mysqli_query($conn,$sel);
		 if($qu)
		 {
		 while($r = mysqli_fetch_array($qu))
		 {
		  //echo $r[0],$r[1]; 
		  if($r[0] == $a && $r[1]==$e)
		  {  // echo $b;
		    
		     $count=1;
		  }
		 }
		 }
		 
		 else
		 {
		 die(mysqli_error($conn));
		 }
		 
		 
		 if($count==0)
		 {

              $s="INSERT INTO `group_member`( `groupname`, `Emailid`) VALUES ('".$a."','".$e."') ";
             
              $m=mysqli_query($conn,$s);
              if(!$m)
              die(mysqli_error($conn));
			  else
			  echo '<script language="javascript">';
                 echo 'alert(" Become member of this group.")';
                 echo '</script>';
			   header('Refresh:0;url=group.php');
	    }
		else
			{
			    echo '<script language="javascript">';
                 echo 'alert(" you are already the member of this group.")';
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