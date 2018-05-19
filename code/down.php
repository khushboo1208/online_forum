<?php
session_start();
$g=$_SESSION['d'];

$file='../picture/'.$g;

if(file_exists($file))
{
header('Content-Description:File Transfer');
header('Content-Type:application/octet-stream');
header('Content-Disposition:attachment;filename='.basename($file));
header('Expires:0');
header('Cache-control:must-revalidate');
header('Pragma:public');
header('Content-length:'.filesize($file));
ob_clean();
flush();
readfile($file);
exit;
}
else
{
echo "Some wrong commands";
}

?>
