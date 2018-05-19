<html>
<head><style>
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
</head>
<body bgcolor="#330000">
<div id="abc" style="position:absolute; height:20%; left:1%; top:1%; width:98%; background-color:#FF9900;">
<h1><font color="white"> PERSONAL DIARY </font></h1></div>
<div id="box" class="des" style="position:absolute; height:67%; left:10%; top:27%; width:80%;  ">
<div style="position:absolute; left:65%; top:7%;">
<form action="three.html" method="post">
<button id="btn"  type="submit" ><font color="red" size="3%"><b>BACK</b></font></button>  </form> </div> 
<div style="position:absolute; left:76%; top:7%;">
<form action="forgot.html" method="post">   <button id="btn2"  type="submit" ><font color="red" size="3%"><b>FORGOT PASSWORD</b></font></button>  </form>
</div>
<div style="position:absolute; height:10%; left:3%; top:20%; width:94%; background-color:#FF9900;  padding-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white" size="5%" face="Calibri">
<b>ENTER YOUR USER ID AND PASSWORD</b></font>
</div>
<div style="position:absolute; height:50%; left:3%; top:40%; width:94%;  padding-top:10px;" align="middle"> <br>
<form action="verify.php" method="post">
<table border="0">
<tr><td><p style="font-family:Calibri;"><font color="white" size="6%"><b>USER ID</b></font></p></td>
<td><font color="white" size="6%">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>    <td><input type="text" name="uid" size="30px;" required/></td></tr>
<tr><td><p style="font-family:Calibri;"><font color="white" size="6%"><b>PASSWORD</b></font></p></td><td><font color="white" size="6%">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td><td><input type="password" name="p" size="30px;" required/></td></tr>
</table> <BR> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div style="position:absolute; left:49%; top:72%;">   
<button id="btn"  type="submit" ><font color="red" size="3%"><b>LOGIN</b></font></button> </form> </div>
<div style="position:absolute; left:61.5%; top:72%;">   <form action="registration.php" method="post">
<button id="btn1"  type="submit" ><font color="red" size="3%"><b>REGISTER</b></font></button>  </form> </div>
</div> </div>
</body>
</html>