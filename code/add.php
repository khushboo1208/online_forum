
<html>
<head>

<style>
 
  #btn{
    background: -moz-linear-gradient(left,#59955C,#59955C);
	background: -webkit-linear-gradient(left,#59955C,#59955C);
	background: -o-linear-gradient(left,#59955C,#59955C);
	background: -ms-linear-gradient(left,#59955C,#59955C);
	background: linear-gradient(left,#59955C,#59955C);
	width:200px;
	height:40px;
	//box-shadow:0px 0px 1px white;
	//text-shadow:1px 1px 1px white;

	font-size:24px;
	border-radius:10px 10px 10px 10px;
	border-color:white;
  }
</style>
</head>
<body background="../picture/flower_f.png">
<form action="add_db.php" method="post">
<div id="container" style="position:absolute;  height:42%; left:28%;top:28%; background-color:#FFF06A; text-align:center; width:40%;">
<table align="center">

<tr> <td><font color="#59955C" face="AR CENA" size="6.7%">

Enter Mymail-id </td> <td><font color="#59955C" face="AR CENA" size="6.7%"> :<font></td> <td> <input type="text" size="30" name="eid"> </td> </tr> 
<tr> <td><font color="#59955C" face="AR CENA" size="6.7%">
Enter Password</td> <td> <font color="#59955C" face="AR CENA" size="6.7%"> :<font></td> <td> <input type="password" size="30" name="p"></td> </tr>
  </font> </table><br>
<button id="btn" type="submit" name="attach"><font color="#FFF06A" size="6%">DONE</font></button> 
</div>
</form>
</body>
</html>