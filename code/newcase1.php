<html>
<head>
<style type="text/css">
.d1{
//background-color:red;
color:red;
}
</style>
<style>
#box
  {
   border-radius:15px 15px 15px 15px;
	//border-style: solid;
	border-color: #FF9900;
	border-width: 10px;
  }

#btn{

	height:35px;
	font-size:20px;
	}
	
.des{
     border-style: groove;
  }	
</style>
</head>
<body> 
<div id="box" class="des" style="position:absolute; height:65%; left:10%; top:29%; width:80%;  ">
<div style="position:absolute; height:91%; left:10%; top:4%; width:80%;  background-color:#FF9900; ">
<br><center>
<p style="font-family:Calibri;"><font color="white" size="6%"><b>CASE DIARY</b></font></p></center>
<br>
<form action="case_submit.php" method="get">
<table align="center">
<tr><td><p style="font-family:Calibri;"><font color="white" size="6%"><b>Case Number</b></font></p></td><td><font color="white" size="6%">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>    <td><input type="text" name="cno" size="30px;" required/></td></tr>
<tr><td><p style="font-family:Calibri;"><font color="white" size="6%"><b>Case Date</b></font></p></td><td><font color="white" size="6%">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td><td><input type="date" name="cdate" style="width:242px;" required/></td></tr>
<tr><td><p style="font-family:Calibri;"><font color="white" size="6%"><b>Client Name</b></font></p></td><td><font color="white" size="6%">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td><td><input type="text" name="cname" size="30px;" required/></td></tr>

</table> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div style="position:absolute; left:50.5%; top:75%;">   

<button id="btn"  type="submit" name="submit" ><font color="red" size="3%"><b>SUBMIT</b></font></button> 
</form> </div>
<div style="position:absolute; left:67%; top:75%;">  
<form action="account.php" method="post">
<button id="btn"  type="submit" ><font color="red" size="3%"><b>CANCEL</b></font></button> </form> </div>

</div></div>
</body></html>