<?php
session_start();
include('conn.php');
$a=mysqli_real_escape_string($conn,$_SESSION['value']);
$m=mysqli_real_escape_string($conn,$_REQUEST['mid']);
$b=mysqli_real_escape_string($conn,$_REQUEST['area']);
$c=mysqli_real_escape_string($conn,$_REQUEST['p']);
$count=0;				 
$i=0;

				 
$con=mysqli_connect('localhost','root','','mailstore') or die("connection fail");     //database specified here
$s="select Emailid,Password from detailtb where Emailid='".$m."' and Password='".$c."' ";
$d=mysqli_query($con,$s);

while ($row=mysqli_fetch_array($d))
{    
     if($row[0]==$m && $row[1]==$c)
     {  
	    // echo "id exists";
		$i=1;
	 }
}	 
		

   if($i==1)
	{
		 $sel="select content from post";
		 $qu=mysqli_query($conn,$sel);
		 if($qu)
		 {
		 while($r = mysqli_fetch_array($qu))
		 {
		 
		  if($b == $r[0])
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
		      $insert="insert into choice(category,content,likes,dislikes) values ('".$a."','".$b."',0,0)";
			  
	          if(mysqli_query($conn,$insert))
		      {  //echo "count inserted";
		      }
		     else
		     {
		      die(mysqli_error($conn));
		     }
		 
		 
	        $ins="insert into post(category,content,Emailid) values ('".$a."','".$b."','".$m."')";
	        $in=mysqli_query($conn,$ins);
		 
		       if($in)

              {  
			      echo '<script language="javascript">';
                 echo 'alert("Thankyou for posting. Your post has been recorded.")';
                 echo '</script>';
				 header('Refresh:0;url=main.php');
               // unset($_SESSION['value']);  
				exit();  
              }
			 
			}
			
			else
			{
			    echo '<script language="javascript">';
                 echo 'alert(" This post is already posted.")';
                 echo '</script>';
			     header('Refresh:0;url=write_post.php');
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