<?php
        
       include('connect.php');
       $value=$_GET['lang'];
       $sql= "select name,url from $value";
       $result = mysql_query($sql);
       while ($row = mysql_fetch_array($result)) 
       {
        
         echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
       }
       
?>