<?php session_start();?>
<html>
<head>
<title>Untitled Document</title>
<link href="../css/aabb.css" rel="stylesheet" type="text/css">
<link href="../css/aabc.css" rel="stylesheet" type="text/css">
<script src="../css/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="rollover.js"></script>
<script src= "jquery-1.7.min.js"></script>
<script language="JavaScript" type="text/JavaScript">

<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<script>
  function del() {
    if (document.getElementById('mychk').checked) {
	 var vl = document.getElementById('mychk').val();
	  $.ajax({
	  url: 'marked.php',
	  type: 'post'
	  data: {'val':vl}
	  });
  
	}
	//return;
  }
</script>
<link href="../css/ghj.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style10 {
	font-size: 35px;
	font-style: italic;
	color: #000066;
}
.style11 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>

<style>
  /*div{
    width:200px;
	height:100px;
	background: -moz-linear-gradient(left,DARK GREEN,GREEN);
  }*/
  #mybtn{
    background: -moz-linear-gradient(left,#006633,#66FF00,#006633,#66FF00,#006633);
	background: -webkit-linear-gradient(left,#006633,#66FF00,#006633,#66FF00,#006633);
	background: -o-linear-gradient(left,#006633,#66FF00,#006633,#66FF00,#006633);
	background: -ms-linear-gradient(left,#006633,#66FF00,#006633,#66FF00,#006633);
	background: linear-gradient(left,#006633,#66FF00,#006633,#66FF00,#006633);
	width:80px;
	height:35px;
	box-shadow:1px 1px 1px grey;
	text-shadow:1px 1px 1px yellow;
	border-radius:10px 0px 10px 0;
	border-color:orange;
  }
</style>

<style>

#lb {
    display:none;
	width:330px;
	height:200px;
	position:fixed;
	top: 100px;
	left:980px;
/*	right:200px;
 
	margin-left:auto;
	margin-right:auto;
	margin-top:0px;
	margin-bottom:500px;
	*/
	/*background:rgba(99,00,99,1);*/
	background-color:#990099;
	opacity:1;
	z-index:20;
	box-shadow:0 0 5px yellow;
	border-radius:15px 15px;
    -moz-border-radius:15px 15px;
    -webkit-border-radius: 15px 15px; 
    
    -moz-box-shadow:0 0 10px 5px 10 grey;
    -webkit-box-shadow:0 0 5px yellow ;
}

</style>

<script src="jquery-1.7.min.js"></script>
<script type="text/javascript">
function func() {
$(function(){

	//alert("welcome");
	//jQuery

		var vl = document.getElementById('mfile').value;
		//alert(vl);
		$.ajax({
			url: "inbox.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

function func1() {
$(function(){

	//alert("welcome");
	//jQuery

		var vl = document.getElementById('mfile1').value;
		//alert(vl);
		$.ajax({
			url: "sentmail.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

function func2() {
$(function(){

	//alert("welcome");
	//jQuery

		var vl = document.getElementById('mfile2').value;
		//alert(vl);
		$.ajax({
			url: "drafts.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

function func3() {
$(function(){

	//alert("welcome");
	//jQuery

		var vl = document.getElementById('mfile3').value;
		//alert(vl);
		$.ajax({
			url: "allmails.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

function func4() {
$(function(){

	//alert("welcome");
	//jQuery

		var vl = document.getElementById('mfile4').value;
		//alert(vl);
		$.ajax({
			url: "hang.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}
</script>
<script>
function func5() {
$(function(){

	//alert("welcome");
	//jQuery

		var vl = document.getElementById('mfile5').value;
		//alert(vl);
		$.ajax({
			url: "marked.php",
			type: "POST",
			
		}).done(function( html ) {
//    $( "#txt" ).html( html );
  });
	
	
});
}
</script>

<script>
/*function hello() {
  alert('hello');
}*/
//jQuery  #-->object of jquery
jQuery(document).ready(function(){

//jQuery(function(){
  //  $('#mybtn').click(function(){
	//  alert('hello');
//	});
    $('#popup').click(function(event){
	//alert("welcome");
	  $('#lb').toggle('slow');
	  event.preventDefault();
	});
	
	});
</script>


<link href="../css/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="position:absolute; left:329px; top:172px; background-color: CC0066; width:63px; height:69.5%;">
  </div>
<div id="txt" style="position:absolute; left:391px; top:172px; background-color: CC0066; width:968px; height:69.5%;overflow:scroll">
<?php
include('compose.php');
?>
</div>


<!--
<div id="Layer1" style="position:absolute; background-color:#000000;  left:858px; top:110px; width:136px; height:106px; padding-right:30px; padding-top:24px ;  z-index:1">
<form action="login.php" method="post" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" class="abcd" value="log-out"/> </form>
</div>



  
  
  
<div id="container" style=" margin-top:110px; left:-10px;  background-color:black;  height:130px;width:855px;"> <br/>
<h1><font color="blue" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
<select class="unnamed1">

<option><h1>Mymails</option>
<option>Contacts</option>

</select>    

</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<input type="submit" class="abcd" value="select"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="abcd" value="refresh"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="abcd" value="more"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="abcd" value="setting"/> 
</br>
</h1>
</div>

-->

  <div id="lb">
		<table>
		    <tr>
			  <td width="100">
				  <!--<iframe src="blank.jpg" name="iframe_b" width="100px" height="100px" style="margin-left:10px; margin-top:10px; ">
				  </iframe>-->
                				  
			  </td>
			  <td width="100">  
					<?php
							include('profile.php');  
							
					?> 
			  </td>
			</tr>
		</table>
    </div>  
  
    <!--<div id="Layer4" style="position:absolute; left:807px; top:96px; width:167px; height:132px; z-index:1021">
		<?php
         /*include('profile.php');  
			echo "test";*/
		?> 
 
    </div>-->

  <ul id="MenuBar1" class="MenuBarHorizontal" style="margin-top:100px;" >
  <li><a href="aboutus.php">About us</a></li>
    <li><a class="MenuBarHorizontal" href="#">Select</a>
      <ul>
        <li><a  class = "chkall" onclick = "chkall()" id="chkall">All</a></li>
        <li><a  class = "unchk" onclick = "unchk()" id="unchk">None</a></li>
       <!-- <li><a href="#">Read</a></li>
        <li><a href="#">Unread</a></li>-->
      </ul>
    </li>
    <li><a href="refresh.php">Refresh</a></li>
 <!--   <li><a class="MenuBarItemSubmenu" href="#">Delete</a>
      <ul>
        <li><a  onclick = "del()">Marked</a></li>
        <li><a href="#">Unmarked</a></li>
</ul>
    </li>         -->
    <li><a href="#" class="MenuBarItemSubmenu">Settings</a>
      <ul>
        <li><a href="theme.php">Themes</a></li>
     <!--   <li><a href="help.html">Help</a></li>          -->
      </ul>
    </li>
	<li><a  href="help.html">Help</a>
                 
    </li> 
	
    <li><a href="thank.php">Logout</a></li>
	
	
</ul>
  


<div  style=" top:172px;background-color:000099;  height:533px; width:321px; ">  <!--0000CC-->

<br>
<br>
<br>
 <form action="" method="post">  
 <br/>
<br>
<br>
<br>  <center>
<input type="submit" class="ab" target="iframe_a" value="compose">  
  </form>  
 
 <h2>
 
&nbsp; <a  onclick="func()" id="mfile"><font color="white"><u> <B> Inbox </B> </u></a><br/><br/>
&nbsp; <a onclick="func1()" id="mfile1"><u> Sent mail </u></a><br/><br/>
&nbsp; <a onclick="func2()" id="mfile2"><u>  Drafts </u></a><br/><br/>
&nbsp; <a onclick="func3()" id="mfile3"><u>   All mails </u> </a><br/><br/>
&nbsp; <a onclick="func4()" id="mfile4"><u> Hangouts </u></a><br/><br/> </font>
&nbsp; <a href="chat.html" ><font color="white"> Chats </a><br/><br/>  </font>

 </center>
</h2>
</div>

<div style="position:absolute; top:633px; background-color: #666666; width:99%; height:31px;">

</div>

<div id="Layer1" style="position:absolute; left:8px; top:0px; width:410px; height:100px; padding-top:0px;background-color:#666666; z-index:1">

  <p class="style10"><marquee scrolldelay="500" direction="right"><span class="style11"> MYMAILS</span> </marquee></p>
</div>
<div id="Layer2" style="position:absolute; left:411px; top:0px; width:947px; height:100px; background-color:#666666; z-index:2"> 
 

<div style="margin-top:20px;float:left; left:411px; width:600px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<form  method="get" action="http://www.google.com/search">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <input placeholder="search" type="search" name="q" autocomplete="off" size=35>
 &nbsp;&nbsp; &nbsp; &nbsp;  
<button id="mybtn" type="submit" style="font-style:oblique;border-radius:10px 0px 10px 0px;"><font color="#FF0000" size="5px"><b>GO</b></font></button>
<!--
<object  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="76" height="87" style="margin-top:14px;">
     <param name="movie" value="button5.swf">
     <param name="quality" value="high">
     <param name="bgcolor" value="#666666">
     <span id "wow" ><embed onclick="hello();" src="button5.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="76" height="87" style="margin-top:20px;" bgcolor="#666666"></embed></span>
  </object>   -->
  
</form>
</div>
<!--<input name="s" type="text" placeholder="search" size="35"></div>--->
 

  <div id="main" style="float:left;margin-top:7px; left:1112px;">
&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <!-- <button id="popup">Profile</button>--><a href="http://www.yahoo.com" id="popup">
  <?php   
  echo "<font color='blue'>"."<h2>".$_SESSION['value']."</h2>"."</font>";?>  
  </a>
  </div>
    
</div>
&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
   </p>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../css/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../css/SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
 
 
  
</body>
</html>
