<?php
//echo "hello";
if (isset($_GET['v'])){
echo basename($_GET['v']); //returning data to ajax
} else {
	echo "you are not authorised";
}
?>