<?php 
include('conn.php');
include('home.php');
session_start();
?>
<head>
<style>
 .btn{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	width:150px;
	height:50px;
	border-radius:6px 6px 6px 6px;
	border-color:white;
	border-width:0px;
  }
</style>
</head>
<body>

<div id="container1" style="position:absolute; height:85%;  background-color:6633CC; left:0%; top:15%; width:100%;">

<div id="container" style="position:absolute; background-color:#FFA8A8; left:2%; top:5%; width:20%; ">
 <br>
<center>
 <button class="btn" onclick="abc()"><font size="4px" color="#FFFFFF">Transport</font></button><br/><br/>
 <button onclick="func1()" class="btn"><font size="4px" color="#FFFFFF">Corruption</font></button><br/><br/>
 <button onclick="func2()" class="btn"><font size="4px" color="#FFFFFF">Road-rage</font></button><br/><br/>
 <button onclick="func3()" class="btn"><font size="4px" color="#FFFFFF">Security</font></button><br/><br/>
 <button onclick="func4()" class="btn"><font size="4px" color="#FFFFFF">Education</font></button><br/><br/>
 <button onclick="func5()" class="btn"><font size="4px" color="#FFFFFF">Media</font></button><br/><br/>
 <button onclick="func6()" class="btn"><font size="4px" color="#FFFFFF">Miscellaneous</font></button><br/><br/>
</center>

</div>

<div id="txt" style="position:absolute; left:25%; top:5%; background-color: white; width:73%; height:90.5%;overflow:scroll">

<?php include('sec_misc.php');?>
</div>

</div>
<script src="jquery-1.7.min.js"></script>
<script>
$( document ).ready(function() {
	
	func = function() {
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
}

func1 = function() {
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





func2 = function() {
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

func3 = function () {
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

func4 = function() {
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

func5 = function() {
$(function(){

	//alert("welcome");
	//jQuery
        
		// var vl = document.getElementById('mfile5').value;
		//alert(vl);
		
		$.ajax({
			url: "sec_media.php",
			type: "POST",
			
		}).done(function( html ) {
    $( "#txt" ).html( html );
  });
	
	
});
}

func6 = function() {
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

});
</script>
</body>
