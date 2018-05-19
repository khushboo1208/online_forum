<?php
session_start();
include('home.php');
include('conn.php');

$a=$_SESSION['value'];

if(isset($_POST['submit']))
{
$name=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];

$b=$_REQUEST['area'];

if(move_uploaded_file($temp,"../picture/".$name))
echo "uploaded";
else
{ echo"not";
die(mysql_error());
}

$in="insert into images(image,category,message,flag) values('".$name."','".$a."','".$b."','v') ";
          $m=mysqli_query($conn,$in);
		  echo"video inserted";
           header('Refresh:5;url=main.php');
}
if(isset($_POST['submit']))
{
echo $name."has been uploaded";
}
?>
<html>
<head>
<title>
Video
</title>
</head>
<body background="../picture/bkg_f.png">

<div id="container" style="position:absolute;  top:8%; margin-left:1%;  ">

<img src="../picture/edu.png" height="27%" width="27%">

</div>
<div id="container" style="position:absolute;  top:32%; margin-left:13.6% ">
<img src="../picture/video_up.png" height="15%" width="70%">
</div>
<div id="container" style="position:absolute;  height:10%; width:20%;  top:25%; margin-left:45.5% ">
<form action="video_up.php" method="post" enctype="multipart/form-data">
    <font face="AR ESSENCE" size="6%" color="#59955C" >Select video: </div>
<div id="container" style="position:absolute;  top:24.5%; left:58%; height:10%; width:30%; ">    <input type="file" name="file" id="file"> <input type="submit" value="Upload Video" name="submit"> 
</div>
<div id="container" style="position:absolute;  top:33%; left:46%; height:30%;width:50%; ">
<textarea name="area" cols=80" rows="10" placeholder="write the content here for the corresponding image to be uploaded..." requied ></textarea>
</div>
</form>
<?php if(isset($_POST['submit']))
{
echo $name."has been uploaded";
} ?>
<div style="height:100%; margin-top:33%; height:74%;  width:100%;">
<div id="container" style="position:absolute; top:70%;  margin-left:6%; width:90%; height:60%;">
<?php
include('conn.php');
$s="select image from images where category='".$_SESSION['value']."' and flag='v' order by id desc";
$y=mysqli_query($conn,$s);
while($q=mysqli_fetch_array($y))
{

?>
<a href="v_show.php?id=<?php echo $q['image'];?>"><video width="220" height="140" >
<source src="../picture/<?php echo $q['image'];?>" type="video/mp4">
</video></a>

&nbsp;

<?php
//echo $q['image'];
}
?>
</div>
</div>
</body>
</html>