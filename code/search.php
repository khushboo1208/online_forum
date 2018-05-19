<?php
mysql_connect("localhost","root","") or die("could not connect");
mysql_select_db("discuss") or die("could not find db");
$output='';
//collect
if(isset($_POST['searchVal']))  {
$searchq=$_POST['searchVal'];
$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
$query=mysql_query("SELECT * FROM sections WHERE ipcname LIKE '%$searchq%'  ") or die("could not search");
$count=mysql_num_rows($query);
if($count == 0) {
$output="no search results";
} else {
while($row=mysql_fetch_array($query))  {
$ipc=$row[3];


$output .='<div>'.$ipc.'</div>';
//$output .='<select><option>'.$fname.' '.$lname.' '.$eid.'</option></select>';

}  }  }
echo($output);
?>