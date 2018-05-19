<!--<html>
<head>                                                              -->
<script src="jquery-1.7.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//alert("welcome");
	//jQuery
	$("#mfile").change(function(){
		var vl = document.getElementById('mfile').value;
		//alert(vl);
		$.ajax({
			url: "ajax.php",
			type: "GET",
			data: {"v":vl}
		}).done(function( html ) {
    $( "#txt" ).append( "<span style='background:yellow;margin-left:100px;margin-top:50px'>"+html+"</span>" ).css('padding','0px');
  });
	})
	
});
</script>

<script type="text/javascript">
function fun()
{
window.location="PHPMailer-master/examples/gmail.php";
return false;
}
</script>

<!--</head>                                           -->
<style>
  /*div{
    width:200px;
	height:100px;
	background: -moz-linear-gradient(left,red,blue,red);
  }*/
  #btn{
    background: -moz-linear-gradient(left,#CC0066,#CC0066);
	background: -webkit-linear-gradient(left,#CC0066,#CC0066);
	background: -o-linear-gradient(left,#CC0066,#CC0066);
	background: -ms-linear-gradient(left,#CC0066,#CC0066);
	background: linear-gradient(left,#CC0066,#CC0066);
	width:150px;
	height:40px;
	box-shadow:0px 0px 1px white;
	//text-shadow:1px 1px 1px white;
	font-color:pink;
	font-size:24px;
	border-radius:20px 20px 20px 20px;
	border-color:white;
  }
</style>

<style type="text/css">
<!--
@import url("*");
.st {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	text-transform: uppercase;
	background-color: #990000;
}
.unnamed1 {
	background-image:url(670px-Write-a-Postcard-Step-4Bullet2.jpg);
}
-->
</style>
<link href="seed.css" rel="stylesheet" type="text/css">
<link href="ghj.css" rel="stylesheet" type="text/css">
<link	 href="*" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {font-size: 18px}
-->
</style>

<!--<body>  -->                                 
<script>
/*
$(document).ready(function(){

$("#k").submit(function(){
 $("#txt").text('red');
 });
 });
 */
</script>

<?php
/*
if(isset($_POST['attach'])){
$file_name=htmlspecialchars($_FILES['myfile']['name']);
$ex=explode(".",$file_name);
$target='myfiles/'.$file_name;
$file_location=$_FILES['myfile']['tmp_name'];
if(move_uploaded_file($file_location,$target))
{ // echo"file uploaded sucessfully";
//print_r($ex);
//$in="insert into images(image) values('$file_name') ";
//$m=mysqli_query($con,$in);
//header('Location:compose.php');
//echo header('Location: compose.php');
}
else
{
echo"some error";
}
}*/
?>


<div id="container" style="background-color:000099; height:22%;width:860px; font-style:italic;">
<h1><font color="white" > <br/> <center>NEW MESSAGE</center> </h1>
</div>
</br>
<!--<form action ="PHPMailer-master/examples/gmail.php" method="post"  > -->
<form action="PHPMailer-master/examples/gmail.php" method="post" enctype="multipart/form-data">
<div id="container" style="height:10%; width:100%;">


<h2> &nbsp; To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="40" name="t" required/> 
</h2>  

</div>

<div id="container" style="height:10%; width:100%;">
<h2>
&nbsp;Subject:&nbsp;<input type="text" name='s' size="40"/> 
</h2>
<h2>&nbsp;</h2>
<div style="margin-bottom:200px; "> 
   <h2> &nbsp;Content:</h2> </font>
<div style="margin-left:100px;margin-top:1px;">
 

  <textarea name="textarea" cols="70" rows="15" id="txt" ></textarea>
</div>
</div>
    <br>
</div>
<div id="container" style="height:35%; width:100%;"></div>

<div id="Layer1" style="position:absolute; background-color:#000099; padding-top:32px; padding-left:35px; top:660px; width:399px; height:73px; z-index:1; left:20px;">
<!--<input type="submit" value="send" name="send"/>
-->
&nbsp;&nbsp;
<input name = "myfile" type ="file" class="style4"  id="mfile">


 <!-- <object  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="161" height="81">
    <param name="movie" value="button8.swf">
    <param name="quality" value="high">
    <param name="bgcolor" value="#999999">
    <embed src="button8.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="161" height="81" bgcolor="#999999" onclick="return fun()"></embed>
  </object>--> 
</div>

<div id="Layer2" style="position:absolute; left:400px;background-color:#000099;  top:660px; width:150px;  padding-top:35px; padding-left:30px; height:70px; z-index:2">
  <!--<form name="form2" method="post" action="">
 <!-- <input type="button" value="attach" onclick="window.open('http://www.quackit.com/common/link_builder.cfm','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
    <input name="Submit2" type="submit" class="unnamed7" value="Attach">  
  </form>-->
</div>
<div id="Layer3" style="position:absolute; left:371px; top:660px; width:274px; height:70px;background-color: #000099;  padding-top:35px; padding-left:25px; z-index:3">
  <!-- <form name="form3" method="post" action="">
      <input name="Submit3" type="submit" class="unnn" value="delete">
  </form>  -->
</div> 
<div id="Layer4" style="position:absolute; left:500px; padding-top:32px; top:660px; width:310px; background-color: #000099; height:73px; z-index:4">


<!--<input type ="file" name = "f" id="f" >
<input type="submit" value="attach" name="attach" id="attach"> -->
<button id="btn" type="submit" name="attach"><font color="#FFFFFF">send</font></button>
</br>

</form>
<!--  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="90" height="57">
    <param name="movie" value="button9.swf">
    <param name="quality" value="high">
    <param name="bgcolor" value="#999999">
    <embed src="button9.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="90" height="57" bgcolor="#999999"></embed>
  </object>-->
</div>

<!--<div id="Layer6" style="position:absolute; left:792px; top:690px; width:208px; height:105px;background-color: #999999; z-index:6"></div>
<!--<div id="Layer5" style="position:absolute; left:1000px; top:690px; width:360px; height:105px;background-color: #999999; z-index:7"></div>-->

<!--
</body>
</html>                                   -->  

