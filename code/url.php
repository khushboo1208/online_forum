<?php
        
       include('connect.php');
       $value=$_GET['tblName'];
       $channel_nam=$_GET['Channel'];
       $sql= "select url from $value where name='$channel_nam'";
       $result = mysql_query($sql);
       $row = mysql_fetch_array($result); 
       echo $row['url'];

       
       
?>