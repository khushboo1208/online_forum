<?php
      include('conn.php');
      $value=$_GET['button_detail'];
      $sql= "select * from sections where ipcname LIKE '%$value%'";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result))
      {
                echo '<tr><td>"'.$row['ipcno'].'"</td><td>    "'.$row['ipcname'].'"  </td><td>    "'.$row['description'].'"  </td></tr> ';


      }  

?>