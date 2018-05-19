<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

if(isset($_POST['submit']))
{
$name=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];

if(move_uploaded_file($temp,"picture/".$name))
echo "uploaded";
else
{ echo"not";
die(mysql_error());
}

mysql_query("INSERT INTO 'videos' VALUE('$name')");
}

if(isset($_POST['submit']))
{
echo $name."has been uploaded";
}
?>