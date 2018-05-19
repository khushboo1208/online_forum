
<script src="jquery-1.7.min.js"></script>
<?php
session_start();
include('conn.php');
$a=$_SESSION['value'];

/* $sel="select * from sentmail order by Sno desc";
 $e=mysqli_query($con,$sel);
 $finaldata=array();   
 
 while($row=mysqli_fetch_assoc($e))
 {  if($row['des']==$_SESSION['value'])
{   $finaldata[]=$row;              }
 }  */

 $sel="select * from sentmail where sourse='$a' order by Sno desc  ";
 $d=mysqli_query($con,$sel);
 $finaldata=array();
 
 while($row=mysqli_fetch_assoc($d))
 
 {        $finaldata[]=$row;

 }
 
 $se="select * from sentmail  where des='$a' order by Sno desc  ";
 $dt=mysqli_query($con,$se);
 $finald=array();
 
 while($row1=mysqli_fetch_assoc($dt))
 
 {        $finald[]=$row1;

 }
 ?>
 
 <html>
<head>
<title>all mails
</title>

</head>
 <style type="text/css">
<!--
.unnamed1 {
	font-size: 24px;
	font-weight: bold;
	text-transform: lowercase;
	color: #FF6699;
	text-decoration: underline;
	background-color: #006699;
}
-->
 </style>
<body class="unnamed8">
</br>

 
<table border='5px'>
  <tr>  
  
  <th><h2> To</th>
  <th><h2> Subject</th>
  <th><h2> Message</th>
  <th><h2> Date</th>
  <th><h2>Time</th>
  <th><h2> Status </h2></th>
  </tr>
  
  <?php   foreach($finaldata AS $val): ?>
  
  <tr>
 <!--  <th> <br/>
    <input name="checkbox[]" type="checkbox" value="<?php echo $val['Sno'];?>" class = "chk">
   </th>        -->
  <th> <font color="white"> <?php echo $val['des'];?></th>
  <th> <a href="sub.php?id=<?php echo $val['Sno'];?>" > <font color="white"><?php echo $val['Subject'];?> </a></th>
  <th><font color="white"> <?php echo $val['Body'];?></th>
  <th> <font color="white"><?php echo $val['Date'];?></th>
  <th> <font color="white"><?php echo $val['Time'];?></th>
   <th> <font color="white"><?php echo $val['Status'];?></th>
  </tr>
  
  <?php endforeach; ?>
  
  
   <?php   foreach($finald AS $va): ?>
   <tr>
 <!--  <th><br/>
    <input name="checkbox[]" type="checkbox" value="<?php echo $val['Sno'];?>" class="chk">
  </th>    -->
  <th> <font color="white"><?php echo $va['des'];?></th>
  <th><a href="sub.php?id=<?php echo $val['Sno'];?>" >  <font color="white"> <?php echo $va['Subject'];?> </a></th>
  <th><font color="white"> <?php echo $va['Body'];?></th>
  <th><font color="white"> <?php echo $va['Date'];?></th>
  <th><font color="white"> <?php echo $va['Time'];?></th>
   <th> <font color="white"><?php echo "received";?></th>
  </tr>
  
   <?php endforeach; ?>
  
  </table>

</body>

</html>