<script src="jquery-1.7.min.js"></script>
<?php
include('conn.php');

$se1="select distinct(headline) from developer_sol where category='SECURITY'";
 $q1=mysqli_query($conn,$se1) or die(mysqli_error($conn));
 while($r1=mysqli_fetch_array($q1))
 {  ?> <br><br>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="../picture/image_r.png" height="4%" width="2.5%"/> &nbsp;&nbsp;
 <a href="solution.php?id=<?php echo $r1['headline']; ?>"> <?php  echo "<font FACE='AR JULIAN' size='5.5%' color='red'>".$r1[0]."</font>"."<br>";  ?>  </a>
 <?php  
 }

?>