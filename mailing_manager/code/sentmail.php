<script src="jquery-1.7.min.js"></script>
<?php
session_start();
include('conn.php');
$sel="select * from sentmail where flag=1 order by Sno desc";
 $e=mysqli_query($con,$sel);
 $finaldata=array();   
 
 while($row=mysqli_fetch_assoc($e))
 {  
 if($row['sourse']==$_SESSION['value'])
   {  
   $finaldata[]=$row;    
   }
  }

 /*$sel="select * from sentmail order by Sno desc ";
 $d=mysqli_query($con,$sel);
 $finaldata=array();
 
 while($row=mysqli_fetch_assoc($d))
 {     if($row['sourse']==$_SESSION['value']) 
 {        $finaldata[]=$row;
}
 } */
 ?>
 
 <html>
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
 <body>
 </br>
 
 <form action="marked.php" method="get">
 <div style="margin-left:500px;">
 <input type="submit" class="unnamed1" value="delete">
 </div>
<h1> Mail sent!!! </h1>  
 <table border='5px'>
  <tr>
   <th> <h2>Select </th>
  <th> <h2>To</th>
  <th><h2> Subject</th>
  <th><h2> Message</th>
  <th> <h2>Date</th>
  <th><h2>Time</th>
  </tr>
  
  <?php   foreach($finaldata AS $val): ?>
  
  <tr>
   <th>
    <input name="checkbox[]" type="checkbox"  value="<?php echo $val['Sno'];?>"  class = "chk">
 
   </th>
  <th> <?php echo $val['des'];  $a=$val['des'];?></th>
  <th><a href="sub.php?id=<?php echo $val['Sno'];?>" ><font color="black"> <?php echo $val['Subject'];?> </font></a></th>
  <th> <?php echo $val['Body'];  $c=$val['Body'];?></th>
  <th> <?php echo $val['Date'];  $d=$val['Date'];  ?></th>
  <th> <?php echo $val['Time'];  $f=$val['Time']; ?></th>
  </tr>
  
  <?php endforeach; ?>
  </table>
   
 </form>
 </body>
</html>
  
  
  
 