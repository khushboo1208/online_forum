<?php
include('home.php');



?>
<html>
<head>
<title>
Images
</title>
<style>
img.one{
border-color:brown;
}
</style>
</head>
<body background="../picture/bkg_f.png">
<img src="../picture/image.png" style="position:fixed; left:35px; top:180px; height:420px; width:60px;"/>
<img src="../picture/gallery.png" style="position:fixed; right:35px; top:120px; height:500px; width:55px;"/>
<div id="container" style="position:absolute;  top:27%; margin-left:11%;">
<?php
include('conn.php');
$s="select image from images where flag='i' order by id desc";
$y=mysqli_query($conn,$s);
while($q=mysqli_fetch_array($y))
{

?>
<a href="img_show.php?id=<?php echo $q['image'];?>"><img class="one" src="../picture/<?php echo $q['image'];?>" width='220' height='170' border='6px' /></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php

}
?>

</div>
</body>
</html>