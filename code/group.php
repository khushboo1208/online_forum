<?php
 include('home.php');
?>
<html>
<head>
<title>
Group
</title>
<style>
 
  #btn{
    background: -moz-linear-gradient(left,red,red);
	background: -webkit-linear-gradient(left,red,red);
	background: -o-linear-gradient(left,#FFF284,#FFFF99,#7CEB98,#4AE371,#7CEB98,#A9CSEB,#8EB4E6);
	background: -ms-linear-gradient(left,red,red);
	background: linear-gradient(left,#FFF284,#7CEB98,#4AE371,#8EB4E6);
	width:120px;
	height:40px;
	
	border-radius:0px 15px 0px 15px;
	border-color:white;
  }
  
  #box
  {
   border-radius:15px 15px 15px 15px;
	border-style: solid;
	border-color: #B9264F;
  }
</style>
</head>
<body background="../picture/flower_f.png">
<div id="container" style="position:absolute; height:84%; left:75%;top:16%; width:25%;">

</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B><FONT COLOR="330099" SIZE="4"><U>CREATE A GROUP</U></FONT></B>
</br></br><form action="gdb.php" method="post" >
&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="e" placeholder="enter email-id" size="30%" required/></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;
	   <input type="password" name="p" placeholder="password" size="30%" required/></br></br>
	   &nbsp;&nbsp;&nbsp;&nbsp;
	   <input type="text" name="gn" placeholder="provide a name for the group" size="30%" required/></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;   
	   <textarea name="desc" cols="33" rows="12" id="txt" placeholder="need for this group" required></textarea>
</br> </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button id="btn" type="submit" name="attach"><font color="white" size="4%">CREATE</font></button> 
</form>
</div>
<div id="container" style="position:absolute; height:65%; left:3%;top:20%; width:68%; overflow:scroll;">

<br> <table>
<tr><th> <font FACE='AR JULIAN' size='5%' color='blue'> <i>GROUP NAME </i></font></th> <th>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th> <font FACE='AR JULIAN' size='5%' color='blue'> <i>NEED</i></font></th>  <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
  <th> <font FACE='AR JULIAN' size='5%' color='blue'> <i>CREATED ON</i></font></th></tr> 
<?php
include('conn.php');

$s="SELECT  `groupname`,`message`,`date` FROM `group` where `flag`='d' order by `id` desc ";
$m=mysqli_query($conn,$s);
while($data=mysqli_fetch_array($m))
{  
?>

<tr> <td>
<a href="grp_show.php?id=<?php echo $data[0];?>" style="text-decoration:none" ><?php echo "<font FACE='AR JULIAN' size='4.5%' color='red'>".$data[0]."</font>"; ?> </a></td> 
<td></td>
<td> <?php echo $data[1];?> </td> <td> </td>
<td> <?php echo $data[2];
 
}
?> </td>  
</tr>  </table> 
</div>   
<div id="box" style="position:absolute; height:9%; left:3%; top:87%; width:67%;">
</div>
<!-- bade wale div ka code here-->
</body>
</html>