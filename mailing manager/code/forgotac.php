<html>
<style>
  /*div{
    width:200px;
	height:100px;
	background: -moz-linear-gradient(left,red,blue,red);
  }*/
  #btn{
    background: -moz-linear-gradient(left,black,white,black);
	background: -webkit-linear-gradient(left,black,white,black);
	background: -o-linear-gradient(left,black,white,black);
	background: -ms-linear-gradient(left,black,white,black);
	background: linear-gradient(left,black,white,black);
	width:150px;
	height:45px;
	box-shadow:1px 1px 1px grey;
	text-shadow:1px 1px 1px yellow;
	border-radius:5px 5px 5px 5px;
	border-color:orange;
  }
  </style>
  <style>
.unnae67 {
	background-color: #9999CC;
}
body {
	background-color: #9999CC ;
}
  </style>

<?php
session_start();
include('conn.php');
//$a=trim($_REQUEST['uid']);
$_SESSION['ID']=$a=mysqli_real_escape_string($con,trim($_REQUEST['userid']));
echo "<h1>"."&nbsp;&nbsp;&nbsp;&nbsp;"."<u>".$_SESSION['ID']."</h1>"."</u>";
$flag=0;
$sel="select Emailid from detailtb";
$q=mysqli_query($con,$sel);
while($data=mysqli_fetch_assoc($q))
{
if($a==$data['Emailid'])
   {$flag=1;
     break;
	}
}	

if($flag==1)
{  
$s="select Secretq1,Secretq2 from detailtb where Emailid='$a'";
$qu=mysqli_query($con,$s);
$arr=array();
while($d=mysqli_fetch_assoc($qu))
{   $arr[]=$d;

}
}
if($flag==0)
 {
  header('location:error1.html');
 
 }
?>

<html>
<body class="unnae67">
<br>
<table>
<?php foreach($arr AS $val):  ?>
<tr>
<td>
<?php echo "<h2>"."&nbsp;&nbsp;".$val['Secretq1']."</h2>";  ?>
</td>
<td> <form action="forgot2.php" method="post">

 &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="an1" size=40 required/>
</td>
</tr>
<tr>
<td> 
<?php echo "<font size='5px'>"."<b>"."&nbsp;&nbsp;".$val['Secretq2']."</b>"."</font>";  ?>
</td>
<td> 
  &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="an2" size=40 required/>
</td>
</tr>
<?php endforeach; ?> 
</table>
<br/>
<br/> 
<br/> 
<br/> 
<button id="btn" style="margin-left:620px; "><font size="5px" style="font-style:italic " color="#FF9900">continue</font></button>
<!-- <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="202" height="86"  vspace="70px" style="margin-left:500px"/>
  <param name="movie" value="button1.swf" >
  <param name="quality" value="high">
  <embed src="button1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="202" height="86" ></embed>
</object>-->
</form>
</body>
</html>