<?php
include('home.php');
session_start();
$a=$_SESSION['value'];


?>
<html>
<head>
<title>
Images
</title>
<style>
img.one{
border-color:#336699;
}

body{
//background-repeat:no-repeat;
//background-attachment:fixed;
}
</style>
</head>
<body background="../picture/bkg_f.png">

<div id="container" style="position:absolute;  top:8%; margin-left:0% ;">

<img src="../picture/cor.png" height="27%" width="27%">

</div>
<div id="container" style="position:absolute;  top:32%; margin-left:12%; ">
<img src="../picture/img_up.png" height="13%" width="70%">
</div>
<div id="container" style="position:absolute;  height:10%; width:20%;  top:25%; margin-left:48% ">
<form action="upload_im.php" method="post" enctype="multipart/form-data">
    <font face="AR ESSENCE" size="6%" color="#59955C" >Select image: </div>
<div id="container" style="position:absolute;  top:24.5%; left:61%; height:10%; width:30%; ">    <input type="file" name="file" id="file"> <input type="submit" value="Upload Image" name="submit"> 
</div>
<div id="container" style="position:absolute;  top:33%; left:46%; height:30%;width:50%; ">
<textarea name="area" cols=80" rows="10" placeholder="write the content here for the corresponding image to be uploaded..." requied ></textarea>
</div>
</form>
<div style="height:100%; margin-top:33%; height:74%;  width:100%;">
<div id="container" style="position:absolute; top:70%;  margin-left:6%; width:90%; height:60%;">
<?php
include('conn.php');
$s="select image from images where category='".$_SESSION['value']."' order by id desc";
$y=mysqli_query($conn,$s);
while($q=mysqli_fetch_array($y))
{

?>

&nbsp;<a href="img_show.php?id=<?php echo $q['image'];?>"><img class="one" src="../picture/<?php echo $q['image'];?>" width='220' height='140'></a>
&nbsp;

<?php
//echo $q['image'];
}
?>
</div>
</div>
</body>
</html>