<?php
include('home.php');
?>
<html>
<head>
<title>
Videos
</title>
<style>
video.one{
border:6px;
border-color:brown;
}
</style>
</head>
<body background="../picture/bkg_f.png">
<img src="../picture/video.png" style="position:fixed; left:35px; top:180px; height:400px; width:55px;"/>
<img src="../picture/gallery.png" style="position:fixed; right:35px; top:120px; height:500px; width:55px;"/>
<div id="container" style="position:absolute;  top:27%; margin-left:8%;">
<?php
include('conn.php');
$s="select image from images where flag='v' order by id desc";
$y=mysqli_query($conn,$s);
while($q=mysqli_fetch_array($y))
{

?>

<a href="v_show.php?id=<?php echo $q['image'];?>"><video class="one" width="220" height="170" border='6px'>
<source  src="../picture/<?php echo $q['image'];?>" height="170" width="220" type="video/mp4"  style="border:6px;"  >
</video></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php

}
?>

</div>
</body>
</html>