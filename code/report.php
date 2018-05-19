<?php
include('home.php');
session_start();
$_SESSION['cn']=$_GET["id"];
?>
<html>
<head>
<title>
Report
</title>
<style>
u.up{ text-transform:uppercase;}
</style>
</head>
<body>
<div id="container" style="position:absolute;  top:18%;  width:98%;">
<div id="container" style="position:absolute; margin-top:0%; text-align:center; height:80%; width:99%; ">
<h3><?php echo "<u class='up'>".$_SESSION['cn']."</u>";?></h3>
</div> <br>
<div id="container" style="position:absolute; margin-top:15%; margin-left:6%; height:70%; width:75%; ">
<form action="../mailing manager/code/PHPMailer-master/examples/gmail.php" method="post" enctype="multipart/form-data">
<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter mymail-id : <input type="text" size="40" name="eid" required/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" size="40" name="p" placeholder="enter password here" required/> </h4>
<br>  
<textarea name="area2" cols="120" rows="10"  placeholder="write your report"  required></textarea>
<div id="container" style="position:absolute;  margin-top:-10%; margin-left:105%; height:20%; width:6%; "> 
<button id="btn" type="submit" name="attach">SUBMIT</button> 
 </form>
 </div>
 </div>
 </div>
</body>
<html>