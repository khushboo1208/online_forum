<?php
include('home.php');
include('conn.php');
?>
<html>
<head>
<title>
Homepage
</title>
<style>
a.ex1:hover, a.ex1:hover {color: red; font-size: 150%;}
</style>
<style>
 
  #btn{
   
	border-radius:15px 15px 15px 15px;
	border-style: solid;
	border-color:black;

	
  }
</style>

</head>
<body>
<div id="container" style="position:absolute; background-color:#FFA8A8; height:17%; left:0%;top:15.2%; width:100%;">
<br>
<br>
<font  face="AR DARLING" size="5.5%">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="ex1" href="transport.php" style="text-decoration: none;">TRANSPORT </a>
&nbsp;&nbsp;&nbsp;
 <a class="ex1" href="corruption.php" style="text-decoration: none">CORRUPTION </a>
 &nbsp;&nbsp;&nbsp;
 <a class="ex1" href="roadrage.php" style="text-decoration: none">ROAD-RAGE  </a>
 &nbsp;&nbsp;&nbsp;
 <a class="ex1" href="security.php" style="text-decoration: none">SECURITY   </a>
 &nbsp;&nbsp;&nbsp;
 <a class="ex1" href="education.php" style="text-decoration: none">EDUCATION  </a>
 &nbsp;&nbsp;&nbsp; 
<a class="ex1" href="media.php" style="text-decoration: none"> MEDIA </a>
 &nbsp;&nbsp;&nbsp;
 <a class="ex1" href="misc.php" style="text-decoration: none">MISCELLANOUS </a>
</font>
</div>

<div id="container" style="position:absolute;  height:68%; left:0%;top:31%; width:100%;">   <!-- #FFDFDF -->
<div  id="btn" style="float:left;  margin-top:7%; margin-left:5%; background-color:#06DCFB; height:70%; width:43%;">

<div  id="container" style="position:absolute;margin-left:2%;  margin-top:1.5%; height:30%; width:32.5%;">

 <marquee  direction="right" scrolldelay="200">
<?php

$s="select image from images where flag='i' order by id desc";
$y=mysqli_query($conn,$s);
while($q=mysqli_fetch_array($y))
{

?>

<img src="../picture/<?php echo $q['image'];?>" width='120' height='100'>
&nbsp;&nbsp;
<?php

}
?></marquee>
 </div>
  
<div  id="container" style="position:absolute;height:7%;  margin-top:4%; margin-left:36%; width:6%;">
<a href="pic_gallery.php"><font face="Stencil" size="5%">More</font></a>
</div> 

 <div  id="container" style="position:absolute; height:30%; margin-left:7%; margin-top:9.8%; width:34%;">
<br>
 <marquee  direction="left" scrolldelay="200">
<?php

$s="select image from images where flag='v' order by id desc";
$y=mysqli_query($conn,$s);
while($q=mysqli_fetch_array($y))
{

?>

<video width="130" height="130" >
<source src="../picture/<?php echo $q['image'];?>" type="video/mp4">
</video>
&nbsp;
<?php

}
?></marquee>
 </div>
<div  id="container" style="position:absolute;height:10%; margin-top:15%; margin-left:1%; width:5.5%;">
<a href="video_gallery.php"><font face="Stencil" size="5%">More</font></a>
</div> 

 
</div>

<div  id="btn" style="position:absolute; text-align:center; margin-top:7%; margin-left:55%; background-color:#06DCFB; height:70%; width:40%;">
<br>
<font face="Stencil" size="5%" color="blue">
<u>WHAT'S NEW</u>
</font>
<br>
<?php
include('conn.php');
$sel="select headline from developer_sol where order by sno desc";
$qu=mysqli_query($conn,$sel);
while($r=mysqli_fetch_array($qu))
{
?>
<a href="solution.php?id=<?php echo $r['headline']; ?>"> <?php  echo $r[0]."<br>";  ?>  </a>
<?php
}

?>
<br>
<a href="solution.php?id=headline1 of transport"> headline1 of transport  </a>
</div>
</div>

<div id="container" style="position:absolute;  height:10%; left:0%;top:105%; background-color:#FFA8A8; width:100%;"> 
<div id="container" style="position:absolute; background-color:red; height:50%;  left:10%; top:30%;">
<table>
<tr>
<td>
<form action="" method="get">
<button>Privacy Policy </button>
</form>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<form action="" method="get">
<button>About us </button>
</form>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<form action="" method="get">
<button>Help </button>
</form>
</td>
</tr>
</div>
</div>

</body>
<html>