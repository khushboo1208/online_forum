
<html>
<head>
<style type="text/css">
.d1{
//background-color:red;
color:red;
}
</style>
<style>
#box
  {
   border-radius:15px 15px 15px 15px;
	//border-style: solid;
	border-color: #FF9900;
	border-width: 10px;
  }

#btn{

	height:35px;
	font-size:20px;
	}
	
.des{
     border-style: groove;
  }	
</style>
</head>
<body> 
<div id="box" class="des" style="position:absolute; height:65%; left:10%; top:29%; width:80%;  ">
<div style="position:absolute; height:91%; left:10%; top:4%; width:80%;  background-color:#FF9900; ">
<table border="1" style="width:100%; text-align:center;">
<tr><th><p style="font-family:Calibri;"><font color="white" size="5%"><b><u>Case Number</u></b></font></p></th><th><p style="font-family:Calibri;"><font color="white" size="5%"><b><u>Case Date</u></b></font></p></th><th><p style="font-family:Calibri;"><font color="white" size="5%"><b><u>Client Name</u></b></font></p></th><th><p style="font-family:Calibri;"><font color="white" size="5%"><b><u>Options</u></b></font></p></th></tr>
<?php 
include('conn.php');
session_start();
$a=$_SESSION['value'];
$s="select cno,cdate,cname from client_details where lawyerid='".$a."' order by id desc";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{   ?>
<tr><td><p style="font-family:Calibri;"><font color="white" ><b><?php echo $r['cno'];  ?></b></font></p></td><td><p style="font-family:Calibri;"><font color="white"><b><?php echo $r['cdate'];  ?></b></font></p></td><td><p style="font-family:Calibri;"><font color="white" ><b><?php echo $r['cname'];  ?></b></font></p></td><td><p style="font-family:Calibri;"><font color="white" ><b><a href="update_sql.php?id=<?php echo $r['cno']; ?>">Update</a> | <a href="delete.php?id=<?php echo $r['cno']; ?>">Delete</a></b></font></p></td></tr>
<?php  }  ?>
</table>
</div></div>
</body></html>