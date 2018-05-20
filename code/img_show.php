<?php

include('conn.php');
session_start();
//$cg=$_SESSION['value'];
$uid=$_SESSION['img']=$_GET["id"];

$sel="select image,message,category from images where image='".$uid."' and flag='i'";
$e=mysqli_query($conn,$sel) or die(mysql_error());
   
 while($row=mysqli_fetch_array($e))
 {   //echo $row['image'];
  ?>
  <html>
  <head>
  <title>
  Picture
  </title>
  <style>
  #new{
    background: -moz-linear-gradient(left,#330066,#330066);
	background: -webkit-linear-gradient(left,#330066,#330066);
	background: -o-linear-gradient(left,#330066,#330066);
	background: -ms-linear-gradient(left,#330066,#330066);
	background: linear-gradient(left,#330066,#330066);
	width:80px;
	height:30px;
	//box-shadow:0px 0px 1px white;
	//text-shadow:1px 1px 1px white;

	font-size:12px;
	border-radius:40px 40px 40px 40px;
	border-color:white;
  }
  
  #new1{
    background: -moz-linear-gradient(left,#330066,#330066);
	background: -webkit-linear-gradient(left,#330066,#330066);
	background: -o-linear-gradient(left,#330066,#330066);
	background: -ms-linear-gradient(left,#330066,#330066);
	background: linear-gradient(left,#330066,#330066);
	width:250px;
	height:45px;
	//box-shadow:0px 0px 1px white;
	//text-shadow:1px 1px 1px white;

	font-size:12px;
	border-radius:40px 40px 40px 40px;
	border-color:white;
  }

</style>
  <style>
img.one{
border-color:black;
}
</style>
  </head>
  <body bgcolor="#FF9966">
  <div id="container" style="float:left; margin-top:1%; margin-left:3%;">
  <a href="main.php"><img src="../picture/home_f.png"  width="63" height="63"></a>
  </div>
  
 <div id="container" style="position:absolute;  top:18%; margin-left:5%; ">
  <image class="one" src="../picture/<?php echo $row['image'];?>" width="400" height="400" border='10px'> 
  </div>
 <!--  <div id="container" style="position:absolute;  top:88%; margin-left:11.5%; ">
   <form action="down.php" method="POST">
   <button id="new1" type="submit" name="attach"><font color="#FF9966" size="5%">DOWNLOAD</font></button>
 </form>
    </div>   -->
 <div id="container" style="position:absolute;top:5%; margin-left:40%; height:15%; width:55%; ">  
 <font size="5" color="#FFFFFF"> <CENTER><U>
 <?php echo $row['message']."</U></font></center>";
  }
// echo "<img src='myupload/'".$q['image']." width=200 height=400>"
 ?> 
 </div>
 
 
 	   <div id="container2.1.1" style="position:absolute; height:53%; left:40.5%; top:22%; width:55%; overflow:scroll;">
	  <center><U><B> YOUR COMMENTS</B></U></center> <br>
	   <?php
 
 include('conn.php');
  $s="select comment,Emailid from commenttb where content='".$uid."' and flag='i' ";
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
 
 
 <div id="container" style="position:absolute;  top:77%; margin-left:39.8%; ">
 <form action="imagedb.php" method="POST">
 <textarea name="area2" cols="104" rows="5"  placeholder="comment here..."  required></textarea>
<br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="id1" placeholder="enter emailid.." required/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="password" name="p1" placeholder="enter password.." required/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button id="new" type="submit" name="attach"><font color="#FF9966" size="4%">GO</font></button> 
   
 </form>
 </div>
 </body>
 </html>
 