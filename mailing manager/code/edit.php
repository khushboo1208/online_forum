<?php
session_start();
include('conn.php');
$b=$_SESSION['value'];
$se="select Firstname,Lastname,Address,Mobileno from detailtb where Emailid='$b'";
$my=mysqli_query($con,$se);
$fa=array();
while($d=mysqli_fetch_assoc($my))
{  $fa[]=$d;
}
?>

<html>
<style type="text/css">

.unnam {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
	font-style: italic;
	font-weight: bolder;
	color: #333399;
	text-decoration: underline;
	background-color: #FF99CC;
	background-image: url(green-leaves-widescreen-in-961307.jpg);
}



</style>
<link href="../css/qq.css" rel="stylesheet" type="text/css">
<body class="unnamed78">
<!-- image  -->

<?php foreach($fa AS $v):  ?>

<table align="center">
<form action="save.php" method="post">
<tr>  
<td>
<h2>Mobile no.:</h2></td> 
 <td> <h2><input type="text" name="m" value="<?php echo $v['Mobileno']; ?>" /> </td>
 </tr> <br/>
<tr>
<td><h2>Address:   </h2>  </td> 
  <td><h2><input type="text" name="a" value="<?php echo $v['Address']; ?>" /> </td> 
  </tr>
<br/> 
<br/>
<tr>  <td> </td> </tr>
<tr>
<td> <h2><u>Change Password</u> </h2></td> 
 </tr>
<tr> 
 <td><h2> New Password:</h2></td> 
 <td><h2> <input type="password" name="np"/>  </td>
 </tr><br/>
<tr>
 <td><h2>Comfirm Password:</h2></td> 
 <td><h2><input type="password" name="cp" /> </td>
 </tr> <br/>
<br/>
</table>
<br/>
<center> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" class="unnam" value="Save">
</center>  
</form>

<?php endforeach;  ?>

</body>
</html>