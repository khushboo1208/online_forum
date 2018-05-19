<?php 
include('conn.php');
include('home.php');
session_start();
?>
<html>
<head>
<script src="jquery-1.7.min.js"></script>
<script type="text/javascript">
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
</script>

<script src="jquery-1.7.min.js"></script>
<script type="text/javascript">

function func() {
$(function(){

	//alert("welcome");
	//jQuery
        
		//var vl = document.getElementById('mfile').value;
		//alert(vl);
		$.ajax({
			url: "sec_trans.php",
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
      
		//var vl = document.getElementById('mfile1').value;
		//alert(vl);
		$.ajax({
			url: "sec_corr.php",
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
       
		//var vl = document.getElementById('mfile2').value;
		//alert(vl);
		$.ajax({
			url: "sec_road.php",
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
        
		//var vl = document.getElementById('mfile3').value;
		//alert(vl);
		$.ajax({
			url: "sec_secu.php",
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
       
		//var vl = document.getElementById('mfile4').value;
		//alert(vl);
		$.ajax({
			url: "sec_edu.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

function func5() {
$(function(){

	//alert("welcome");
	//jQuery
        
		var vl = document.getElementById('mfile5').value;
		//alert(vl);
		
		$.ajax({
			url: "sec_media.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

function func6() {
$(function(){

	//alert("welcome");
	//jQuery
       
		//var vl = document.getElementById('mfile6').value;
		//alert(vl);
		$.ajax({
			url: "sec_misc.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}
</script>
<style>
 #btn{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
  
  #btn1{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
  
  #btn2{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
  
  #btn3{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
  
  #btn4{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
  
  #btn5{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
  
  #btn6{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;

	border-width:0px;
  }
</style>
</head>
<body>

<div id="container1" style="position:absolute; height:85%;  background-color:6633CC; left:0%; top:15%; width:100%;">

<div id="container" style="position:absolute; background-color:#FFA8A8; left:2%; top:5%; width:20%; ">


 <br>
<center>
 <button id="btn" onclick="func()"><font size="4px" color="#FFFFFF">Transport</font></button><br/><br/>
 <button onclick="func1()" id="btn1"><font size="4px" color="#FFFFFF">Corruption</font></button><br/><br/>
 <button onclick="func2()" id="btn2"><font size="4px" color="#FFFFFF">Road-rage</font></button><br/><br/>
 <button onclick="func3()" id="btn3"><font size="4px" color="#FFFFFF">Security</font></button><br/><br/>
 <button onclick="func4()" id="btn4"><font size="4px" color="#FFFFFF">Education</font></button><br/><br/>
 <button onclick="func5()" id="btn5"><font size="4px" color="#FFFFFF">Media</font></button><br/><br/>
 <button onclick="func6()" id="btn6"><font size="4px" color="#FFFFFF">Miscellaneous</font></button><br/><br/>
</center>

</div>

<div id="txt" style="position:absolute; left:25%; top:5%; background-color: white; width:73%; height:90.5%;overflow:scroll">

<?php include('sec_misc.php');?>
</div>

</div>
</body>
</html>