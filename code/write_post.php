<?php
include('home.php');
session_start();

?>
<html>
<head>
<title>
Write Post
</title>
<style>
 
  #btn{
    background: -moz-linear-gradient(left,#3399CC,#3399CC);
	background: -webkit-linear-gradient(left,#3399CC,#3399CC);
	background: -o-linear-gradient(left,#3399CC,#3399CC);
	background: -ms-linear-gradient(left,#3399CC,#3399CC);
	background: linear-gradient(left,#3399CC,#3399CC);
	width:200px;
	height:40px;
	box-shadow:0px 0px 1px white;
	//text-shadow:1px 1px 1px white;

	font-size:24px;
	border-radius:20px 20px 20px 20px;
	border-color:white;
  }
</style>

</head>
<body background="../picture/bkg_f.png">
<div id="container" style="position:absolute;  top:19%; margin-left:6%; ">
<img src="../picture/Picture4.png" height="23%" width="53%">
</div>

<div id="container" style="position:absolute;  top:21%; margin-left:52%; ">
<img src="../picture/yellow.png" height="16%" width="200%"> <div id="container" style="position:absolute; top:24%; margin-left:20%; ">
<font color="#006600" face="AR CENA" size="10%" > <?php echo $_SESSION['value'];?>
</font>
</div> </div>

<br>
<div id="container" style="position:absolute;  top:48%; margin-left:2% ;">
<form action="writedb.php" method="post"><font face="Algerian" color="#FF6600" size="6%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="container" style="position:absolute;  top:-1%; margin-left:6% ">ENTER MYMAIL-ID : </div> <div id="container" style="position:absolute;  top:-2.8%; margin-left:39%;  " ><input  type="text" name="mid" size="30" required> &nbsp;&nbsp;&nbsp;&nbsp;<input  type="password" name="p" size="30" placeholder="enter password" required> </div>
<br>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="area" cols="130" rows="15" placeholder="write your post here..." required ></textarea>

 </div>
 <div id="container" style="position:absolute;  top:70%; margin-left:80%; ">
  <button id="btn" type="submit" name="attach"><font color="#FF6600">DONE</font></button> 
 </form>
 </div>
</body>
</html>