<?php
session_start();

include('conn.php');

$cn=mysqli_real_escape_string($conn,$_SESSION['cn']);
$a=mysqli_real_escape_string($conn,$_SESSION['value']);
$m=mysqli_real_escape_string($conn,$_REQUEST['emailid1']);
$b=mysqli_real_escape_string($conn,$_REQUEST['password1']);
$c=mysqli_real_escape_string($conn,$_REQUEST['comment']);
$flag=0;
				 
				 
$con=mysqli_connect('localhost','root','mysql','mailstore') or die("connection fail");     //database specified here
$s="select Emailid,Password from detailtb";

$d=mysqli_query($con,$s);

if($d)
{      

                 echo '<script language="javascript">';
                 //echo 'alert(" query fired ")';
                 echo '</script>';
				 
}
else
{
echo mysqli_error();
}
while ($row=mysqli_fetch_array($d))
{    
     if($row[0]==$m && $row[1]==$b)
     {  //echo "id exists";
	  echo '<script language="javascript">';
                 //echo 'alert(" id exists")';
                 echo '</script>';
	 $ins="insert into commenttb(category,content,Emailid,comment,flag) values ('".$a."','".$cn."','".$m."','".$c."','c')";
	 $in=mysqli_query($conn,$ins);

           if($in)

              {  $flag=1;
			      echo '<script language="javascript">';
                 echo 'alert(" Thanks for your comment. Your comment has been recorded. ")';
                 echo '</script>';
				 header('Refresh:0;url=main.php');
                //unset($_SESSION['value']);  
				exit();  
              }

     }
	 
	
}

if($flag==0)
{
echo '<script language="javascript">';
            echo 'alert(" You have not registered yourself yet. Kindly visit About us")';
            echo '</script>';
			header('Refresh:0;url=main.php');

}
?>