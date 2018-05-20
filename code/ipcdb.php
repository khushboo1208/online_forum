<html>
<body>
<div style="position:absolute; height:100%; left:0%; top:0%; width:100%; background-color:#FFFFCC;">
<div id="abc" style="position:absolute; height:80%; left:10%; top:10%; width:80%; background-color:#FFCC66;">

<?php
include('conn.php');
$flag=0;
$i=$_REQUEST['ipc'];
$sel="select * from sections where ipcno='$i'";
$q=mysqli_query($conn,$sel);
while($w=mysqli_fetch_array($q))
{ 

echo "<br><center><font FACE='AR JULIAN' size='6.5%' color='red'>"."Chapter -"."&nbsp;".$w[0]."</font></center>";
echo "&nbsp;&nbsp;&nbsp;<font FACE='AR JULIAN' size='6.5%' color='red'>"."Section -"."&nbsp;".$w[1]."</font>";
echo "<center><font FACE='AR JULIAN' size='6.5%' color='red'><u>".$w[2]."</u></font></center><br><br>";
echo "<center><font  size='5.5%' color='red'>".$w[3]."</font></center>";

$flag=1;
}

if($flag==0)
echo "<br><br><br><br><br><br><br><br><br><center><font FACE='AR JULIAN' size='6.5%' color='red'>"."this ipc number does not exist."."</font></center>";


?>
</div><div>
</body>
</html>