<?php
include('conn.php');
include('home.php');
session_start();
$a=$_SESSION['groupname']=$_GET["id"];
?>
<html>
<head>
<title>Group </title> 
<style>
b.up{ text-transform:uppercase;}
</style>
</head>
<body background="../picture/flower_f.png">
<div id="container1" style="position:absolute; height:80%; left:4%;top:16%; width:70%;">
</br></br> 
  <div id="div1" style="position:absolute;  height:35%; left:0%;top:5%; width:20%;">
  
 <?php

$sel="SELECT  `pic` FROM `group` where `groupname`='".$a."' and  `flag`='d' ";
		 $qu=mysqli_query($conn,$sel);
		 if($qu)
		 {
		 while($r = mysqli_fetch_array($qu))
		 {
		?>
		<a href="select.php"> <img src="../multimedia/<?php echo $r[0]; ?>" height="80%" width="80%"> </a>
		<?php
		 }
		 }
		 
		 else
		 {
		 die(mysqli_error($conn));
		 }

 ?> </div>
  
  <div id="div2" style="position:absolute;  text-align:center; height:16%; left:27%;top:10%; width:65%;">
   <?php
         $sel="SELECT  `message`FROM `group` where `groupname`='".$a."' and  `flag`='d' ";
		 $qu=mysqli_query($conn,$sel);
		 if($qu)
		 {
		 while($r = mysqli_fetch_array($qu))
		 {
		
		 echo "<b class='up'>".$r[0]."</b>";
		 }
		 }
		 
		 else
		 {
		 die(mysqli_error($conn));
		 }
   ?>
  </div>
  <div id="div1" style="position:absolute;  height:10%; left:1%;top:39%; width:23%;"> </br> <form action="g_cmnt.php" method="post">
  <input type="text" name="mid" placeholder="enter mymail-id" size="35" required/> <br><br>
<input type="password" name="p" placeholder="enter password" size="35" required/>  </div>
   
   <div id="div1" style="position:absolute; height:30%; left:34%;top:33%; width:62%;">
<textarea name="area" cols="70" rows="7" placeholder="write your view here..." required ></textarea>
  </div>
    <div id="div1" style="position:absolute; height:12%; left:90%;top:41%; width:8%;"> 
	<input type="image" src="../picture/tick2.png" height="70%" width="70%" name="foo" />
</div>

<div id="div4" style="position:absolute;  height:50%; background-color:#9999CC; left:1%;top:63%; width:96%; overflow:scroll;"> 
<center><font size="5px" face="AR BERKLEY" color="#FFFF33">What Others Say!!! </font></center><br>
<table> 
<?php
$se="SELECT  `Emailid`,`message` FROM `group` where `groupname`='".$a."' and `flag`='c' ";
		 $q=mysqli_query($conn,$se);
		 if($q)
		 {
		 while($row = mysqli_fetch_array($q))
		 {      ?> 
		 <tr> <td> 
		 <?php 
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row[1]."<hr>";   ?>   </td> 
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </td>
 <td>
 <?php
   echo $row[0]."<hr>";   ?> </td> </tr>
   <?php
  //echo "<hr>";
		 }
		 }
?>
</table>
 </div>
</div>


<div id="container2" style="position:absolute;  text-align:center;  height:80%; left:75%; top:16%; width:23%;">
<br><br><br>

 <U><font size="4%" face="Castellar"><?php echo $a; ?> members </font></U>
<table align="center" > 
<?php
$s="SELECT `groupname`, `Emailid` FROM `group_member` where `groupname`='".$a."' ";
$m=mysqli_query($conn,$s);
while($data=mysqli_fetch_array($m))
{  
?>
<tr><td>
<?php echo $data[1];
}
?> </td></tr>
 </table> <br> <br>
 <a href="add.php"><img src="../picture/add2.png" height="9%" width="18%"></a>
 </div>  
 
  </body>
</html>  


