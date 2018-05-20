<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q1 = intval($_GET['q']);

$con = mysqli_connect('localhost','root','mysql','discuss');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"discuss");
//$sql="select * from group where id = '".$q1."'";
$sql="SELECT * FROM `sections` WHERE `ipcno`='$q1'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Chapter</th>
<th>IPC number</th>
<th>IPC name</th>
<th>Description</th>

</tr>";

//if($result == false) {
  //  die("Query failed: ".mysqli_error().PHP_EOL.$sql);
//}
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>