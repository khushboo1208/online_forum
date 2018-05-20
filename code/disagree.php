<!--<script src="jquery-1.7.min.js"></script   -->
<?php
session_start();

include('conn.php');
//$cg=$_SESSION['value'];
$cg="TRANSPORT";
$h=$_SESSION['head'];
$a=$_SESSION['sol'];
$e=$_REQUEST['e-id'];
$z=$_REQUEST['p'];
//echo $a;
//echo $e;
$flag=0;

$con=mysqli_connect('localhost','root','mysql','mailstore') or die(mysqli_error($con));
$se1="select Emailid,Password from detailtb";
$q1=mysqli_query($con,$se1);
while($d1=mysqli_fetch_array($q1))
{
  if($d1[0]==$e && $d1[1]==$z)
   {
     $flag=1;
   }
}

if($flag==1)
{  //echo"id exists";
$se2="select * from sol_choice where  headline='".$h."' and Emailid='".$e."'";
$q2=mysqli_query($conn,$se2) or die(mysqli_error($conn));
  if(mysqli_num_rows($q2)==1)
    { //echo"inside num_rows";
	  while($d2=mysqli_fetch_array($q2))
        {   
	              echo '<script language="javascript">';
                   echo 'alert("You can vote only once.")';
                   echo'</script>'; 
		           header('Refresh:0;url=main.php');
		           exit;    
        }       
	        
    }
  else { $in="insert into sol_choice (headline,solution,agree,disagree,Emailid) values ('".$h."','".$a."',0,1,'".$e."')";
         $inqu=mysqli_query($conn,$in);
		 
		 echo '<script language="javascript">';
         echo 'alert("Thank you for voting! We value your response.")';
         echo'</script>'; 
	     header('Refresh:0;url=main.php');  
	   }		
}   
if($flag==0)
{                echo '<script language="javascript">';
                 echo 'alert(" You have not registered yourself yet. Kindly visit T&C! ")';
                 echo '</script>';
				 header('Refresh:0;url=main.php');
}   
 ?>