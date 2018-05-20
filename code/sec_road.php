<script src="jquery-1.7.min.js"></script>
<?php
include('conn.php');

$se1="select distinct(headline) from developer_sol where category='ROAD-RAGE'";
 $q1=mysqli_query($conn,$se1) or die(mysqli_error($conn));
 while($r1=mysqli_fetch_array($q1))
 {  ?>
 <a href="solution.php?id=<?php echo $r1['headline']; ?>"> <?php  echo "<font FACE='AR JULIAN' size='5.5%' color='red'>".$r1[0]."</font>"."<br>";  ?>  </a>
 <?php  
 }

?>