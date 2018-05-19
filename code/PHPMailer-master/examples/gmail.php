<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - GMail SMTP test</title>
</head>
<body>
<?php
//session_start();
include('conn.php');
include('conn_m.php');
$flag=0;
$e=$_REQUEST['eid1'];
//echo $e;
if(isset($_POST['attach'])){
$file_name=htmlspecialchars($_FILES['myfile']['name']);
$ex=explode(".",$file_name);
$target='../../myfiles/'.$file_name;
//echo "<h1>".$target ."</h1>";

$file_location=$_FILES['myfile']['tmp_name'];
if(move_uploaded_file($file_location,$target))
{  echo"file uploaded sucessfully";
//print_r($ex);
//$in="insert into images(image) values('$file_name') ";
//$m=mysqli_query($con,$in);
//header('Location:compose.php');
//echo header('Location: compose.php');

}
else
{
echo"some error";
}
}


//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "yadavanjita@gmail.com";
$mail->AddAddress('yadavanjita@gmail.com');
//Password to use for SMTP authentication
$mail->Password = "ninjahathodi";

$from="admin@mymail.com";

//Set who the message is to be sent from
$mail->setFrom($from);

//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com');

//Set who the message is to be sent to
$add=$_REQUEST['eid1'];
$mail->addAddress($add);

//Set the subject line
$mail->Subject = "Password of Lawyers Diary";
if($mail->Subject =="")
{ $mail->Subject ="no subject";
}


//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually

$sel="select password from lawyer_details where emailid='$e'";
$q=mysqli_query($conn,$sel);
while($w=mysqli_fetch_array($q))
{ echo $w[0];
$mail->AltBody = "Your password is ".$w[0];
$flag=1;
}


//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//$mail->addAttachment($target);//$_SERVER['DOCUMENT_ROOT'].'myfiles\'.download.jpg');


 $time=date_default_timezone_set("Asia/Calcutta");
 $date1=date('y-m-d');
$date=date("h:i:sa");


//echo "<br>".$add;
//echo "<br>".$from;
//echo "<br>".$mail->Subject;
//echo "<br>".$mail->AltBody;
//echo "<br>".$date1;
//echo "<br>".$date;

//send the message, check for errors
if($flag==1){
if (!$mail->send()) 
{
 $ins="insert into sentmail(des,sourse,Subject,Body,Date,Time,flag,Status)values('".$add."','".$from."','".$mail->Subject."','".$mail->AltBody."','".$date1."','".$date."',0,'drafts')";
 if(mysqli_query($con,$ins))
 {
  echo "not Inserted ";
 }
 else
 {
 die(mysqli_error($con));
 }
    echo "Mailer Error: " . $mail->ErrorInfo;
}
 
 
 else
 {
    echo"Mail sent!!!";
 $ins="insert into sentmail(des,sourse,Subject,Body,Date,Time,flag,Status)values('".$add."','".$from."','".$mail->Subject."','".$mail->AltBody."','".$date1."','".$date."',1,'sent')";
 if(mysqli_query($con,$ins))
 {
  echo "Inserted ";
 }
 else
 {
 die(mysqli_error($con));
 }
}
}
else
{
echo "you are not registered...";
}
?>
</body>
</html>
