<html>
<head>
<title>Image</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<style>" rel="stylesheet" type="text/css">

</head>

 <style type="text/css">
<!--
.style1 {font-size: 50px}
.style5 {font-family: Arial, Helvetica, sans-serif}
.style7 {
	font-size: 18px;
	color: #990066;
}
.unnamed1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
	font-style: italic;
	color: #FFCC00;
	text-decoration: blink;
	background-color: #006600;
}
body {
	background-image: url(mine.png);
}
.unnamed2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 27px;
	font-style: italic;
	line-height: normal;
	color: #FFFFFF;
	text-decoration: underline;
	background-color: #0000FF;
}
-->
</style>
<head>

<script type="text/javascript">



<!--function match()
<!--{
<!--var a=document.forms['myform']['p'].value;
<!--var b=document.forms['myform']['p1'].value;
<!--if(a!=b)
<!--{
<!--alert('Password And Confirm Password Not match');
<!--return false;
<!--}
<!--}


function validate() 
{
var combo1 = document.getElementById("quest1");
var combo2 = document.getElementById("quest2");


if((combo1.value == "" || combo1.value == null ) || (combo2.value == "" || combo2.value == null)) 
{
alert("You have not selected the secret questions ");
//document.getElementById("cty ").style.border = "2px solid red";
return false;
} 

else {
//document.getElementById("cty").style.border = "";
}
}




</script>
</head>
<body>

<div id="container" class="" style="height:15%; width:100%; font-family: &quot;Courier New&quot;, Courier, mono; font-size: 36px; color: #000099;">
<h1 class="style1">&nbsp; REGISTRATION FORM      
<form action="login.php" method="post" >
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="submit" type="submit" class="unnamed2" value="SIGN  IN"/>
  </form>
</h1>
</div>

&nbsp;&nbsp;&nbsp;
<div align="left"><span class="style5">&nbsp;<span class="style7">
<form name="myform" action="register.php" method="POST" onsubmit="return validate()">
<span id="cty">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Firstname : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
      <input type="text" name="fname" required />
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lastname :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="lname" required />
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="add" required />
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dateof birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="DD/MM/YYYY" name="dob" required/>
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gender :&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  <input name="gender" type="radio" value="male">
	  Male &nbsp;&nbsp;&nbsp;
	  
	 <input name="gender" type="radio" value="female"> 
	   Female
	   <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile number :&nbsp;
      <input type="tel" pattern="[0-9]{10}" placeholder="1234567890" name="mbno" required/>
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="state"required />
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Country :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="category" />
      <br/>
      <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email-id :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="id" required/>
      <br/>
      </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="password" name="p"required />
	   
	    <br/>
      </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password :
       <input type="password" name="p1"required />
</p></br>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secret questions incase you forget your password:<BR/>
&nbsp;&nbsp;&nbsp;&nbsp;</p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <select name="QUEST1" id="quest1">
	  <option value="">QUESTION 1 </option>
      <option >What is your mother's name?</option>
      <option >What is your favourite sport?</option>
      <option >Name of your first friend?</option>
      <option >Name of your favourite author?</option>
      <option>Place where you were born?</option>
	  
	  
     </select> 
	 </span>
	 	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	 <input type="text" size=30 name="a1" required/>
 </p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <select name="QUEST2" id="quest2">
     <option value="">QUESTION 2</option>
     <option >DOB of your mother?</option>
     <option >What is your house number?</option>
     <option>DOB of your favourite author?</option>
     <option >Your first phone number?</option>
     <option>Time at which you were born?</option>
   
   </select> 
   </span>
   
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	 <input type="text" size=30 name="a2" required/>
   </p>
 <p> <br/>
      <br/>
      </span></span><br/>
    <div style="margin-left:500px;">	
      <input type="submit" class="unnamed1" value="DONE" /> 
  </p>
</form>

</div>

</div>


</body>
</html>


