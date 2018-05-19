<html>
<head>
<style>
#box1
  {
   border-radius:15px 15px 15px 15px;
	//border-style: solid;
	border-color: #FF9900;
	border-width: 10px;
  }
  
  .des1{
     border-style: groove;
  }
#s { width:242px; }
#box {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 </style> </head>
 
<body bgcolor="#F2E4D5">
<div id="container1"  style="position: absolute; height:15%; width:100%; left:0%; top:0%; padding-top:15px; font-family: &quot;Courier New&quot;, Courier, mono; font-size:60px; background-color: #C87C5B; text-align:center;">
<b>ONLINE REGISTRATION FORM</b>
</div>

<div id="box" class="des" style="position: absolute; height:81%; top:17%; left:8%;  width:85%;  ">
<div id="container"  style="position: absolute; height:83%; left:2%; width:50%; top:1.5%; background-color: #CCCCCC; padding-top:5%;">
<form action="register.php" method="post">
<table align="center">
<tr>
<td><font size="4">Candidate's Name</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <select id="c" name="title">
<option>Mr.</option> 
<option>Mrs.</option> 
<option>Ms.</option> </select>  <input type="text" name="name" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Date of Birth</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="date" name="dob" placeholder="DD/MM/YYYY" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Sex</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <select id="s" name="sex">
<option>Male</option> 
<option>Female</option> 
<option>Transgender</option> </select> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Phone No. (Mobile)</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <input type="text"  name="n" size="3" placeholder="+91" required/> - <input type="tel" name="n2" pattern="[0-9]{10}" size="20" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Email ID</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>  <input type="email" name="eid" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Password</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>   <input type="password" name="p" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Confirm Password</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <input type="password" name="cp" size="30" required/> </td> </tr>
</table>
</div>

<div id="container"  style="position: absolute; height:83%; left:52%; width:42%; top:1.5%; background-color:CCCCCC;  padding-top:5%; padding-left:4%;">
<table align="center">
<tr>
<td><font size="4">Father's Name</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <select id="cf" name="title2">
<option>Mr.</option> 
 </select>  <input type="text" name="fname" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Address Line1</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="add1" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td align="right"><font size="4">Line2</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <input type="text" name="add2" size="30"/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">City</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <input type="text" name="city" size="30"  required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">State</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>  <input type="text" name="state" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Postal Code</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>   <input type="text" name="pc" size="30" required/> </td> </tr> <tr><td> <br> </td></tr>
<tr><td><font size="4">Country</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td> <input type="text" name="ct" size="30" required/> </td> </tr>
</table><br><br>
<div style="position: absolute;  left:-16%; "  >
<button type="submit" class="button">SUBMIT</button>
</form> </div>
</div> </div>
<!--<div id="container"  style="position: absolute; height:10%; left:5%; width:20%; top:81%; background-color: red; ">
<form action="" method="post">
<button type="submit">RESET</button>
</form>
</div> --> 
</body>
</html>