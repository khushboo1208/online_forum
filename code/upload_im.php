<?php
session_start();
include('conn.php');
$a=$_SESSION['value'];
$b=$_REQUEST['area'];
$file_name=$_FILES['file']['name'];

$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = pathinfo($file_name, PATHINFO_EXTENSION);



if ((($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))


&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
   // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  //  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("../multimedia/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../multimedia/" . $_FILES["file"]["name"]);
       
         $in="insert into images(image,category,message,flag) values('".$file_name."','".$a."','".$b."','i') ";
          $m=mysqli_query($conn,$in);
		  echo '<script language="javascript">';
                   echo 'alert("File uploaded successfully.")';
                   echo'</script>'; 
           header('Refresh:0;url=main.php');
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
  
?>
