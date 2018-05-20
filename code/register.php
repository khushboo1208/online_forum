 <?php
 
include('conn.php');
$flag=0;
$a=mysqli_real_escape_string($conn,$_REQUEST['title']);
$b=mysqli_real_escape_string($conn,$_REQUEST['name']);
$t=$a." ".$b;
//echo $t;
$c=mysqli_real_escape_string($conn,$_REQUEST['dob']);
$d=mysqli_real_escape_string($conn,$_REQUEST['sex']);
$e=mysqli_real_escape_string($conn,$_REQUEST['n']);
$g=mysqli_real_escape_string($conn,$_REQUEST['n2']);
$f=$e."-".$g;
//echo $f;
$h=mysqli_real_escape_string($conn,$_REQUEST['eid']);
$i=mysqli_real_escape_string($conn,$_REQUEST['p']);
$j=mysqli_real_escape_string($conn,$_REQUEST['cp']);
$k=mysqli_real_escape_string($conn,$_REQUEST['title2']);
$l=mysqli_real_escape_string($conn,$_REQUEST['fname']);
$u=$k." ".$l;
//echo $u;
$m=mysqli_real_escape_string($conn,$_REQUEST['add1']);
$n=mysqli_real_escape_string($conn,$_REQUEST['add2']);
$s=$m." ".$n;
//echo $s;
$o=mysqli_real_escape_string($conn,$_REQUEST['city']);
$p=mysqli_real_escape_string($conn,$_REQUEST['state']);
$q=mysqli_real_escape_string($conn,$_REQUEST['pc']);
$r=mysqli_real_escape_string($conn,$_REQUEST['ct']);


if($i==$j)
{   
$con=mysqli_connect('localhost','root','mysql','mailstore') or die(mysqli_error($con));
$select="select Emailid from detailtb where Emailid='".$h."'";
//echo $select;
$query=mysqli_query($con,$select);
 //if(mysql_num_rows($query) == 1)
 while($data=mysqli_fetch_array($query))
 {
     if($h==$data[0])
	 {
 
 $ins="insert into lawyer_details(title,name,dob,sex,phonenumber,emailid,password,fathername,address,city,state,postalcode,country) values('".$a."','".$b."','".$c."','".$d."','".$f."','".$h."','".$i."','".$u."','".$s."','".$o."','".$p."','".$q."','".$r."')";

$in=mysqli_query($conn,$ins);

if($in)
{   
echo "<h1>"."<font color='blue'> "."CONGRATS!!!!"."<br/>"."<br/>"."You are now registered.....with LET'S GO LEGAL"."</font>"."</h1>";
  $flag=1;
  //exit();
  }   
else
{
echo "<h1>"."<font color='red'>"."This EMAIL_ID already exists............."."</font>"."<br/>".
"Please create a new one"."<br/>"."<font color='grey'>"." Redirecting towards registration page ....please wait......."."</font>"."</h1>";

header('Refresh:10; url=registration.php');
exit();
}
}
}
}
if($flag==0)
{ echo '<script language="javascript">';
echo 'alert("Please Register")';
echo '</script>';
header('Refresh:1; url=registration.php');
exit();
} 


?>

<html>
<head>
</head>
<body class="un">
 <h1> <?php echo "Your respective details are:"."<br/>"; ?> </h1>
<table border='10px'>
<tr>
<th>Name</th>
<td><?php echo $t; ?></td>
</tr>
<tr>
<th>Date of Birth</th>
<td><?php echo $c;?></td>
</tr>
<tr>
<th> Sex </th>
<td><?php echo $d;?></td>
</tr>
<tr>
<th> Phone no. </th>
<td><?php echo $f;?></td>
</tr>
<tr>
<th> Email ID</th>
<td><?php echo $h;?></td>
</tr>
<tr>
<th> Father's name </th>
<td><?php echo $u;?></td>
</tr>
<tr>
<th> Address </th>
<td><?php echo $s;?></td>
</tr>
<tr>
<th> City </th>
<td><?php echo $o;?></td>
</tr>
<tr>
<th> State </th>
<td><?php echo $p;?></td>
</tr>
<tr>
<th> Postal code </th>
<td><?php echo $q; ?></td>
</tr>
<tr>
<th> Country </th>
<td> <?php echo $r; ?>  </th>
</tr>

</table>
</body>
</html>




 
