<?php
session_start();
include('conn.php');
$a=$_SESSION['value'];
//if (isset($_POST['val'])) {
//if (isset($_GET['val'])) {
//$val = $_GET['val'];
$val = $_GET['checkbox'];
foreach ($val as $del) {
echo $del;
//echo $s;
$result = mysqli_query($con,"delete from sentmail where Sno=$del") or die(mysqli_error());
//header('Location: maintry.php');
}
if ($result) {
  header('Location: maintry.php');
}
//}
//}
?>