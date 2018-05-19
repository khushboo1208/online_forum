
<?php
include('connect.php');
$value=$_POST['search'];


 $sql= "SELECT * FROM newsbox WHERE newscontent like '%$value%'";

$result=mysql_query($sql,$conn) or die(mysql_error());
   
   while($row=mysql_fetch_array($result)) 
   {     
      echo $row[newscontent];
	  <hr>
	}
       


?>