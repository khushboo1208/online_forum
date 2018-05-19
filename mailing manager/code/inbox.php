<script src="jquery-1.7.min.js"></script>
<script>
/*
$(function(){
$("#chkall").click(function () {
$("#singlechk").each(function(){
 $("#singlechk").attr('checked', true); 
 }); 
 });
 });

 //$(function () { $('#chkall').toggle( function() { $('#singlechk').prop('checked', true); }, function() { $('#singlechk').prop('checked', false); } ); });
  
  
  $("#chkall").click(function(){
    $("#singlechk").each(function(id,elem){
    // document.getElementById("singlechk").checked=true;
	$("#singlechk").attr('checked',true);
	// return false;
	});
  });
});
 
 function jk(vl) {
    $.ajax({
	  url: 'marked.php',
	  type: 'post'
	  data: {'val':vl}
	  });
  
 }  */
</script>
<?php
session_start();
include('conn.php');
 $sel="select * from sentmail order by Sno desc";
 $e=mysqli_query($con,$sel);
 $finaldata=array();   
 
 while($row=mysqli_fetch_assoc($e))
 {  
 if($row['des']==$_SESSION['value'])
{  
 $finaldata[]=$row;            
 }
 }
 ?>
 
 <html>
 <link href="zz.css" rel="stylesheet" type="text/css">
 <body>
 <style type="text/css">
<!--
.unnamed1 {
	font-size: 24px;
	font-weight: bold;
	text-transform: lowercase;
	color: #FF6699;
	text-decoration: underline;
	background-color: #006699;
}
-->
 </style>
 </br>
  <form action="marked.php" method="get">
 <div style="margin-left:500px;">
 <input type="submit" class="unnamed1" value="delete">
 </div>
 </br>
 <table border='5px'>
  <form action="" method="post" name="form1"> 
  <tr>
  <th><h2>Select </th>
  <th><h2> From</th>
  <th><h2> Subject</th>
  <th><h2> Message</th>
  <th><h2> Date</th>
  <th><h2>Time</th>
 
  
  </tr>
  
 
 
  
  <?php   foreach($finaldata AS $val): ?>
  
  <tr>
    <th>
     
    <input name="checkbox[]" type="checkbox"   class = "chk" value="<?php echo $val['Sno'];?>">
   </th>
  <th> <?php echo $val['sourse'];?></th>
  <th><a href="sub.php?id=<?php echo $val['Sno'];?>" > <font color="black">  <?php echo $val['Subject'];?> </font></a></th>
  <th> <?php echo $val['Body'];?></th>
  <th> <?php echo $val['Date'];?></th>
  <th> <?php echo $val['Time'];?></th>
 
  <!-- <td><a href = "marked.php?val=<?php echo $val['Sno'];?>">delete</a></td>     -->
  </tr>
  <?php endforeach; ?>
  
  
  </table>
 </form>
  </body>
  </html>
  
  
  
 