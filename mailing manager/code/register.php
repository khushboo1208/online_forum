 <?php
 
include('conn.php');

$a=mysqli_real_escape_string($con,$_REQUEST['fname']);
$b=mysqli_real_escape_string($con,$_REQUEST['lname']);
$c=mysqli_real_escape_string($con,$_REQUEST['add']);
$d=mysqli_real_escape_string($con,$_REQUEST['dob']);
$e=mysqli_real_escape_string($con,$_REQUEST['gender']);

$g=mysqli_real_escape_string($con,$_REQUEST['mbno']);
$h=mysqli_real_escape_string($con,$_REQUEST['state']);
$i=mysqli_real_escape_string($con,$_REQUEST['category']);
$j=mysqli_real_escape_string($con,$_REQUEST['id']);
$k=mysqli_real_escape_string($con,$_REQUEST['p']);
$l=mysqli_real_escape_string($con,$_REQUEST['p1']);
$m=mysqli_real_escape_string($con,$_REQUEST['QUEST1']);
$n=mysqli_real_escape_string($con,$_REQUEST['a1']);
$o=mysqli_real_escape_string($con,$_REQUEST['QUEST2']);
$p=mysqli_real_escape_string($con,$_REQUEST['a2']);


if($k==$l)
{ $ins="insert into detailtb(Firstname,Lastname,Address,Dateofbirth,Gender,Mobileno,State,Country,Emailid,Password,Secretq1,Ans1,Secretq2,Ans2) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$g."','".$h."','".$i."','".$j."','".$k."','".$m."','".$n."','".$o."','".$p."')";

$in=mysqli_query($con,$ins);

if($in)
{   
echo "<h1>"."<font color='blue'> "."CONGRATS!!!!"."<br/>"."<br/>"."You are registered.....with MYMAILS"."</font>"."</h1>";
  }
else
{
echo "<h1>"."<font color='red'>"."This EMAIL_ID already exists............."."</font>"."<br/>".
"Please create a new one"."<br/>"."<font color='grey'>"." Redirecting towards registration page ....please wait......."."</font>"."</h1>";

header('Refresh:10; url=registrationpage1.php');
exit();
}

}

else
{ echo '<script language="javascript">';
echo 'alert(" YOU HAVE ENTERED INCORRECT PASSWORD")';
echo '</script>';
header('Refresh:1; url=registrationpage1.php');
exit();
} 

 
?>

<html>
<head>
<link href="qq.css" rel="stylesheet" type="text/css">

</head>

 
<body class="un">
 <h1> <?php echo "Your respective details are:"."<br/>"; ?> </h1>
<table border='10px'>
<tr>
<th>First Name</th>
<td><?php echo $a; ?></td>
</tr>
<tr>
<th>Last Name</th>
<td><?php echo $b;?></td>
</tr>
<tr>
<th> Addresses </th>
<td><?php echo $c;?></td>
</tr>
<tr>
<th> Date of birth </th>
<td><?php echo $d;?></td>
</tr>
<tr>
<th> Gender</th>
<td><?php echo $e;?></td>
</tr>
<tr>
<th> Mobile Number </th>
<td><?php echo $g;?></td>
</tr>
<tr>
<th> State </th>
<td><?php echo $h;?></td>
</tr>
<tr>
<th> Category </th>
<td><?php echo $i;?></td>
</tr>
<tr>
<th> Email_id </th>
<td><?php echo $j;?></td>
</tr>
<tr>
<th> Password </th>
<td><?php echo $k; ?></td>
</tr>
<tr>
<th> <?php echo $m; ?> </th>
<td> <?php echo $n; ?>  </th>
</tr>
<tr>
<th> <?php echo $o; ?> </th>
<td> <?php echo $p; ?>  </th>
</tr>



</table>



</body>
</html>




 
