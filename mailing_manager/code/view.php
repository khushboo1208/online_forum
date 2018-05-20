<?php
session_start();
include('conn.php');
$b=$_SESSION['value'];
$s="select Firstname,Lastname,Address,Mobileno,profile_image from detailtb where Emailid='$b'";
$m=mysqli_query($con,$s);
$fa=array();
while($d=mysqli_fetch_assoc($m))
{  $fa[]=$d;
}
?>

<html>
<style type="text/css">
<!--
.unnam {
	font-family: "Courier New", Courier, mono;
	font-size: 30px;
	font-style: italic;
	font-weight: bold;
	color: #009933;
	text-decoration: underline;
	background-color: #FFFF66;
}
.unnam1 {
	background-image: url(b4.jpg);
}
-->
</style>
<link href="../css/qq.css" rel="stylesheet" type="text/css">
<body class="unnamed865">
<br>
<br><br>
<!-- image  -->
<table>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>
<?php foreach($fa AS $v):  ?>
		    <tr>
			  <td width="400"> 
			   <img src="myupload/<?php echo $v['profile_image']; ?>" width="400" height="420">
<!--<iframe src="blank.jpg" width="400px" height="400px" style="margin-left:30px; margin-top:95px; ">
			    </iframe>--> </td>
				  <td>
<table>


<tr>  <td> </td> </tr>
<tr>  <td> </td> </tr>

<tr>  <td> </td> </tr>
<tr>
<td> <h2> &nbsp; &nbsp;&nbsp; &nbsp;Name</h2> </td>
<td> <?php echo "<h2>".":"."&nbsp;&nbsp;".$v['Firstname']."&nbsp;".$v['Lastname']."</h2>"; ?>  </td>
</tr>
<tr>
<td> <h2>&nbsp; &nbsp;&nbsp; &nbsp;Mobile number &nbsp;&nbsp;: </h2> </td>

<td> <?php echo "<h2>"."&nbsp;".$v['Mobileno']."</h2>"; ?>  </td>
</tr>
<tr>
<td> <h2>&nbsp; &nbsp; &nbsp; Address </td>
<td> <?php echo "<h2>".":"."&nbsp;&nbsp;".$v['Address']."</h2>"; ?>  </td>
</tr>
<?php endforeach; ?>
</table>

<br>
<br>
<form action="edit.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  name="edit" type="submit" class="unnam" value="Edit"  >
</form>   
</td>
</table>
</body>
</html>

