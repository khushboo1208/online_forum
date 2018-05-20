<?php
session_start();
include('conn.php');
include('home.php');

$cg=$_SESSION['value'];
$_SESSION['cn']=$_GET["id"];
$a=$_SESSION['cn'];
?>

<html>
<head>
<style>
b.up{ text-transform: uppercase;}
</style>
</head>
<body background="../picture/sun_f.png">
<div id="container1" style="position:absolute; height:125%; left:2%;top:15.2%; width:65%">
   </br></br> 
  <div id="container1.1" style="position:absolute; height:25%; left:1%;top:2%; width:22%;">
  <img src="../picture/comt_f.png" height="100%" width="100%"></div>
  
  <div id="container1.2" style="position:absolute; height:17%; left:25%; top:6%; width:70%;">
   <center>
      <?php  echo "<b class='up'>".$_SESSION['cn']."</b>";  ?> </center>
  </div>
  
  <div id="container1.3" style="position:absolute; height:20%; left:25%;top:28%; width:70%;">
  <form action="commentdb.php" method="post">
  &nbsp;&nbsp;
      <input type="text" name="emailid1" placeholder="enter email-id" size="30" required/>
	  &nbsp;&nbsp;
      <input type="password" name="password1" placeholder="enter password" size="30" required/></br></br>
	  &nbsp;&nbsp;  
	   <textarea name="comment" cols="70" rows="6" id="txt" placeholder="comment here" required/></textarea>
	   <div id="container1.4" style="position:absolute; height:30%;  left:90%;top:45%; width:10%;"> 
	<input type="image" src="../picture/tick2.png" height="70%" width="70%" alt="Submit"/>
	   </form>
	   </div>
  </div> 
  
  <div id="container1.4" style="position:absolute; background-color:#FFDD75; height:43%; left:4%;top:52%;width:91%;overflow:scroll; ">
 <font size="5px" face="AR CENA" color="blue"><CENTER><u> OTHER'S OPINION</u></CENTER></font> <br>
<?php
 
 include('conn.php');
 
 
 
 
 
 $s="select comment,Emailid from commenttb where category='".$cg."' and content='".$a."' order by sno desc";
 $q=mysqli_query($conn,$s);
 if(mysqli_query($conn,$s))
 {
 //echo "query fired";
 }
 else
 {
 die(mysqli_error($conn));
 }
 
 while($row=mysqli_fetch_array($q))
 {
  
  $ses=$row[1];
 
 $con=mysqli_connect('localhost','root','mysql','mailstore') or die(mysqli_error($con));
 $select="select profile_image from detailtb where Emailid='$ses'";
 $m=mysqli_query($con,$select);
 while($data=mysqli_fetch_array($m))
 {
 ?>

<table>
 <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
<img src="../mailing manager/code/myupload/<?php echo $data['profile_image'];?>" width="50" height="50" >
</td>
<td>
<table>
 <tr><td>
 <?php   echo $row[1];  ?>
 </td></tr><tr><td>
<?php  echo $row[0];   ?>
 </td></tr></table>
</td> </tr></table>
<hr>
 <?php
 }
 }
 ?>
 
  </div>

</div>





<div id="container2" style="position:absolute; height:125%; left:70%;top:15.2%; width:28%">
<br>
 <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#CC0066"><U>Your Suggesstions</U></font></h2> 
 
    <div id="container2.1" style="position:absolute; height:45%; left:1%;top:11%; width:98%;">
	   <img src="../picture/sugession.png" height="110%" width="100%">
	   
      	   <div id="container2.1.1" style="position:absolute; height:80%; left:7%;top:23%; width:85%; overflow:scroll;">
	   
	   <?php
 
 include('conn.php');
 
 
 
 
 
 $s="select comment,Emailid from commenttb where category='".$cg."' and content='".$a."' and flag='s' ";
 $q=mysqli_query($conn,$s);
 if(mysqli_query($conn,$s))
 {
 //echo "query fired";
 }
 else
 {
 die(mysqli_error($conn));
 }
 
 while($row=mysqli_fetch_array($q))
 {
  
  $ses=$row[1];
 
 $con=mysqli_connect('localhost','root','mysql','mailstore') or die(mysqli_error($con));
 $select="select profile_image from detailtb where Emailid='$ses'";
 $m=mysqli_query($con,$select);
 while($data=mysqli_fetch_array($m))
 {
 ?>

<table>
 <tr><td>
<img src="../mailing manager/code/myupload/<?php echo $data['profile_image'];?>" width="50" height="50" >
</td>
<td>
<table>
 <tr><td>
 <?php   echo $row[1];  ?>
 </td></tr><tr><td>
<?php  echo $row[0];   ?>
 </td></tr></table>
</td> </tr></table>
<hr>
 <?php
 }
 }
 ?>
	   </div>
    </div>
 
	
	<div id="container2.2" style="position:absolute; height:25%; left:0%;top:65%; width:98%;">
	<form action="suggestion.php" method="post">
	
      <input type="text" name="emailid2" placeholder="enter email-id" size="35" required/></br>
	   <br/>
      <input type="password" name="password2" placeholder="enter password" size="35" required/></br></br>
	  
	   <textarea name="suggestion" cols="40" rows="5" id="txt" placeholder="want to suggest" required></textarea>
	   <br><br>
	   <input type="image" src="../picture/tick2.png" height="17%" width="11%" alt="Submit"/>
	   
	   </form>
       </div>

</div>
<!--  echo $row[1]."<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[0]."<hr>"; -->

</body>
</html>
