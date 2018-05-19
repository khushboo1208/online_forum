<?php
session_start();
unset($_SESSION['value']);
unset($_SESSION['passw']);
//unset($_SESSION['ID']);
session_destroy();
header('location:login.php?msg=logout successfully');
?>