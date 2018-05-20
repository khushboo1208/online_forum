<?php
include('conn.php');
$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
$gn=$_REQUEST['gn'];
$d=$_REQUEST['desc'];
$count=0;
$i=0;

$time=date_default_timezone_set("Asia/Calcutta");
 $date1=date('y-m-d');
//$date=date("h:i:sa");

$con=mysqli_connect('localhost','root','mysql','mailstore') or die("connection fail");     //database specified here
$s="select Emailid,Password from detailtb where Emailid='".$e."' and Password='".$p."' ";
$da=mysqli_query($con,$s);

while ($row=mysqli_fetch_array($da))
{    
     if($row[0]==$e && $row[1]==$p)
     {  
	    // echo "id exists";
		$i=1;
	 }
}	 
	
	
 if($i==1)
	{
		 $sel="SELECT  `groupname`FROM `group` ";
		 $qu=mysqli_query($conn,$sel);
		 if($qu)
		 {
		 while($r = mysqli_fetch_array($qu))
		 {
		 
		  if($gn == $r[0])
		  {  // echo $b;
		     //echo $r[0];
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

              $s="INSERT INTO `group`( `groupname`, `message`, `Emailid`,`date`,`pic`,`flag`) VALUES ('".$gn."','".$d."','".$e."', '".$date1."','blank.jpg','d') ";
             
              $m=mysqli_query($conn,$s);
              if(!$m)
              die(mysqli_error($conn));
			  
			  $se="INSERT INTO `group_member`( `groupname`,  `Emailid`) VALUES ('".$gn."','".$e."') ";
             
              $mq=mysqli_query($conn,$se);
              if(!$mq)
              die(mysqli_error($conn));
			  
			  echo '<script language="javascript">';
                 echo 'alert(" group created.")';
                 echo '</script>';
			     header('Refresh:0;url=group.php');
	    }
		else
			{
			    echo '<script language="javascript">';
                 echo 'alert(" This group is already created.")';
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