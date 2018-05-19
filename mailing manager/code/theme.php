<?php
include('conn.php');
$s="select image from images";
$y=mysqli_query($con,$s);
while($q=mysqli_fetch_array($y))
{
//echo "<img src='myupload/'".$q['image']." width=200 height=400>"
?>

<a href="<?php echo 'profile_img_set.php';?>?id=<?php echo $q['image'];?>"><img src="myupload/<?php echo $q['image'];?>" width='200' height='200'></a>

<?php
echo $q['image'];
}