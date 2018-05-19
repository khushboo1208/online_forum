<html>
<head><title></title>
<style type="text/css">
.d1{
//background-color:red;
color:red;
}
</style>
<style>
#btn{

	height:35px;
	font-size:20px;
	
	
}
</style>
<script type="text/javascript" src="jquery-1.7.min.js"> </script>
<script type="text/javascript">
function searchq() {
var searchTxt=$("input[name='search']").val();
$.post("search.php", { searchVal:searchTxt}, function(output) {
$("#output").html(output);
});
}
</script>
</head>

<body>
<div style="position:absolute; left:50%; top:28%; ">
<form action="ind_1.php" method="post">
<input id="btn" class="d1" type="text" size="40px" name="search" placeholder="search here" onkeydown="searchq();"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input id="btn" type="submit" value=">>"/>
</form>
</div>
<div id="output" style="position:absolute; left:50%; top:37%; color:white; ">    </div>
</body>
</html>