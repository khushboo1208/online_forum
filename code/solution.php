<html>
<head>
<style>
b.up{ text-transform:uppercase;}
</style>
</head>
<body>
<?php
session_start();
include('home.php');
include('conn.php');
$h=$_SESSION['head']=$_GET["id"];
?>
<div id="main" style="position:absolute; height:80%; left:2%;top:15.2%; width:95%;">
<br><br>
<center> <font color="#000066" face="Cooper Black" size="5%">
<?php echo "<b class='up'>".$h."</b>"; ?> </font>
</center>
 <table> 
<?php

$se="select developer_sol.solution,sum(agree),sum(disagree) from sol_choice,developer_sol where sol_choice.solution=developer_sol.solution and developer_sol.headline='".$h."' and counter='s1'";
$q=mysqli_query($conn,$se) or die(mysqli_error($conn));

while($r=mysqli_fetch_array($q))
 {  if($r[0]==null)
 {
   $se1="select solution from developer_sol where headline='".$h."' and counter='s1'";
 $q1=mysqli_query($conn,$se1) or die(mysqli_error($conn));
 while($r1=mysqli_fetch_array($q1))
 {  ?> <tr><td> <?php
   echo "<b>".$r1[0]."</b>"."&nbsp;&nbsp;&nbsp;&nbsp;";  ?>   </b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>   <a href="aid.php?id=<?php echo $r1[0]; ?>">  <img src="../picture/agree.png" height="50%" width="40%"></a> (0)
  </td>  <td>
   <a href="did.php?id=<?php echo $r1[0]; ?>">  <img src="../picture/disagree.png" height="60%" width="50%"></a> (0)  </td>
 <?php  }
 }
 else{  ?>  <td> <?php
 echo "<b>".$r[0]."</b>"."&nbsp;&nbsp;&nbsp;&nbsp;";
 ?>      </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>
<a href="aid.php?id=<?php echo $r[0]; ?>">  <img src="../picture/agree.png" height="50%" width="40%"></a>
<?php echo "(".$r[1].")";  ?> </td><td>

<a href="did.php?id=<?php echo $r[0]; ?>"> <img src="../picture/disagree.png" height="60%" width="50%"></a></a> 
<?php echo "(".$r[2].")";    ?> </td></tr>   <?php
}  }
 ?>
  
 <?php  
 
 $se2="select developer_sol.solution,sum(agree),sum(disagree) from sol_choice,developer_sol where sol_choice.solution=developer_sol.solution and developer_sol.headline='".$h."' and counter='s2'";
$q2=mysqli_query($conn,$se2) or die(mysqli_error($conn));

while($r2=mysqli_fetch_array($q2))
 {  if($r2[0]==null)
 {
   $se3="select solution from developer_sol where headline='".$h."' and counter='s2'";
 $q3=mysqli_query($conn,$se3) or die(mysqli_error($conn));
 while($r3=mysqli_fetch_array($q3))
 {   ?>

<tr><td>

 <?php
   echo "<b>".$r3[0]."</b>"."&nbsp;&nbsp;&nbsp;&nbsp;";  ?> </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>  <a href="aid.php?id=<?php echo $r3[0]; ?>">  <img src="../picture/agree.png" height="50%" width="40%"></a> (0)
</td>
 <td>  <a href="did.php?id=<?php echo $r3[0]; ?>"><img src="../picture/disagree.png" height="60%" width="50%"></a> (0)  </td>
 <?php  }
 }
 else{   ?>
 <td>
 <?php echo "<b>".$r2[0]."</b>"."&nbsp;&nbsp;&nbsp;&nbsp;";
 ?>       </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>  <a href="aid.php?id=<?php echo $r[0]; ?>"> <img src="../picture/agree.png" height="50%" width="40%"></a>   
<?php echo "(".$r2[1].")";
  
 ?>  </td>
<td>
<a href="did.php?id=<?php echo $r[0]; ?>"> <img src="../picture/disagree.png" height="60%" width="50%"></a>
<?php echo "(".$r2[2].")";       ?> </td>
 <?php
}  }

 ?>
</tr>

 <?php 
$se4="select developer_sol.solution,sum(agree),sum(disagree) from sol_choice,developer_sol where sol_choice.solution=developer_sol.solution and developer_sol.headline='".$h."' and counter='s3'";
$q4=mysqli_query($conn,$se4) or die(mysqli_error($conn));

while($r4=mysqli_fetch_array($q4))
 {  if($r4[0]==null)
 {
   $se5="select solution from developer_sol where headline='".$h."' and counter='s3'";
 $q5=mysqli_query($conn,$se5) or die(mysqli_error($conn));
 while($r5=mysqli_fetch_array($q5))
 {  ?> <td>
 <?php
   echo "<b>".$r5[0]."</b>"." &nbsp;&nbsp;&nbsp;&nbsp;";  ?>  </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <td> <a href="aid.php?id=<?php echo $r5[0]; ?>"> <img src="../picture/agree.png" height="50%" width="40%"></a> (0)  
  </td>
 <td>  <a href="did.php?id=<?php echo $r5[0]; ?>"> <img src="../picture/disagree.png" height="60%" width="50%"></a> (0)  </td>
 <?php  }
 }
 else{    ?>    <td>
 <?php
 echo "<b>".$r4[0]."</b>"."&nbsp;&nbsp;&nbsp;&nbsp;";
 ?>      </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>
<a href="aid.php?id=<?php echo $r4[0]; ?>">  <img src="../picture/agree.png" height="50%" width="40%"></a>
<?php echo "(".$r4[1].")";
  
 ?>  </td>
<td>
<a href="did.php?id=<?php echo $r4[0]; ?>"> <img src="../picture/disagree.png" height="60%" width="50%"></a> 
<?php echo "(".$r4[2].")";   ?> </td> </tr> <?php
}  }
 ?>
 <br> <br>
</div>
</body>
</html>