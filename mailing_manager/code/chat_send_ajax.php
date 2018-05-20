<?php
   session_start();
     //require_once('dbconnect.php');

     //db_connect();
	 include('conn.php');
     
	 $flag=0;
	 date_default_timezone_set("Asia/Calcutta");
     $msg = $_GET["msg"];
     $dt1 = date("Y-m-d");
	 $dt2=date("H:i:s");
	 $dt=$dt1.$dt2;
     $user = $_GET["name"];

	 /*$s="select Firstname from detailtb";
	 $sq=mysqli_query($con,$s);
	 while ($row=mysqli_fetch_array($sq))
	 { 
	 if($user==$row[0])
	 { 
	 }
	 else
	 { 
	 }
	 
	 }
	 */
     $sql="INSERT INTO chat(USERNAME,CHATDATE,MSG) values('".$user."','" .$dt."','".$msg."')";

          echo $sql;

     $result = mysqli_query($con,$sql);
     if(!$result)
     {
        throw new Exception('Query failed: ' . mysqli_error($con));
        exit();
     }

?>





