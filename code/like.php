<!--<script src="jquery-1.7.min.js"></script   -->
<?php
session_start();

include('conn.php');
$cg=$_SESSION['value'];
$a=$_SESSION['cnt'];
$e=$_REQUEST['e-id'];
$z=$_REQUEST['p'];
//echo $a;
//echo $e;
$flag=0;

$con=mysqli_connect('localhost','root','','mailstore') or die(mysqli_error($con));
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
$se2="select * from choice_once where category='".$cg."' and content='".$a."' and Emailid='".$e."'";
$q2=mysqli_query($conn,$se2) or die(mysqli_error($conn));
  if(mysqli_num_rows($q2)==1)
    { //echo"inside num_rows";
	  while($d2=mysqli_fetch_array($q2))
        {    if($d2['2']==1)            //likes column
	            {  echo '<script language="javascript">';
                   echo 'alert("You can like the post only once.")';
                   echo'</script>'; 
		           header('Refresh:0;url=main.php');
		           exit;    
                }
	         if($d2['3']==1)            //dislikes column
                {   if($d2['5']<2)       //counter column
				         {     $up1="update choice_once set likes='1', dislikes='0', counter='2' where category='".$cg."' and content='".$a."'  and Emailid='".$e."'";
                               $upd1=mysqli_query($conn,$up1);
				               //echo"choice_once updated";
				
 				               $se3="select likes,dislikes from choice where category='".$cg."' and content='".$a."'";
                               $q3=mysqli_query($conn,$se3);
                               while($d3=mysqli_fetch_array($q3))
                                     {  
                                           $l=$d3[0];  
                                           $l=$l+1;
										   $dl=$d3[1];
										   $dl=$dl-1;
                                           $up2="update choice set likes='$l', dislikes='$dl' where category='".$cg."' and content='".$a."'";
                                           $upd2=mysqli_query($conn,$up2);
						                   //echo"choice updated";
										   echo '<script language="javascript">';
                                           echo 'alert("your choice has been updated.")';
                                           echo'</script>'; 
	                                       header('Refresh:0;url=main.php'); 
										   exit;
                                     }
						 }
                    else
                         {     echo '<script language="javascript">';
                               echo 'alert("two chances have been given.")';
                               echo'</script>'; 
		                       header('Refresh:0;url=main.php');
							   exit;
						 }
                }
		}
    }
  else { $in="insert into choice_once (category,content,likes,dislikes,Emailid,counter) values ('".$cg."','".$a."',1,0,'".$e."',1)";
         $inqu=mysqli_query($conn,$in);
		 
		 $se4="select likes from choice where category='".$cg."' and content='".$a."'";
         $q4=mysqli_query($conn,$se4);
         while($d4=mysqli_fetch_array($q4))
              {  
                   $count=$d4[0];  
                   $count=$count+1;
                   $up3="update choice set likes='$count' where category='".$cg."' and content='".$a."'";
                   $upd3=mysqli_query($conn,$up3);
				  // echo"choice updated";
              }
		 echo '<script language="javascript">';
         echo 'alert("Thanks for participating.")';
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