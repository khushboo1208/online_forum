<html>
<head><title>
</title>
<style>
#btn{

	height:40px;
	
}
</style></head>
<body bgcolor="#000033">
<div id="abc" style="position:absolute; height:20%; left:1%; top:1%; width:98%; background-color:#330099;">
<h1><font color="white"> INDIAN PENAL CODE </font></h1></div>

<div id="abc1" style="position:absolute; top:21%; left:0;  height:78%; width:100%; ">
<div id="abc2" style="position:absolute;  left:30%; "><button id="btn" type="button" onclick="loadDoc('search.html',myFunction)"><font color="red" size="3%">SEARCH IPC</font></button></div>
<div id="abc3" style="position:absolute;  left:43%; "><a href="allipc.php" ><button id="btn" type="submit" ><font color="red" size="3%">ALL IPC</font></button></a></div>
<div id="abc4" style="position:absolute;  left:53%; "><a href="main.php" ><button id="btn" type="submit" name="search2"><font color="red" size="3%">HOME</font></button></a></div>
<div id="abc5" style="position:absolute;  left:63%; "><a href="three.php" ><button id="btn" type="submit" name="search3"><font color="red" size="3%">BACK</font></button></a></div>
<div id="demo">
<div id="abc6" style="position:absolute; height:30%; left:5%; top:35%; width:55%; "><font color="#FF0099">
<p align="justify">
The Indian Panel Code(IPC) is the main criminal code of India. It is a comprehensive code to cover all substantive aspects of criminal law. the code was drafted in 1860 on the recommendations of first law commission of India established in 1834 under the government of India Act 1833 under the Chairmanship of Thomas Babington Macaulay.
Its obbjective is to provide a general penal code for India. This Code consolidates the whole of the law on the subject and is exhaustive on the matters in respect of which it declares the law,many more penal statutes governing various offences have been created in addition to the code. </p>
</font></div>

<div id="abc7" style="position:absolute; height:65%; left:66%; top:22%; width:30%; background-color:white;">
<br><center><h2>
<b>The Indian Penal Code, 1860</b></h2></center><br>
<table>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Citation</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>Act No.45 of 1860 </td></tr>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Territorial extent</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>India (except Jammu and Kashmir) </td></tr>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Enacted by</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>Legislative Council </td></tr>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Date enacted</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>6 October 1860 </td></tr>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Date assented to</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>6 October 1860 </td></tr>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Date commenced</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>1 January 1862 </td></tr>
<tr><td>   &nbsp;&nbsp;&nbsp;&nbsp;Committee report</td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td>First Law Commisssion </td></tr>
</table>

</div> </div>
</div>

<script>
function loadDoc(url, cfunc) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      cfunc(xhttp);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function myFunction(xhttp) {
  document.getElementById("demo").innerHTML = xhttp.responseText;
}
</script>



</body>
</html>