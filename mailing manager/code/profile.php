<?php


$ses=$_SESSION['value'];

include('conn.php');
$s="select Firstname,Lastname,Emailid,profile_image from detailtb where Emailid='$ses'";

$m=mysqli_query($con,$s);
$final=array();
while($data=mysqli_fetch_array($m))
{  $final[]=$data;  
?>



<!-- image from database-->
<style type="text/css">
<!--
.unname456 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	text-transform: uppercase;
	color: #000000;
	background-color: #FFFFFF;
	font-weight: bold;
}
-->
</style><br>
<span style="position:absolute;top:40px;left:20px;"><img src="myupload/<?php echo $data['profile_image'];?>" width=100 height=120 style=""></span>
<?php
}?>
<table  style="position:absolute;top:37px;left:126px;">

<?php foreach($final AS $v):  ?>



<tr>



<td width="100"  style="vertical-align:top">
		
        
		<?php echo "&nbsp; &nbsp;&nbsp;".$v['Firstname']."&nbsp;".$v['Lastname']; ?>
		<span style="vertical-align:top"><?php echo "&nbsp; &nbsp;&nbsp;".$v['Emailid'];  ?></span>  
		
</td>
</tr>


<?php  endforeach;?>


<br/>
<?php //margin-left:435px;?>
<tr>  <td>
<br/>
<form action="view.php" method="post">
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" class="unname456" value="VIEW "> <br> <br>
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<a href="privacy.php" >Privacy</a>
</form>   </td> </tr>
<tr><td>

</td>  </tr>
</table>