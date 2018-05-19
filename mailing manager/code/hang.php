<script src="jquery-1.7.min.js"></script>
<style type="text/css">
<!--
body {
	background-image: url(pengu.jpg);
}
-->
</style>
<h1><u> <font color="magenta"> Most contacted </font> </u></h1>
<?php
session_start();

$con=mysqli_connect('localhost','root','','mailstore');
mysqli_select_db($con,'mailstore');

$v=$_SESSION['value'];
         

$arr=array();

$des="select  des from sentmail where  sourse='".$v."' ";
//$sourse="select  sourse,count(sourse) as cnc from sentmail where  des='".$r."' and sourse ='$s'";
 $e=mysqli_query($con,$des)or die(mysqli_error($con));
$r =mysqli_num_rows($e);
//echo $r;
$entry = array();
while($row=mysqli_fetch_array($e))
 {
	//echo $row['des'] ."<br>";
	array_push($entry,$row['des']); 
 }
$am1=array();
	$count = array_count_values($entry);
	//print_r($count);
	foreach ($count as $key=>$num) 
	{
	  // echo $key;
	 // echo  $num."<br>";
	 //$_SESSION['src'] = array();
	  if ($num >2) {
	  array_push($am1,$key);
	  
        // echo $key."<hr>"."<br>";

	 // $arrs = array();
	  // $arrs = $_SESSION['src'] ;
	  //  $_SESSION['src'][] = $key;
	  }
	}
/*$arr=$row;
 $a = array();
 array_push($a,$row['des']);
 $ac = array_count_values($a);
  foreach ($ac as $v){
   if(!in_array($v,$a))
    array_push($a,$v);
	}
print_r($a);
 //
 */
 //if($row['c'] >2) {

   /// echo $row['des'] ."<hr>"."<br>";
	//exit;
//}
 
?> 



<?php


$con=mysqli_connect('localhost','root','','mailstore');
mysqli_select_db($con,'mailstore');

$va=$_SESSION['value'];
         

$arr=array();

$des="select  sourse from sentmail where  des='".$va."' ";
//$sourse="select  sourse,count(sourse) as cnc from sentmail where  des='".$r."' and sourse ='$s'";
 $e=mysqli_query($con,$des)or die(mysqli_error($con));
$r =mysqli_num_rows($e);
//echo $r;
$entryy = array();
while($row=mysqli_fetch_array($e))
 {
	//echo $row['des'] ."<br>";
	array_push($entryy,$row['sourse']); 
 }
$am2=array();
	$count = array_count_values($entryy);
	//print_r($count);
	foreach ($count as $key=>$num) 
	{


	// echo $key;
	 // echo  $num."<br>";
	 //$_SESSION['src'] = array();
	  if ($num >2)
	  {   array_push($am2,$key);
        // echo $key."<hr>"."<br>";

	//  $arrs = array();
	//   $arrs = $_SESSION['src'] ;
	 //   $_SESSION['src'][] = $key;
	  }
	}
	?>


 <?php
 /*
//print_r($_SESSION);
$s =  array_unique($_SESSION['src']);
//print_r($s);
//echo $s;
$con=mysqli_connect('localhost','root','','mailstore');
mysqli_select_db($con,'mailstore');

$r=$_SESSION['value'];
         
$ar=array();
foreach ($s as $v) {
 
$se="select  sourse,des from sentmail where  des='".$r."'  and  sourse='$v'";

 $ee=mysqli_query($con,$se)or die(mysqli_error($con));
 
 //$r =mysqli_num_rows($e);
 $entry2 = array();
while($roww=mysqli_fetch_array($ee))
{
 
//$ar=$roww;
  array_push($entry2,$roww['sourse']);
  
  $count2 = array_count_values($entry2);
  $arlast =array();
  $en = array();
  foreach ($count2 as $k=>$num2) {
  // echo $k . " " .$num2;
    if ($num2 > 2) {
	  array_push($arlast,$k);
	  $en = array_unique($arlast);
	  
	 
	  
	}
  }
   foreach ($en as $v) {
	    //echo $v;
		}


 } 
 }   */
 ?>
 
 <?php
 $am=array_merge($am1,$am2);
 //print_r($am);
 $au=array();
 $au=(array_unique($am));
 //print_r($au);
 
 foreach ($au as $key=>$num) 
 {
 echo $num."<hr>"."<br>";
 }
 
?>
