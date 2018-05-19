<html>
<head>
<script src="jquery-1.7.min.js"></script>
<script type="text/javascript">
function loadDoc1() {
$(function(){

	var vl = document.getElementById('f1').value;
		
		$.ajax({
			url: "case_open.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#demo" ).html( html );
  });
	
	
});
}

function loadDoc2() {
$(function(){

	var vl = document.getElementById('f2').value;
		
		$.ajax({
			url: "newcase1.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#demo" ).html( html );
  });
	
	
});
}

</script>
<style>
#box
  {
   border-radius:15px 15px 15px 15px;
	//border-style: solid;
	border-color: #FF9900;
	border-width: 10px;
  }
  
  .des{
     border-style: groove;
  }
  
  #btn{

	height:35px;
	width:90px;
	font-size:20px;
	}
	
	#btn1{

	height:35px;
	width:110px;
	font-size:20px;
	}
	
	#btn2{

	height:35px;
	//width:110px;
	font-size:20px;
	}
  </style>
  <style type="text/css">
.btn{

	height:40px;
	
}
</style>
</head>
<body bgcolor="#330000">
<div id="abc" style="position:absolute; height:17%; left:1%; top:1%; width:98%;background-color:#FF9900; ">
<div style="position:absolute;left:2%; top:2%;">
<img src="../picture/legal logo1.jpg"  width="130" height="104"> </div>
<div style="position:absolute; right:45%; top:15%;">
<h1><font color="white"> PERSONAL DIARY </font></h1>
</div>

<div style="position:absolute; background-color:red; right:5%;  height:100%;  top:0%; width:15%;">WELCOME
<br> <br>
<?php   
session_start();
include('conn.php');
$id=$_SESSION['value'];
$p=$_SESSION['passw'];

$sel="select name from lawyer_details where emailid='".$id."'";
$q=mysqli_query($conn,$sel);
while($data=mysqli_fetch_array($q))
{
echo $data[0];
}
?>
<br><br><br>
<form action="logout.php" method="post" align="right">
<button>LOGOUT</button>
</form>
</div>
</div>

<div id="abc1" style="position:absolute; top:18%; left:0;   width:100%; ">
<div id="abc2" style="position:absolute;  left:25%; "><button id="f1" class="btn" type="button" onclick="loadDoc1()"><font color="red" size="3%">CASE DIARY</font></button></div>
<div id="abc3" style="position:absolute;  left:39%; "><button id="f2" class="btn" type="button" onclick="loadDoc2()" ><font color="red" size="3%">NEW CASE</font></button></div>
<div id="abc8" style="position:absolute;  left:52%; "><a href="profile.php" ><button id="f3" class="btn" type="submit" ><font color="red" size="3%">PROFILE</font></button></a></div>
<div id="abc4" style="position:absolute;  left:64%; "><a href="main.php" ><button  class="btn" type="submit" name="search2"><font color="red" size="3%">HOME</font></button></a></div>
<div id="abc5" style="position:absolute;  left:74%; "><a href="three.html" ><button  class="btn" type="submit" name="search3"><font color="red" size="3%">BACK</font></button></a></div>
</div>
<div id="demo">
</div>

</body>
</html>