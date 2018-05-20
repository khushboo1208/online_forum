<?php
include('conn.php');
$uid=$_GET["id"];

$sel="select * from sentmail where Sno='".$uid."'";
 $e=mysqli_query($con,$sel) or die(mysql_error());
$fi=array();    
 while($row=mysqli_fetch_array($e))
 {
 $fi[]=$row;
 /*echo $row['des'];
 echo $row['sourse'];
 echo $row['Subject'];
 echo $row['Body'];
 echo $row['Date'];
 echo $row['Time'];*/
 }
 ?>
 
 <html><style type="text/css">
<!--
body {
	background-color: #333333;
}
-->
</style>
 <body>

<?php foreach($fi AS $v):  ?>

<?php echo "<h2 align='center'>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$v['Date']."</br>";
 echo "<h2 align='center'>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$v['Time'];  ?>
<h2>
TO : 
 <?php echo $v['des']."</h2>"."<hr>"; ?> 

<h2>
FROM : 
<?php echo $v['sourse']."</h2>"."<hr>";  ?>  
<h2>
SUBJECT : <?php echo $v['Subject']."</h2>"."<hr>";  ?> 
<h2>
MESSAGE : 
<?php echo $v['Body']."</h2>";  ?>  

<?php  endforeach;?>



</body>
</html>