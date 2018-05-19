<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.d1{
//background-color:red;
color:red;
}
</style>
<style>
#btn{

	height:40px;
	
}

#users{
 width:250px; 
height:40px;
font-size:20px; 
}


</style>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","allipc_db.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div style="position:absolute; top:20%; left:7%;">
<form>
<select name="users" onchange="showUser(this.value)" id="users" class="d1">
<option value="">Select an IPC number:</option>
<option value="378">378</option>
<option value="390">390</option>
<option value="410">410</option>
<option value="295">295</option>
<option value="298">298</option>
<option value="313">313</option>
<option value="303">303</option>
<option value="326">326</option>
<option value="376">376</option>
</select>
</form> </div>
<br>
<div id="txtHint" style="position:absolute; height:60%; left:35%; top:25%; width:55%; background-color:#FF4848;" ><b>IPC number information will be listed here.</b></div>

</body>
</html>