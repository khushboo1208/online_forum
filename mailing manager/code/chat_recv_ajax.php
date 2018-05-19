<?php

     //require_once('dbconnect.php');

     //db_connect();
	 include('conn.php');
     
     $sql = "SELECT *,(chatdate) as cdt from chat order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     $result = mysqli_query($con,$sql) or die('Query failed: ' . mysqli_error($con));
     
     // Update Row Information
     $msg="<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
     while ($line = mysqli_fetch_array($result, MYSQL_ASSOC))
     {
           $msg = $msg . "<tr><td>" . $line["cdt"] . "&nbsp;</td>" .
                "<td>" . $line["USERNAME"] . ":&nbsp;</td>" .
                "<td>" . $line["MSG"] . "</td></tr>";
     }
     $msg=$msg . "</table>";
     
     echo $msg;

?>





