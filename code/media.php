<?php
include('home.php');
session_start();
$_SESSION['value']="MEDIA";

?>
<html>
<head>
<title>
Homepage
</title>
<style>
span.imgswap {background-image:url("../picture/report.png"); 
  background-repeat: no-repeat; display:block;}
span.imgswap:hover img {visibility:hidden;} 
</style>
</head>
<body background="../picture/bkg_f.png">
<div id="container" style="position:absolute;  height:100%; left:0%;top:19%; width:100%;">
<div id="container" style="position:absolute; margin-left:31%; height:20%; margin-top:-1.5%;">
<font color="#000066" face="AR JULIAN" size="10%"><h2> MEDIA</h2>
</font>
</div>

<div style="height:100%; margin-top:10%; margin-left:6%; width:90%;">
<div  id="container" style="position:absolute;  margin-top:0%; margin-left:0%; background-color:#06DCFB; height:90%; width:72%; overflow:scroll;">
<br>


<?php
include('conn.php');

$sel="select content,Emailid,postno from post where category='MEDIA' order by postno desc";
$q=mysqli_query($conn,$sel);
$i=1;
while($data=mysqli_fetch_array($q))
{  echo "&nbsp;&nbsp;&nbsp;&nbsp;";   
 echo "<font size='4px'>"."<b>"."Post ".$i."&nbsp;:"."</b>"."</font>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data[1]."<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $data[0]."<br>";   
  
$s="select likes,dislikes from choice where sno='".$data['postno']."'";
$qu=mysqli_query($conn,$s);
if(!$qu){  die(mysqli_error($conn));    }
while($d=mysqli_fetch_array($qu))
{      
?>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="eid.php?id=<?php echo $data['content'];?>"><img src="../picture/likebutton.png"  width="30" height="30"></a> <?php echo $d[0];?>
&nbsp;&nbsp;
<a href="eid1.php?id=<?php echo $data['content'];?>"><img src="../picture/dislikebutton.png"  width="30" height="30"></a> <?php echo $d[1];?>
&nbsp;&nbsp;&nbsp;
<a href="cmnt.php?id=<?php echo $data['content'];?>"><img src="../picture/comment.png"  width="30" height="30"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="position:absolute; margin-left:85%; margin-top:-5%;">
<a href="report.php?id=<?php echo $data['content'];?>"><span class="imgswap"><img src="../picture/obj.png"  width="60" height="50" alt="" /></span></a></div>
<?php
}
 echo "<hr>";
   $i++;
}
?>
</div>

<div  id="container" style="position:absolute;  margin-top:6%; margin-left:81%; height:50%; width:10%;">
<table>
<tr><a href="write_post.php"><img src="../picture/post2.png"  width="70" height="70"></a>
</tr>
</table>
<br><br>
<table>
<tr><a href="eid_me.php"><img src="../picture/img_up.png"  width="70" height="70"></a>
</tr> 
</table>
<br><br>
<table>
<tr><a href="eidv_m.php"><img src="../picture/video_up.png"  width="70" height="70"></a>
</tr>
</table>
</div>
</div>
</div>
</body>
</html>